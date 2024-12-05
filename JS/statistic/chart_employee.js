fetch(`../php/statistic_employee.php`) // Đường dẫn tới file PHP
  .then((response) => response.json())
  .then((data) => {
    // Kiểm tra lỗi từ server
    if (data.error) {
      console.error("Error:", data.error);
      return;
    }

    // Xử lý dữ liệu
    const labels = data.map((employee) => employee.Ten); // Tên nhân viên
    const chartData = data.map((employee) => employee.TongDon); // Tổng đơn
    console.log("chartData", chartData);
    console.log("labels", labels);
    // Cập nhật biểu đồ
    const data2 = {
      labels: labels,
      datasets: [
        {
          label: "Tổng Đơn Nhân Viên",
          data: chartData,
          backgroundColor: [
            "rgb(255, 99, 132)",
            "rgb(54, 162, 235)",
            "rgb(255, 205, 86)",
            "rgb(75, 192, 192)",
            "rgb(153, 102, 255)",
            "rgb(255, 159, 64)",
            "rgb(255, 192, 203)",
            "rgb(165, 42, 42)",
            "rgb(128, 128, 128)",
            "rgb(0, 255, 255)",
          ],
          hoverOffset: 4,
        },
      ],
    };

    // Cấu hình biểu đồ
    const config2 = {
      type: "bar",
      data: data2,
      options: {
        indexAxis: "y", // Đặt để biểu đồ hiển thị ngang
        plugins: {
          legend: {
            position: "bottom", // Đặt vị trí chú thích ở dưới biểu đồ
          },
        },
        scales: {
          x: {
            beginAtZero: true,
          },
        },
      },
    };

    // Render biểu đồ
    const myHorizontalBarChart = new Chart(
      document.getElementById("exEmployee"),
      config2
    );
  })
  .catch((error) => console.error("Fetch Error:", error));
