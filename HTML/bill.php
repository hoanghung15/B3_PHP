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
    <link rel="stylesheet" href="../CSS/bill.css" />
    <link rel="stylesheet" href="../CSS/mainn.css" />
    <!-- linkIcon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
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
                    <a href="bill.php" class="a-item text-info me-5"><i class="bi bi-receipt-cutoff pe-2"></i>Hóa đơn
                    </a>
                    <a href="statistic.php" class="a-item text-secondary me-5"><i class="bi bi-bar-chart pe-2"></i>Thống
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
        <p class="fw-bold fs-5">Xem danh sách Hóa đơn thanh toán</p>
        <!-- Sort and Find -->
        <div class="row">
            <div class="col-7">
                <div class="w-100 d-flex justify-content-between">
                    <div class="btn-group">
                        <button type="button" class="btn me-1 btnSort btn-light" style="background-color: white">
                            Sắp xếp theo ngày
                        </button>
                        <button type="button " class="btn dropdown-toggle dropdown-toggle-split btnSort"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gần nhất</a></li>
                            <li><a class="dropdown-item" href="#">Muộn nhất</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-5">
                <div class="w-100 d-flex justify-content-end">
                    <button type="button" class="me-3 btn btn-info text-white">
                        <i class="bi pe-2 bi-printer"></i>In
                    </button>
                    <button type="button" class="me-3 btn btn-info text-white">
                        <i class="bi pe-2 bi-cloud-arrow-down"></i> Xuất CSV
                    </button>
                    <input type="text" id="searchOrder" placeholder="Tìm kiếm đơn hàng" class="border px-2 rounded" />
                    <button type="button" class="btn btn-outline-secondary rounded-end">
                        Tìm
                    </button>
                </div>
            </div>
        </div>
        <!-- table -->
        <div class="w-100 mt-4">
            <!-- table content -->
            <table id="tbnBill" class="table table-hover shadow">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" style="width: 15px; height: 15px" />
                        </th>
                        <th class="ptblHead">Mã đơn</th>
                        <th class="ptblHead">Ngày</th>
                        <th class="ptblHead">Thời gian</th>
                        <th class="ptblHead">Địa chỉ</th>
                        <th class="ptblHead">Tiền hàng</th>
                        <th class="ptblHead">Loại</th>
                        <th class="ptblHead">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- first row -->

                    <!-- sample row -->
                </tbody>
            </table>
        </div>
        <!-- Page -->
        <div class="w-100 justify-content-between align-items-center d-flex">
            <p class="mb-0">

            </p>
            <button class="btn btn-info text-white" type="button">Tiếp</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Cảnh báo</h1>
                        <button data-bs-dismiss="modal" type="button" class="btn-close" aria-label="Đóng"></button>
                    </div>
                    <div class="modal-body">
                        <p class="">
                            Bạn thật sự muốn xóa trường thông tin này? Hành động này không
                            thể hoàn tác !
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/bill/fetch_bill.js"></script>
</body>

</html>