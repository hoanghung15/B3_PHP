document.addEventListener("click", (event) => {
  const button = event.target.closest("#btnXoa");
  if (button) {
    console.log("xoaaa");
    const id = button.getAttribute("data-id");
    console.log(id);
    const modal = document.querySelector("#deleteModal");
    modal.setAttribute("data-id", id);
  }
});
document.getElementById("confirmDelete").addEventListener("click", async () => {
  const modal = document.querySelector("#deleteModal");
  const id = modal.getAttribute("data-id");
  console.log("modalID", id);
  try {
    const response = await fetch("../php/delete_food.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({ id }),
    });
    const result = await response.json();
    if (result.success) {
      alert("Xoa thanh cong");
      fetchFoods();
      bootstrap.Modal.getInstance(
        document.querySelector("#deleteModal")
      ).hide();
    }
  } catch (error) {
    console.error("Lỗi khi gửi dữ liệu:", error);
  }
});
