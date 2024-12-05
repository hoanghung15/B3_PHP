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
    <link rel="stylesheet" href="../CSS/menuu.css" />
    <!-- linkIcon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body style="font-family: Roboto">
    <!-- header -->
    <div class="bg-white shadow row fixed-top">
        <div class="col-9 border-end">
            <div class="w-100 d-flex align-items-center justify-content-between px-4 py-3">
                <img src="../asset/lgo.png" alt="" class="" />
                <div class="">
                    <a href="home.php" class="a-item text-secondary me-5"><i class="bi bi-house pe-2"></i>Trang chủ</a>
                    <a href="menu.php" class="a-item text-info me-5"><i class="pe-2 bi bi-menu-up"></i>Thực đơn</a>
                    <a href="order.php" class="a-item text-secondary me-5"><i class="bi bi-truck pe-2"></i>Đơn hàng</a>
                    <a href="employee.php" class="a-item text-secondary me-5"><i class="bi bi-person pe-2"></i>Nhân
                        viên</a>
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
        <p class="fw-bold fs-5">Quản lý Hàng hóa</p>
        <!-- Sort and Find -->
        <div class="row">
            <div class="col-7">
                <div class="w-100 d-flex">
                    <div class="btn-group">
                        <button type="button" class="btn me-1 btnSort btn-light">
                            Giá
                        </button>
                        <button type="button " class="btn dropdown-toggle dropdown-toggle-split btnSort"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tăng dần</a></li>
                            <li><a class="dropdown-item" href="#">Giảm dần</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="w-100 d-flex justify-content-end">
                    <button type="button" data-bs-target="#addModal" data-bs-toggle="modal"
                        class="me-3 btn btn-info text-white">
                        <i class="bi bi-file-plus-fill pe-2"></i>Thêm món
                    </button>
                    <button type="button" class="me-3 btn btn-info text-white">
                        <i class="bi pe-2 bi-cloud-arrow-down"></i> Xuất CSV
                    </button>
                    <input type="text" id="searchOrder" placeholder="Tìm kiếm theo tên, mã"
                        class="border px-2 rounded" />
                    <button type="button" class="btn btn-outline-secondary rounded-end">
                        Tìm
                    </button>
                </div>
            </div>
        </div>
        <!-- table -->
        <div class="w-100 mt-4">
            <!-- table content -->
            <table class="table table-hover shadow table-container">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" style="width: 15px; height: 15px" />
                        </th>
                        <th class="ptblHead">Mã món</th>
                        <th class="ptblHead">Tên món</th>
                        <th class="ptblHead">Mô tả</th>
                        <th class="ptblHead">Giá bán</th>
                        <th class="ptblHead">Khách đặt</th>

                        <th class="ptblHead">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- first row -->


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
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Cảnh báo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="">
                            Bạn thực sự muốn xóa trường thông tin này? Hành động này không
                            thể hoàn tác !
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button id="confirmDelete" type="button" class="btn btn-danger">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Thêm món</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="w-100">
                            <div class="">
                                <p class="mb-0">Tên món</p>
                                <input id="editName" type="text" class="w-100 border rounded-2 px-4"
                                    style="height: 40px" value="Burger Xúc xích - Trứng" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Giá</p>
                                <input id="editGia" class="w-100 border rounded-2 px-4" type="number"
                                    style="height: 40px" value="25000" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Mô tả</p>
                                <input id="editMota" type="text" class="w-100 border rounded-2 px-4"
                                    style="height: 40px"
                                    value=" Burger Xúc xích - Trứng là kết hợp giữa bánh mì mềm, xúc xích đậm đà" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Trạng thái</p>
                                <select id="selectionForm" class="form-select" aria-label="Default select example">

                                    <option value="Tạm dừng">Tạm dừng</option>
                                    <option value="Cho phép">Cho phép</option>

                                </select>
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Ảnh</p>
                                <input id="editImage" type="file" class=" imageInput  w-100 border rounded-2 py-1 px-4"
                                    style="height: 40px" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button id="applyButton" type="button" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Thêm món</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="w-100">
                            <div class="">
                                <p class="mb-0">Tên món</p>
                                <input id="addName" type="text" class="w-100 border rounded-2 px-4"
                                    style="height: 40px" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Giá</p>
                                <input id="addGia" class="w-100 border rounded-2 px-4" type="number"
                                    style="height: 40px" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Mô tả</p>
                                <input id="addMota" type="text" class="w-100 border rounded-2 px-4"
                                    style="height: 40px" />
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Trạng thái</p>
                                <select id="addTrangthai" class="form-select" aria-label="Default select example">
                                    <option selected>Cho phép</option>
                                    <option value="1">Tạm dừng</option>
                                </select>
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
    </div>
    <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-app-compat.js"></script>
    <!-- Firebase Storage -->
    <script src="https://www.gstatic.com/firebasejs/9.17.2/firebase-storage-compat.js"></script>
    <!-- <script src="../JS/menu/fetch_food.js"></script> -->
    <script src="../JS/menu/setValue_food.js"></script>
    <script src="../JS/firebaseconfig.js"></script>
    <script src="../JS/menu/uploadImg.js"></script>
    <script src="../JS/menu/addImage.js"></script>
    <script src="../JS/menu/add_food.js"></script>
    <script src="../JS/menu/edit_food.js"></script>
    <script src="../JS/menu/fetch_food_new.js"></script>
    <script src="../JS/menu/delete_food.js"></script>
</body>

</html>