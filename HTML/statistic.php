<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/landing.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Chewy&family=Fredoka:wght@300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif+Oriya&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sixtyfour+Convergence&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <!-- linkCSS -->
    <link rel="stylesheet" href="../CSS/mainn.css" />
    <link rel="stylesheet" href="../CSS/statisticc.css" />
    <!-- linkIcon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- chartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="font-family: Roboto">
    <!-- header -->
    <div class="bg-white fixed-top shadow row">
        <div class="col-9 border-end">
            <div class="w-100 d-flex align-items-center justify-content-between px-4 py-3">
                <img src="../asset/lgo.png" alt="" class="" />
                <div class="">
                    <a href="home.php" class="a-item text-secondary me-5"><i class="bi bi-house pe-2"></i>Trang chủ</a>
                    <a href="menu.php" class="a-item text-secondary me-5"><i class="pe-2 bi bi-menu-up"></i>Thực đơn</a>
                    <a href="order.php" class="a-item text-secondary me-5"><i class="bi bi-truck pe-2"></i>Đơn hàng</a>
                    <a href="employee.php" class="a-item text-secondary me-5"><i class="bi bi-person pe-2"></i>Nhân
                        viên</a>
                    <a href="bill.php" class="a-item text-secondary me-5"><i class="bi bi-receipt-cutoff pe-2"></i>Hóa
                        đơn
                    </a>
                    <a href="statistic.php" class="a-item text-info me-5"><i class="bi bi-bar-chart pe-2"></i>Thống
                        kê</a>
                </div>
                <div class="text-info">
                    <i class="bi bi-search pe-3"></i>
                    <i class="bi bi-bell"></i>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="w-100 d-flex adminDiv align-items-center justify-content-end px-4 py-3">
                <div class="pe-4 text-end">
                    <p class="mb-0">
                        <span class="fw-bold"> Hoang Hung</span>
                        <br />
                        <span class="text-secondary">Administrator</span>
                    </p>
                </div>
                <div class="">
                    <img src="../asset/mingcute_user-4-fill.svg" alt="" class="" />
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="w-100 p-4 mainContainer">
        <p class="fw-bold fs-5">Thống kê Doanh thu</p>
        <!-- money -->

        <!-- chart -->
        <div class="w-100 mt-4">
            <div class="row gap-">
                <div class="col-8">
                    <div class="bg-white p-4 rounded shadow">
                        <p class="fw-bold fs-6">Thống kê Tổng doanh thu theo tháng</p>
                        <canvas id="totalRevenueYear"></canvas>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-white rounded shadow p-4">
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <p class="fw-bold fs-6">Thống kê theo hình thức</p>
                            <div class="form-floating">

                            </div>
                        </div>
                        <div class="mt-3">
                            <canvas class="w-100 h-100" id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Selling -->
        <p class="fw-bold fs-5 mt-5">Top sản phẩm bán chạy</p>
        <div class="w-100 bg-white p-2 shadow rounded-2">
            <table class="table table-hover px-2" class="p-2" style="font-size: 14px">
                <thead>
                    <tr class="">
                        <th>MÃ</th>
                        <th>SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>SL BÁN</th>
                        <th>TỔNG THU</th>
                        <th>XỬ LÝ</th>
                    </tr>
                </thead>
                <tbody id="tbnBodys">

                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <!-- Employee -->
        <p class="fw-bold fs-5 mt-5">Nhân viên xuất sắc</p>
        <div class="w-100 bg-white shadow rounded-2">
            <!-- sort_filter -->
            <div class="w-100 d-flex justify-content-end">
                <div class="p-2">
                    <div class="form-floating">

                    </div>
                </div>
            </div>
            <!-- Chart -->
            <div class="w-100 d-flex bg-white align-items-center justify-content-between p-5">
                <div class="col-9" style="height: 400px">
                    <p class="fw-bold">Top 10 người bán nhiều hàng nhất</p>
                    <canvas id="exEmployee"></canvas>
                </div>
                <div class="col-3">
                    <p class="fw-bold">Danh sách nhân viên xuất sắc</p>
                    <div id="listBestEmp" class=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Cảnh báo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="">
                        Bạn thực sự muốn xóa trường thông tin này? Hành động này không thể
                        hoàn tác !
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Sửa thông tin món</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <div class="">
                            <p class="mb-0">Tên món</p>
                            <input type="text" class="w-100 border rounded-2 px-4" value="Burger Xúc xích-Trứng"
                                style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Giá</p>
                            <input class="w-100 border rounded-2 px-4" type="number" value="25.000"
                                style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Mô tả</p>
                            <input type="text" class="w-100 border rounded-2 px-4" value="Ngon" style="height: 40px" />
                        </div>

                        <div class="mt-4">
                            <p class="mb-0">Ảnh</p>
                            <input type="file" class="w-100 border rounded-2 py-1 px-4" style="height: 40px" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-primary">Áp dụng</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/statistic/st_employee.js"></script>
    <script src="../JS/statistic/st_totalRevenue.js"></script>
    <!-- <script src="../JS/doughnutChart.js"></script> -->
    <!-- <script src="../JS/horizontalBarChart.js"></script> -->
    <script src="../JS/statistic/chart_employee.js"></script>
    <script src="../JS/statistic/st_revenueType.js"></script>

    <script src="../JS/statistic/st_food.js"></script>
</body>

</html>