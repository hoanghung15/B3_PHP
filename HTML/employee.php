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
    <link rel="stylesheet" href="../CSS/employee.css" />
    <!-- linkIcon bootstrap -->
    <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-app-compat.js"></script>
    <!-- Firebase Storage -->
    <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-storage-compat.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body style="font-family: Roboto">
    <!-- header -->
    <div class="fixed-top bg-white shadow row">
        <div class="col-9 border-end">
            <div class="w-100 d-flex align-items-center justify-content-between px-4 py-3">
                <img src="../asset/lgo.png" alt="" class="" />
                <div class="">
                    <a href="home.php" class="a-item text-secondary me-5"><i class="bi bi-house pe-2"></i>Trang chủ</a>
                    <a href="menu.php" class="a-item text-secondary me-5"><i class="pe-2 bi bi-menu-up"></i>Thực đơn</a>
                    <a href="order.php" class="a-item text-secondary me-5"><i class="bi bi-truck pe-2"></i>Đơn hàng</a>
                    <a href="employee.php" class="a-item text-info me-5"><i class="bi bi-person pe-2"></i>Nhân viên</a>
                    <a href="bill.php" class="a-item text-secondary me-5"><i class="bi bi-receipt-cutoff pe-2"></i>Hóa
                        đơn
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
        <p class="fw-bold fs-5">Quản lý Nhân viên</p>
        <!-- Sort and Find -->
        <div class="row px-3">
            <div class="col-5">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <p class="mb-0 text-primary fw-bold">Hiển thị nhân viên</p>
                    <div class="btn-group">
                        <button type="button" class="btn me-1 btnSort btn-light">
                            <i class="bi bi-funnel"></i>
                        </button>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split btnSort"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gần nhất</a></li>
                            <li><a class="dropdown-item" href="#">Muộn nhất</a></li>
                        </ul>
                    </div>
                    <div class="">
                        <input type="text" id="searchOrder" placeholder="Tìm kiếm nhân viên"
                            class="border px-2 rounded" />
                        <button type="button" class="btn btn-outline-secondary rounded-end">
                            Tìm
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-7">
                <div class="w-100 d-flex justify-content-end">
                    <button type="button" class="me-3 btn btn-info text-white">
                        <i class="bi pe-2 bi-printer"></i>In
                    </button>
                    <button type="button" class="me-3 btn btn-info text-white">
                        <i class="bi pe-2 bi-cloud-arrow-down"></i> Xuất CSV
                    </button>
                    <button data-bs-target="#addModal" data-bs-toggle="modal" class="btn btn-primary me-3"
                        type="button">
                        <i class="bi bi-person-plus pe-2"></i>Thêm nhân viên
                    </button>
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash3-fill pe-2"></i>Xóa
                    </button>
                </div>
            </div>
        </div>
        <!-- Start Card -->
        <div class="w-100 mt-3">
            <div class="d-flex flex-wrap mt-3 card-container">
                <!-- firstCard -->

            </div>
        </div>
        <!-- Next Page -->
        <div class="w-100 mt-4 px-3 justify-content-between align-items-center d-flex">
            <p class="mb-0">

            </p>
            <div class="">
                <button class="btn btn-info text-white me-2" type="button">1</button>
                <button class="btn btn-info text-white me-2" type="button">2</button>
                <button class="btn btn-info text-white me-2" type="button">3</button>
                <button class="btn btn-primary text-white" type="button">Tiếp</button>
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
                    <button id="deleteButton" type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Sửa thông tin nhân viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <!-- Tên nhân viên -->
                        <div class="mt-2">
                            <p class="mb-0">Tên nhân viên</p>
                            <input id="editName" type="text" class="w-100 border rounded-2 px-4"
                                placeholder="Nhập tên nhân viên" style="height: 40px" />
                        </div>
                        <!-- Ngày vào -->
                        <div class="mt-4">
                            <p class="mb-0">Ngày vào</p>
                            <input id="editDate" class="w-100 border rounded-2 px-4" type="date" style="height: 40px" />
                        </div>
                        <!-- Email -->
                        <div class="mt-4">
                            <p class="mb-0">Email</p>
                            <input id="editEmail" type="email" class="w-100 border rounded-2 px-4"
                                placeholder="Nhập email" style="height: 40px" />
                        </div>
                        <!-- Số điện thoại -->
                        <div class="mt-4">
                            <p class="mb-0">Số điện thoại</p>
                            <input id="editPhone" type="text" class="w-100 border rounded-2 px-4"
                                placeholder="Nhập số điện thoại" style="height: 40px" />
                        </div>
                        <!-- Ảnh -->
                        <div class="mt-4">
                            <p class="mb-0">Ảnh</p>
                            <input id="editImage" type="file" class=" imageInput  w-100 border rounded-2 py-1 px-4"
                                style="height: 40px" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" id="applyButton" class="btn btn-primary">Áp dụng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Thêm nhân viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <div class="">
                            <p class="mb-0">Tên nhân viên</p>
                            <input id="addName" type="text" class="w-100 border rounded-2 px-4" style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Ngày vào</p>
                            <input id="addDate" class="w-100 border rounded-2 px-4" type="date" style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Email</p>
                            <input id="addEmail" type="text" class="w-100 border rounded-2 px-4" style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Số điện thoại</p>
                            <input id="addPhone" type="text" class="w-100 border rounded-2 px-4" style="height: 40px" />
                        </div>
                        <div class="mt-4">
                            <p class="mb-0">Ảnh</p>
                            <input id="addImage" type="file" class="imageInput  w-100 border rounded-2 py-1 px-4"
                                style="height: 40px" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button id="btnAdd" type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/employee/fetch_employee.js"></script>
    <script src="../JS/employee/setValue_employee.js"></script>
    <script src="../JS/employee/uploadImg.js"></script>
    <script src="../JS/employee/addImage.js"></script>
    <script src="../JS/firebaseconfig.js"></script>
    <script src="../JS/employee/edit_employee.js"></script>
    <script src="../JS/employee/deleta_employee.js"></script>
    <script src="../JS/employee/add_employee.js"></script>


</html>