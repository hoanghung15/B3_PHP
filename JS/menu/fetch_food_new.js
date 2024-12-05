function fetchFoods(sort = "asc", search = "") {
  fetch(`../php/fetch_foods.php?sort=${sort}&search=${search}`)
    .then((response) => response.json())
    .then((food) => {
      console.log("Data fetched successfully:", food);
      const tableBody = document.querySelector("tbody");
      tableBody.innerHTML = "";
      food.forEach((item) => {
        const collapseId = `detailsRow-${item.ID}`; // Tạo id duy nhất cho mỗi collapse
        tableBody.innerHTML += `
              <tr data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false">
                          <td>
                              <input type="checkbox" name="" id="" />
                          </td>
                          <td>#${item.ID}</td>
                          <td>
                              <div class="d-flex align-items-center">
                                  <div class="me-4" style="width: 40px; height: 40px">
                                      <img src="${item.Anh}" alt="" class="w-100 h-100" />
                                  </div>
                                  <p class="mb-0">${item.TenMon}</p>
                              </div>
                          </td>
                          <td>
                              ${item.MoTa}
                          </td>
                          <td>${item.Gia}đ</td>
                          <td>123</td>
                          <td>
                              <div class="text-white p-2 rounded divStatus">
                                  <span class="" style="font-size: 14px">${item.TrangThai}</span>
                              </div>
                          </td>
                      </tr>
                      <tr id="collapse" class="collapse" style="font-size: 14px">
                          <td colspan="12">
                              <div class="w-100 d-flex justify-content-center p-5">
                                  <div class="d-flex w-100 justify-content-between">
                                      <!-- img -->
                                      <div class="" style="width: 220px; height: 220px">
                                          <img src="${item.Anh}" alt="" class="w-100 h-100 rounded-3" />
                                      </div>
                                      <!-- detail -->
                                      <div class="" style="width: 30%">
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Mã hàng:</span>
                                              <span class="fw-bold">${item.ID}</span>
                                          </div>
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Mã vạch:</span>
                                              <span class="fw-bold"></span>
                                          </div>
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Tên:</span>
                                              <span class="fw-bold">${item.TenMon}</span>
                                          </div>
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Trang thái:</span>
                                              <span class="fw-bold">${item.TrangThai}</span>
                                          </div>
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Giá :</span>
                                              <span class="fw-bold">${item.Gia}</span>
                                          </div>
                                          <div class="border-bottom p-2">
                                              <span class="pe-4">Số lượng bán:</span>
                                              <span class="fw-bold">${item.SoLuongBan}</span>
                                          </div>
                                      </div>
                                      <!-- script -->
                                      <div class="">
                                          <div class="border-bottom">
                                              <p class="">
                                                  Mô tả:
                                                  <span class="fw-bold">
                                                      ${item.MoTa}</span>
                                              </p>
                                          </div>
                                          <div class="border-bottom">
                                              <p class="">
                                                  Ghi chú:
                                                  <span class="fw-bold"> </span>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="w-100 d-flex px-4 justify-content-end">
                                  <button 
                                        id="btnCapnhat" 
                                        data-id="${item.ID}" 
                                        data-name="${item.TenMon}"
                                      data-gia="${item.Gia}" 
                                      data-mota="${item.MoTa}" 
                                      data-trangthai="${item.TrangThai}"
                                      data-bs-target="#editModal" 
                                      data-bs-toggle="modal" type="button"
                                      class="btn btn-success me-2">
                                      <i class="bi bi-check-square-fill pe-2"></i> Cập nhật
                                  </button>
                                  <button id="btnXoa" class="btn btn-secondary me-2" type="button">
                                      <i class="bi bi-qr-code-scan pe-2"></i> In tem mã
                                  </button>
                                  <button
                                  id="btnXoa"
                                   data-id="${item.ID}" data-bs-target="#deleteModal" data-bs-toggle="modal"
                                      class="btn btn-danger me-2" type="button">
                                      <i class="bi bi-lock-fill pe-2"></i>Xóa
                                  </button>
                              </div>
                          </td>
                      </tr>    
          `;
      });
    });
}
fetchFoods();
document.querySelector("#searchOrder").addEventListener("input", function () {
  const searchValue = this.value.trim();
  fetchFoods("asc", searchValue);
});
document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("click", function () {
    const sortOrder = this.textContent.includes("Tăng dần") ? "desc" : "asc";
    const searchValue = document.querySelector("#searchOrder").value.trim();
    fetchFoods(sortOrder, searchValue);
  });
});
