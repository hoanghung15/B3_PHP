document.addEventListener("click", (event) => {
  const button = event.target.closest(".btn-outline-primary");
  if (button) {
    const modal = document.querySelector("#editModal");

    // Gán giá trị cho các input trong modal
    modal.querySelector("#editName").value = button.getAttribute("data-name");
    modal.querySelector("#editDate").value = button.getAttribute("data-date");
    modal.querySelector("#editEmail").value = button.getAttribute("data-email");
    modal.querySelector("#editPhone").value = button.getAttribute("data-phone");
  }
});
