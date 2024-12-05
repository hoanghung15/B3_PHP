document.addEventListener("click", (event) => {
  const button = event.target.closest("#btnCapnhat");
  if (button) {
    const modal = document.querySelector("#editModal");
    modal.querySelector("#editName").value = button.getAttribute("data-name");
    modal.querySelector("#editGia").value = button.getAttribute("data-gia");
    modal.querySelector("#editMota").value = button.getAttribute("data-mota");
    const selectElement = modal.querySelector(".form-selection");
    const statusValue = button.getAttribute("data-trangthai");
    selectElement.value = statusValue;
  }
});
