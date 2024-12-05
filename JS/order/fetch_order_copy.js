// function fetch_order() {
//   fetch(`../php/fetch_order.php`)
//     .then((respone) => respone.json())
//     .then((donHangArray) => {
//       const container = document.getElementById("containerCard");
//       container.innerHTML = "";
//       donHangArray.forEach((order) => {
//         container.innerHTML += `
//                   <div class="cardView col-3 px-3 mt-3">
//                       <div class="w-100 px-3 bg-white cardView rounded shadow-sm">
//                           <!-- ID + date -->
//                           <div class="w-100 pt-3 pb-1 border-bottom text-center">
//                               <p class="fw-bold">${order.MaDonHang}</p>
//                               <p class="text-secondary" style="font-size: 12px">
//                                   ${order.LoaiHinh}: ${order.NgayTao}
//                               </p>
//                           </div>
//                           <!--Food  -->
//                           <div class="pt-2 border-bottom" style="font-size: 14px; height: 180px; overflow-y: auto">
//                               <div text class="w-100 text-secondary d-flex justify-content-between">
//                                   <p>Món</p>
//                                   <p class=""></p>
//                                   <p>SL</p>
//                                   <p>Giá</p>
//                               </div>
//                               <div class="w-100 d-flex justify-content-between" style="font-size: 14px">
//                                   <p class="">${order.TenMon}</p>
//                                   <p class="">${order.SoLuong}</p>
//                                   <p class="">${order.Gia}</p>
//                               </div>
//                           </div>
//                           <!-- Note -->
//                           <div class="w-100 pt-2 border-bottom">
//                               <p class="text-secondary" style="font-size: 14px">Ghi chú</p>
//                               <p class="">${order.GhiChu}</p>
//                           </div>
//                           <!-- total -->
//                           <div class="w-100 mt-2 d-flex justify-content-between">
//                               <p class="fw-bold">Tổng</p>
//                               <p class="fw-bold">${order.TongGia}</p>
//                           </div>
//                           <!-- Status -->
//                           <div class="w-100 pb-4">
//                               <button class="btn btn-success w-100 fw-bold" type="button">
//                                   Hoàn thành
//                               </button>
//                           </div>
//                       </div>
//                   </div>
//           `;
//       });
//     })
//     .catch((err) => console.error("Error:", err));
// }
// fetch_order();
function fetch_order(search = "") {
  fetch(`../php/fetch_order.php?search=${search}`)
    .then((respone) => respone.json())
    .then((donHangArray) => {
      const container = document.getElementById("containerCard");
      container.innerHTML = "";
      donHangArray.forEach((order) => {
        container.innerHTML += `
                    <div class="cardView col-3 px-3 mt-3">
                        <div class="w-100 px-3 bg-white cardView rounded shadow-sm">
                            <!-- ID + date -->
                            <div class="w-100 pt-3 pb-1 border-bottom text-center">
                                <p class="fw-bold">${order.MaDonHang}</p>
                                <p class="text-secondary" style="font-size: 12px">
                                    ${order.LoaiHinh}: ${order.NgayTao}
                                </p>
                            </div>
                            <!--Food  -->
                            <div class="pt-2 border-bottom" style="font-size: 14px; height: 180px; overflow-y: auto">
                                <div text class="w-100 text-secondary d-flex justify-content-between">
                                    <p>Món</p>
                                    <p class=""></p>
                                    <p>SL</p>
                                    <p>Giá</p>
                                </div>
                                <div class="w-100 d-flex justify-content-between" style="font-size: 14px">
                                    <p class="">${order.TenMon}</p>
                                    <p class="">${order.SoLuong}</p>
                                    <p class="">${order.Gia}</p>
                                </div>
                            </div>
                            <!-- Note -->
                            <div class="w-100 pt-2 border-bottom">
                                <p class="text-secondary" style="font-size: 14px">Ghi chú</p>
                                <p class="">${order.GhiChu}</p>
                            </div>
                            <!-- total -->
                            <div class="w-100 mt-2 d-flex justify-content-between">
                                <p class="fw-bold">Tổng</p>
                                <p class="fw-bold">${order.TongGia}</p>
                            </div>
                            <!-- Status -->
                            <div class="w-100 pb-4">
                                <button class="btn btn-success w-100 fw-bold" type="button">
                                    Hoàn thành
                                </button>
                            </div>
                        </div>
                    </div>        
            `;
      });
    })
    .catch((err) => console.error("Error:", err));
}
fetch_order();
document.querySelector("#searchOrder").addEventListener("input", function () {
  const searchValue = this.value.trim();
  fetch_order(searchValue);
});
