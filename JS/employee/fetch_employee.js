function fetchEmployees(sort = "asc", search = "") {
  fetch(`../php/fetch_employees.php?sort=${sort}&search=${search}`)
    .then((response) => response.json())
    .then((employees) => {
      const container = document.querySelector(".card-container");
      container.innerHTML = ""; // Xóa nội dung cũ

      if (employees.length === 0) {
        container.innerHTML =
          "<p class='text-center'>Không tìm thấy nhân viên nào.</p>";
        return;
      }

      employees.forEach((emp) => {
        const cardHTML = `
                    <div class="cardView col-3 px-3 mt-3">
                        <div class="w-100 bg-white cardView rounded shadow-sm">
                            <!-- button edit+delete -->
                            <div class="w-100 d-flex p-2 justify-content-end">
                                <button 
                                data-id="${emp.ID}"
                                data-name="${emp.Ten}"
                                data-date="${emp.NgayVao}"
                                data-email="${emp.Email}"
                                data-phone="${emp.SoDienThoai || ""}"
                                data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                    class="btn btn-outline-primary me-2">
                                    <i class="bi bi-pen"></i>
                                </button>
                                <button
                                data-id="${emp.ID}" 
                                id="btnXoa"
                                data-bs-target="#deleteModal" data-bs-toggle="modal" type="button"
                                    class="btn btn-outline-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </div>
                            <!-- avt -->
                            <div class="w-100 mt-4 d-flex justify-content-center align-items-center">
                                <div style="width: 120px; height: 120px">
                                    <img src="${
                                      emp.avtUrl || "../asset/tempEmployee.jfif"
                                    }" alt="Avatar" 
                                         class="w-100 h-100 rounded-circle" />
                                </div>
                            </div>
                            <!-- Name -->
                            <div class="w-100 text-center mt-4">
                                <p class="fw-bold mb-0">${emp.Ten}</p>
                                <p class="text-secondary">#${emp.ID}</p>
                            </div>
                            <!-- infor -->
                            <div class="w-100 p-2" style="font-size: 14px">
                                <div class="w-100 py-2 px-4 bg-light rounded">
                                    <!-- Date+quantity -->
                                    <div class="d-flex justify-content-between border-bottom">
                                        <div>
                                            <p class="text-secondary mb-0">Ngày vào</p>
                                            <p class="fw-bold">${new Date(
                                              emp.NgayVao
                                            ).toLocaleDateString()}</p>
                                        </div>
                                        <div>
                                            <p class="text-secondary mb-0">Tổng đơn</p>
                                            <p class="fw-bold">${
                                              emp.TongDon
                                            }</p>
                                        </div>
                                    </div>
                                    <!-- inforDetail -->
                                    <div class="pt-2">
                                        <p class="mb-0 text-secondary">Email</p>
                                        <p class="fw-bold">
                                            <i class="bi bi-envelope-at pe-2"></i>${
                                              emp.Email
                                            }
                                        </p>
                                        <p class="mb-0 text-secondary">Số điện thoại</p>
                                        <p class="fw-bold">
                                            <i class="bi bi-telephone pe-2"></i>${
                                              emp.SoDienThoai || "Không có"
                                            }
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
        container.innerHTML += cardHTML;
      });
    })
    .catch((err) => console.error("Error:", err));
}

// Fetch dữ liệu mặc định
fetchEmployees();

// Xử lý tìm kiếm
document.querySelector("#searchOrder").addEventListener("input", function () {
  const searchValue = this.value.trim();
  fetchEmployees("asc", searchValue);
});

// Xử lý sắp xếp
document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("click", function () {
    const sortOrder = this.textContent.includes("Muộn nhất") ? "desc" : "asc";
    const searchValue = document.querySelector("#searchOrder").value.trim();
    fetchEmployees(sortOrder, searchValue);
  });
});
