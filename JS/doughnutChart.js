// Thiết lập dữ liệu cho biểu đồ
const data1 = {
  labels: ["Tại chỗ", "Mang về", "Đặt"],
  datasets: [
    {
      label: "My First Dataset",
      data: [10, 25, 5],
      backgroundColor: [
        "rgb(220, 53, 69)",
        "rgb(42, 204, 240)",
        "rgb(255, 193, 7)",
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

// Khởi tạo biểu đồ doughnut
const myDoughnutChart = new Chart(
  document.getElementById("doughnutChart"),
  config1
);
