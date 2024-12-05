fetch("../php/statistic_revenue.php")
  .then((response) => response.json())
  .then((data) => {
    // Xử lý dữ liệu
    const labels = Array.from({ length: 12 }, (_, i) => `Tháng ${i + 1}`);
    const chartData = Array(12).fill(0);

    // Map dữ liệu từ API vào mảng `chartData`
    data.forEach((item) => {
      const monthIndex = item.Thang - 1; // Chỉ số tháng (0-based index)
      chartData[monthIndex] = item.TongDoanhThu;
    });
    console.log("lables", labels);
    console.log("chartData", chartData);

    // Cập nhật dữ liệu biểu đồ
    const dataConfig = {
      labels: labels,
      datasets: [
        {
          label: "Doanh thu theo tháng",
          data: chartData,
          backgroundColor: "rgba(67, 94, 190, 0.7)",
        },
      ],
    };

    // Cấu hình biểu đồ
    const config = {
      type: "bar",
      data: dataConfig,
      options: {
        scales: {
          x: {
            grid: {
              display: false, // Tắt lưới trục x
            },
          },
          y: {
            beginAtZero: true,
            grid: {
              display: true, // Hiển thị lưới trục y
            },
          },
        },
      },
    };

    // Khởi tạo biểu đồ
    const totalRevenueYearChart = new Chart(
      document.getElementById("totalRevenueYear"),
      config
    );
  })
  .catch((error) => console.error("Fetch Error:", error));
