fetch('../php/statistic_order_type.php')
  .then((response) => response.json())
  .then((data) => {
    // Xử lý dữ liệu
    const labels = ["Tại chỗ", "Mang về", "Đặt Online"]; // Các loại hình
    const chartData = [0, 0, 0]; // Khởi tạo mảng dữ liệu

    // Map dữ liệu từ API vào mảng `chartData`
    data.forEach((item) => {
      if (item.LoaiHinh === "Tại chỗ") chartData[0] = item.SoLuong;
      if (item.LoaiHinh === "Mang về") chartData[1] = item.SoLuong;
      if (item.LoaiHinh === "Đặt Online") chartData[2] = item.SoLuong;
    });

    // Cập nhật dữ liệu biểu đồ
    const data1 = {
      labels: labels,
      datasets: [
        {
          label: "Số lượng đơn hàng theo loại hình",
          data: chartData,
          backgroundColor: [
            "rgb(220, 53, 69)", // Tại chỗ
            "rgb(42, 204, 240)", // Mang về
            "rgb(255, 193, 7)", // Đặt Online
          ],
          hoverOffset: 4,
        },
      ],
    };

    // Cấu hình biểu đồ
    const config1 = {
      type: "doughnut",
      data: data1,
    };

    // Khởi tạo biểu đồ Doughnut
    const myDoughnutChart = new Chart(
      document.getElementById("doughnutChart"),
      config1
    );
  })
  .catch((error) => console.error("Fetch Error:", error));
