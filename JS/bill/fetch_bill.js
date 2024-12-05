function fetch_bill() {
  fetch(`../php/fetch_bill.php`)
    .then((respone) => respone.json())
    .then((hoaDonArray) => {
      console.log("Data fetched successfully:", hoaDonArray);
      const tableBody = document.querySelector("tbody");
      tableBody.innerHTML = "";
      hoaDonArray.forEach((item) => {
        tableBody.innerHTML += `                   
         <tr data-bs-toggle="collapse" data-bs-target="#detailsRow" aria-expanded="false">
                        <td>
                            <input type="checkbox" name="" id="" />
                        </td>
                        <td>#${item.MaHoaDon}</td>
                        <td>${item.Ngay}</td>
                        <td>${item.Gio}</td>
                        <td>
                            <i class="bi bi-geo-alt-fill pe-2"></i>133 Nguyễn Văn Trỗi, Hà
                            Đông, HN
                        </td>
                        <td>${item.TongGia}000đ</td>
                        <td>${item.LoaiHinh}</td>
                        <td>
                            <div class="text-white p-2 rounded divStatus">
                                <span class="" style="font-size: 14px">${item.TrangThaiHoaDon}</span>
                            </div>
                        </td>
                    </tr>
                    <!-- collapseRow -->
                    <tr id="detailsRow" class="collapse" style="font-size: 14px">
                        <td colspan="12">
                            <div class="row px-5">
                                <div class="col-4 border-end">
                                    <div class="w-100 p-2">
                                        <div class="">
                                            <p class="fw-bold pHeaderCollapse">
                                                Thông tin đơn hàng
                                            </p>
                                            <div class="w-100">
                                                <!-- mon1 -->
                                                <div class="row">
                                                    <div class="col-1">
                                                        <p class="fw-bold text-dark">${item.MaDonHang}</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="" style="width: 40px; height: 40px">
                                                            <img src="${item.AnhMonAn}" alt="" class="w-100 h-100" />
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <p class="fw-bold text-dark">x${item.SoLuongMonAn}</p>
                                                    </div>
                                                    <div class="col-5">
                                                        <p class="">${item.ThongTinMonAn}</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p class="fw-bold text-dark">${item.GiaMonAn}000đ</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 border-end">
                                    <div class="w-100 p-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <p class="fw-bold pHeaderCollapse">
                                                    Phương thức thanh toán
                                                </p>
                                                <div class="">
                                                    <p class="text-dark fw-bold">${item.PhuongThucThanhToan}</p>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <p class="fw-bold pHeaderCollapse">Giá tiền</p>
                                                <p class="text-dark fw-bold">${item.TongGia}000đ đ</p>
                                            </div>
                                        </div>
                                        <!-- Customer Infor -->
                                        <div class="mt-2 d-flex justify-content-between">
                                            <div class="">
                                                <p class="fw-bold pHeaderCollapse">Mã khách hàng</p>
                                                <div class="">
                                                    <p class="text-dark fw-bold">${item.MaKhachHang}</p>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <p class="fw-bold pHeaderCollapse">Tên khách hàng</p>
                                                <p class="text-dark fw-bold">${item.TenKhachHang}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="w-100 p-2 d-flex justify-content-between">
                                        <div class="">
                                            <p class="fw-bold pHeaderCollapse">Giảm giá</p>
                                            <p class="text-dark fw-bold">0%</p>
                                        </div>
                                        <div class="text-end">
                                            <p class="fw-bold pHeaderCollapse">Tổng</p>
                                            <p class="text-dark fw-bold">${item.TongGia}000 đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>`;
      });
    });
}
fetch_bill();
