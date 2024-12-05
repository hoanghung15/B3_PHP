document.addEventListener("click", (event) => {
  const button = event.target.closest("#btnCapnhat");
  if (button) {
    const id = button.getAttribute("data-id");
    console.log(id);
    const modal = document.querySelector("#editModal");
    modal.setAttribute("data-id", id);
  }
});
document.getElementById("applyButton").addEventListener("click", async () => {
  const modal = document.querySelector("#editModal");
  const id = modal.getAttribute("data-id");

  const name = document.getElementById("editName").value.trim();
  const gia = document.getElementById("editGia").value;
  const mota = document.getElementById("editMota").value.trim();
  const trangthai = document.getElementById("selectionForm").value;
  const foodUrl = sessionStorage.getItem("tempUrl");
  console.log(id, name, gia, mota, trangthai, foodUrl);

  try {
    const response = await fetch("../php/update_food.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        id,
        name,
        gia,
        mota,
        trangthai,
        foodUrl,
      }),
    });
    const result = await response.json();
    if (result.success) {
      alert("Cập nhật thông tin thành công!");
      fetchFoods();
      bootstrap.Modal.getInstance(modal).hide();
    } else {
      alert("Lỗi khi cập nhật: " + result.message);
    }
  } catch (error) {
    console.error("Lỗi khi gửi dữ liệu:", error);
  }
});
