// Thiết lập dữ liệu cho biểu đồ
const data = {
  labels: ["Red", "Blue", "Yellow"],
  datasets: [
    {
      label: "Mã nhân viên",
      data: [300, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};

// Cấu hình biểu đồ với dạng cột ngang
const config = {
  type: "bar",
  data: data,
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

// Khởi tạo biểu đồ cột ngang
const myHorizontalBarChart = new Chart(
  document.getElementById("myDoughnutChart"),
  config
);
