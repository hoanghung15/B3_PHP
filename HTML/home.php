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
    <link rel="stylesheet" href="../CSS/home.css" />
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
                    <a href="home.php" class="a-item text-info me-5"><i class="bi bi-house pe-2"></i>Trang chủ</a>
                    <a href="menu.php" class="a-item text-secondary me-5"><i class="pe-2 bi bi-menu-up"></i>Thực đơn</a>
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
    <div class="row mainContainer">
        <div class="col-8">
            <div class="w-100 px-4">
                <!-- NeedACt -->
                <div class="bg-white shadow rounded-3 p-4">
                    <p class="fw-bold fs-5">Việc cần làm</p>
                    <p class="fw-bold">Thương mại điện tử</p>
                    <div class="bg-light d-flex aleign-items-cnter justify-content-between rounded-2 px-4 py-2">
                        <div class="d-flex align-items-center">
                            <div class="me-2" style="width: 40px; height: 40px">
                                <img src="../asset/logoShoppe.svg" alt="" class="w-100 h-100 rounded" />
                            </div>
                            <p class="fw-bold mb-0">Shopee</p>
                        </div>
                        <div class="">
                            <p class="mb-0 text-secondary" style="font-size: 12px">
                                Hàng chưa liên kết
                            </p>
                            <p class="mb-0 fw-bold text-primary fs-5">215</p>
                        </div>
                        <div class="">
                            <p class="mb-0 text-secondary" style="font-size: 12px">
                                Đơn chờ xử lý
                            </p>
                            <p class="mb-0 fw-bold text-primary fs-5">15</p>
                        </div>
                        <div class="">
                            <p class="mb-0 text-secondary" style="font-size: 12px">
                                Yêu cầu hủy
                            </p>
                            <p class="mb-0 fw-bold text-primary fs-5">1</p>
                        </div>
                        <div class="">
                            <p class="mb-0 text-secondary" style="font-size: 12px">
                                Yêu cầu hoàn tiền
                            </p>
                            <p class="mb-0 fw-bold text-primary fs-5">1</p>
                        </div>
                    </div>
                </div>
                <!--link Social Media  -->
                <div class="bg-white shadow rounded-3 mt-4 p-4">
                    <p class="fw-bold mb-0">Kết nối mạng xã hội</p>
                    <p class="text-secondary">
                        Tối ưu thời gian phản hồi và chăm sóc khách hàng, lên đơn cực
                        nhanh, giúp tăng tỷ lệ chuyển đổi khách hàng tiềm năng.
                    </p>
                    <button type="button" class="btn me-4 fw-bold text-dark btn-outline-secondary">
                        <i class="bi bi-facebook text-primary pe-2"></i> Facebook
                    </button>
                    <button type="button" class="btn fw-bold text-dark btn-outline-secondary">
                        <i class="bi bi-bag-fill text-danger pe-2"></i>Shopee
                    </button>
                </div>
                <!-- HQKD -->
                <div class="bg-white shadow rounded-3 mt-4 p-4">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <p class="fw-bold mb-0 fs-5">Hiệu quả kinh doanh</p>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Tháng 11</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="floatingSelect">Tháng</label>
                        </div>
                    </div>
                    <!-- Chart -->
                    <div class="w-100 d-flex justify-content-center" style="height: 500px">
                        <canvas id="effectShopee"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- noti -->
        <div class="col-4">
            <div class="w-100 px-4">
                <div class="w-100 bg-white rounded-3 shadow p-3">
                    <p class="fw-bold fs-5">Thông báo</p>
                    <!-- Noti1 -->
                    <div class="border-bottom">
                        <div class="w-100 d-flex justify-content-between">
                            <img src="https://0988809896.kiotviet.com/posonlinev2/assets/images/icon/noti-icon.svg"
                                alt="" class="" style="scale: 120%" />

                            <div class="" style="width: 90%">
                                <p class="fw-bold mb-0">
                                    Ngừng hỗ trợ phiên bản cũ tính năng Bán Online trên sàn TMĐT
                                </p>
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-between">
                            <div class=""></div>
                            <div class="mt-2" style="width: 90%; font-size: 14px">
                                <p class="mb-0">
                                    Ngừng hỗ trợ phiên bản cũ từ ngày 04/11/2024
                                </p>
                                <p class="" style="font-size: 12px">28/10/2024 16:35</p>
                            </div>
                        </div>
                    </div>
                    <!-- list noti shopee -->
                    <div class="overflow-auto w-100" style="max-height: 400px">
                        <!-- shopee -->
                        <div class="d-flex justify-content-between mt-4">
                            <div class="" style="width: 50px; height: 50px">
                                <img src="../asset/logoShoppe.svg" alt="" class="w-100 h-100" />
                            </div>
                            <div class="" style="width: 80%">
                                <p class="mb-0">
                                    Bạn có 1 đơn hàng mới từ
                                    <span class="fw-bold"> Shopee</span> Vui lòng chuẩn bị hàng
                                    cho đơn <span class="fw-bold">2411134UVX8809</span> trước
                                    <span class="fw-bold">13/11/2024</span>
                                    để tránh bị hủy đơn.
                                </p>
                                <p class="text-secondary" style="font-size: 13px">
                                    5 phút trước
                                </p>
                            </div>
                        </div>
                        <!-- Other -->
                        <div class="d-flex justify-content-between mt-4">
                            <div class="" style="width: 50px; height: 50px">
                                <img src="../asset/logoShoppe.svg" alt="" class="w-100 h-100" />
                            </div>
                            <div class="" style="width: 80%">
                                <p class="mb-0">
                                    Bạn có 1 đơn hàng mới từ
                                    <span class="fw-bold"> Shopee</span> Vui lòng chuẩn bị hàng
                                    cho đơn <span class="fw-bold">2411134UVX8809</span> trước
                                    <span class="fw-bold">13/11/2024</span>
                                    để tránh bị hủy đơn.
                                </p>
                                <p class="text-secondary" style="font-size: 13px">
                                    5 phút trước
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div class="" style="width: 50px; height: 50px">
                                <img src="../asset/logoShoppe.svg" alt="" class="w-100 h-100" />
                            </div>
                            <div class="" style="width: 80%">
                                <p class="mb-0">
                                    Bạn có 1 đơn hàng mới từ
                                    <span class="fw-bold"> Shopee</span> Vui lòng chuẩn bị hàng
                                    cho đơn <span class="fw-bold">2411134UVX8809</span> trước
                                    <span class="fw-bold">13/11/2024</span>
                                    để tránh bị hủy đơn.
                                </p>
                                <p class="text-secondary" style="font-size: 13px">
                                    5 phút trước
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div class="" style="width: 50px; height: 50px">
                                <img src="../asset/logoShoppe.svg" alt="" class="w-100 h-100" />
                            </div>
                            <div class="" style="width: 80%">
                                <p class="mb-0">
                                    Bạn có 1 đơn hàng mới từ
                                    <span class="fw-bold"> Shopee</span> Vui lòng chuẩn bị hàng
                                    cho đơn <span class="fw-bold">2411134UVX8809</span> trước
                                    <span class="fw-bold">13/11/2024</span>
                                    để tránh bị hủy đơn.
                                </p>
                                <p class="text-secondary" style="font-size: 13px">
                                    5 phút trước
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/effectShopee.js"></script>
</body>

</html>