document.getElementById("btnAdd").addEventListener("click", async function () {
  const name = document.getElementById("addName").value.trim();
  const gia = document.getElementById("addGia").value;
  const mota = document.getElementById("addMota").value.trim();
  const trangthai = document.getElementById("addTrangthai").value;
  const foodUrl = sessionStorage.getItem("tempUrl");

  try {
    const response = await fetch("../php/add_food.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        name: name,
        gia: gia,
        mota: mota,
        trangthai: trangthai,
        foodUrl: foodUrl,
      }),
    });

    const result = await response.json(); // Xử lý JSON trả về
    if (result.success) {
      alert(result.message); // Thông báo thành công
      fetchFoods();
      bootstrap.Modal.getInstance(document.querySelector("#addModal")).hide();
    } else {
      alert("Lỗi: " + result.message);
    }
  } catch (error) {
    console.error("Lỗi khi gửi dữ liệu:", error);
    alert("Đã xảy ra lỗi trong quá trình thêm!");
  }
});
