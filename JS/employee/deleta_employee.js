// Gán sự kiện click cho các nút xóa
document.querySelector(".card-container").addEventListener("click", function (event) {
    const button = event.target.closest(".btn-outline-danger");
  
    if (button) {
      // Lấy ID nhân viên từ data-id
      const id = button.getAttribute("data-id");
      const deleteButton = document.querySelector("#deleteButton");
  
      // Đảm bảo nút xóa trong modal được gán ID để gửi yêu cầu
      if (deleteButton) {
        deleteButton.setAttribute("data-id", id);
      }
    }
  });
  
  // Xử lý sự kiện click cho nút xóa trong modal
  document.querySelector("#deleteButton").addEventListener("click", async () => {
    const deleteButton = document.querySelector("#deleteButton");
    const id = deleteButton ? deleteButton.getAttribute("data-id") : null;
  
    if (!id) {
      alert("ID không hợp lệ hoặc không được gán!");
      return;
    }
  
    try {
      // Gửi yêu cầu xóa đến server
      const response = await fetch("../php/delete_employee.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({ id }),
      });
  
      const result = await response.json();
      if (result.success) {
        alert("Xóa nhân viên thành công!");
        // Cập nhật lại danh sách nhân viên sau khi xóa
        fetchEmployees();
        // Đóng modal sau khi xóa thành công
        bootstrap.Modal.getInstance(document.querySelector("#deleteModal")).hide();
      } else {
        alert("Lỗi khi xóa: " + result.message);
      }
    } catch (error) {
      console.error("Lỗi khi gửi dữ liệu:", error);
    }
  });
  