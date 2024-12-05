// Thiết lập dữ liệu cho biểu đồ
const data3 = {
  labels: ["Shopee"],
  datasets: [
    {
      label: "Doanh thu TMDT",
      data: [5322],
      backgroundColor: ["rgb(238, 77, 45)"],
      hoverOffset: 4,
    },
  ],
};

// Cấu hình plugin để hiển thị text ở giữa
const centerTextPlugin = {
  id: "centerText",
  beforeDraw(chart) {
    const { width, height, ctx } = chart;
    ctx.restore();
    const fontSize = (height / 300).toFixed(2); // Giảm kích thước font
    ctx.font = `${fontSize}em sans-serif`;
    ctx.textBaseline = "middle";

    const text = chart.config.data.datasets[0].data[0]; // Giá trị doanh thu
    const textX = Math.round((width - ctx.measureText(text).width) / 2);
    const textY = height / 2;

    ctx.fillText(text, textX, textY);
    ctx.save();
  },
};

// Cấu hình biểu đồ và thêm plugin
const config3 = {
  type: "doughnut",
  data: data3,
  options: {
    plugins: {
      legend: {
        display: true, // Hiển thị chú thích
        position: "bottom", // Vị trí chú thích ở dưới
        labels: {
          font: {
            size: 12, // Kích thước chữ trong chú thích
          },
        },
      },
    },
  },
  plugins: [centerTextPlugin],
};

// Khởi tạo biểu đồ doughnut
const myDoughnutChart = new Chart(
  document.getElementById("effectShopee"),
  config3
);
