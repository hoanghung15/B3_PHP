document.getElementById("btnAdd").addEventListener("click", async function () {
    // Lấy giá trị từ các trường nhập
    const name = document.getElementById("addName").value.trim();
    const date = document.getElementById("addDate").value;
    const email = document.getElementById("addEmail").value.trim();
    const phone = document.getElementById("addPhone").value.trim();
    const avtUrl = sessionStorage.getItem("tempUrl") || "../asset/tempEmployee.jfif"; // Giá trị mặc định nếu không có avtUrl

    // Kiểm tra các trường hợp để đảm bảo dữ liệu hợp lệ
    if (!name || !date || !email) {
        alert("Vui lòng nhập đầy đủ thông tin yêu cầu!");
        return;
    }

    try {
        // Gửi yêu cầu đến server để thêm nhân viên
        const response = await fetch("../php/add_employee.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: new URLSearchParams({
                Ten: name,
                NgayVao: date,
                Email: email,
                SoDienThoai: phone,
                avtUrl: avtUrl,
            }),
        });

        const result = await response.json();
        if (result.success) {
            alert("Thêm nhân viên thành công!");
            // Cập nhật danh sách sau khi thêm thành công
            fetchEmployees();
            // Đóng modal
            bootstrap.Modal.getInstance(document.querySelector("#addModal")).hide();
        } else {
            alert("Lỗi khi thêm nhân viên: " + result.message);
        }
    } catch (error) {
        console.error("Lỗi khi gửi dữ liệu:", error);
        alert("Đã xảy ra lỗi trong quá trình thêm nhân viên!");
    }
});
