// Thêm event listener cho nút chỉnh sửa trong modal
document
  .querySelector(".card-container")
  .addEventListener("click", function (event) {
    const button = event.target.closest(".btn-outline-primary"); // Tìm nút chỉnh sửa

    if (button) {
      // Lấy ID từ thuộc tính data-id của nút
      const id = button.getAttribute("data-id");

      // Gán ID vào input ẩn hoặc thuộc tính của modal
      const modal = document.querySelector("#editModal");
      modal.setAttribute("data-id", id);

      // Có thể thêm code để tự động điền thông tin vào modal nếu cần
      document.querySelector("#editName").value =
        button.getAttribute("data-name");
      document.querySelector("#editDate").value =
        button.getAttribute("data-date");
      document.querySelector("#editEmail").value =
        button.getAttribute("data-email");
      document.querySelector("#editPhone").value =
        button.getAttribute("data-phone");
    }
  });

// Thêm event listener cho nút Áp dụng trong modal
document.getElementById("applyButton").addEventListener("click", async () => {
  const modal = document.querySelector("#editModal");
  const id = modal.getAttribute("data-id"); // Lấy ID từ thuộc tính data-id của modal

  // Lấy giá trị từ các input
  const name = document.getElementById("editName").value.trim();
  const date = document.getElementById("editDate").value.trim();
  const email = document.getElementById("editEmail").value.trim();
  const phone = document.getElementById("editPhone").value.trim();
  const image = sessionStorage.getItem("tempUrl") || "";

  // Log các trường và giá trị gửi đến PHP
  console.log("Dữ liệu chuẩn bị gửi đến PHP:");
  console.log("ID:", id);
  console.log("Tên:", name);
  console.log("Ngày vào:", date);
  console.log("Email:", email);
  console.log("Số điện thoại:", phone);
  console.log("URL ảnh:", image);

  // Kiểm tra dữ liệu trước khi gửi
  if (!id) {
    alert("Không tìm thấy ID nhân viên. Vui lòng thử lại.");
    return;
  }

  if (!name || !date || !email) {
    alert("Vui lòng nhập đầy đủ thông tin!");
    return;
  }

  // Gửi dữ liệu tới server
  try {
    const response = await fetch("../php/update_employee.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        id,
        name,
        date,
        email,
        phone,
        image,
      }),
    });

    const result = await response.json();
    if (result.success) {
      alert("Cập nhật thông tin thành công!");
      fetchEmployees(); // Cập nhật lại danh sách nhân viên
      bootstrap.Modal.getInstance(modal).hide(); // Đóng modal
    } else {
      alert("Lỗi khi cập nhật: " + result.message);
    }
  } catch (error) {
    console.error("Lỗi khi gửi dữ liệu:", error);
  }
});
