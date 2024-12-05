<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/landing.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Chewy&family=Fredoka:wght@300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif+Oriya&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sixtyfour+Convergence&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <style>
    #myDiv {
        display: none;
    }
    </style>
    <!-- #myDiv {
      display: none; /* Ẩn div ban đầu */
    
    } -->
    <!-- link JS -->
</head>

<body style="font-family: Kanit">
    <div class="position-relative">
        <div class="row w-100 position-relative">
            <div class="col-7 bg-white px-4 pb-5">
                <div class="w-100 d-flex justify-content-between align-items-center p-4">
                    <div class="col-6">
                        <img src="../asset/lgo.png" alt="" class="" />
                    </div>
                    <div class="d-flex col-6 justify-content-between">
                        <a href="" class="li-item text-black">Trang chủ</a>
                        <a href="" class="li-item text-black">Thực đơn</a>
                        <a href="" class="li-item text-black">Liên hệ</a>
                        <a href="" class="li-item text-black">Giới thiệu</a>
                    </div>
                </div>
                <div class="w-100" style="padding-left: 100px; padding-top: 80px">
                    <h6 class="text-danger fw-bold">Mới</h6>
                    <h1 class="fw-bold">
                        BURGER <br />
                        2 TẦNGGGG !!!
                    </h1>
                    <div class="d-flex align-items-center mt-4">
                        <p class="text-danger mb-0 fw-bold pe-4">Độ cay:</p>
                        <img src="../asset/icon-park-solid_chili.svg" alt="" class="" />
                        <img src="../asset/icon-park-solid_chili.svg" alt="" class="" />
                        <img src="../asset/icon-park-solid_chili.svg" alt="" class="" />
                        <img src="../asset/icon-park-solid_chilil.svg" alt="" class="" />
                        <img src="../asset/icon-park-solid_chilil.svg" alt="" class="" />
                    </div>
                    <div class="mt-4 fw-thin text-secondary">
                        <p class="">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, <br />
                            mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy <br />
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.<br />Với hai lớp
                            bánh kẹp vàng óng, Double Burger<br />
                            Decker đem lại hương vị hài hòa giữa thịt bò nướng thơm lừng
                        </p>
                    </div>
                    <p class="text-secondary mt-4">Thành phần:</p>
                    <div class="d-flex">
                        <img src="../asset/icon-park-outline_chili.svg" alt="" class="pe-4" />
                        <img src="../asset/icon-park-outline_garlic.svg" alt="" class="pe-4" />
                        <img src="../asset/icon-park-outline_tomato.svg" alt="" class="pe-4" />
                        <img src="../asset/tabler_salad.svg" alt="" class="pe-4" />
                        <div class="th bg-success text-white fw-semibold">+3</div>
                    </div>
                    <div class="mt-4 d-flex align-items-center">
                        <button class="btn btn-dark">Đặt ngay</button>
                        <h4 class="ps-4 text-success fw-bold">50.000đ</h4>
                    </div>
                </div>
            </div>
            <div class="col-5 bg-warning px-4">
                <div class="w-100 d-flex justify-content-end align-items-center p-4">
                    <a href="" class="li-item text-white fw-bold pe-3">+0123654032</a>
                    <button id="toggleButton" type="button" class="btn btn-light fw-semibold">
                        Đăng nhập
                    </button>
                </div>
            </div>
            <img src="../asset/burg.svg" alt="" class="position-absolute img-abs" />
        </div>
        <div class="w-100 position-relative scdDiv row">
            <div class="col-6 py-5">
                <h2 class="fw-bold mt-4">
                    GIAO HÀNG<br />
                    SIÊU NHANHHHH !
                </h2>
                <p class="mt-4 text-secondary">
                    Món ăn của bạn sẽ được giao trong vòng 10 phút<br />Không cần phải
                    loooo !
                </p>
                <button class="mt-4 btn btn-success fw-semibold">Đặt nhanh</button>
            </div>
            <div class="col-6 text-end py-4">
                <h2 class="fw-bold mt-4">
                    ĐỪNG CHỜ ĐỢI<br />
                    HÃY TRỞ THÀNH <br />
                    CHÚNG TÔI !
                </h2>
                <p class="mt-4 text-secondary">
                    Với sứ mệnh giao những món ngon <br />đến với khách hàng yêu dấuuuu
                    !
                </p>
                <button class="mt-4 btn btn-success fw-semibold">Liên hệ ngay</button>
            </div>

            <img src="../asset/delivery.png" alt="" class="position-absolute abs end-0 me-4" />

            <img src="../asset/delivery.png" alt="" class="position-absolute abs" />
        </div>
        <div class="w-100 row">
            <div class="col-4" style="background-color: #00a850; padding-right: 0">
                <div class="w-100 text-white d-flex justify-content-between">
                    <div class="p-4 mt-2">
                        <p class="fw-bold" style="font-size: 26px">
                            SAND- <br />
                            WITCHS !
                        </p>
                        <p class="" style="font-size: 12px">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.
                        </p>
                        <button class="btn btn-dark mt-">Đặt ngay</button>
                    </div>
                    <img src="../asset/halfSandwitch.png" alt="" class="me-0" />
                </div>
            </div>
            <div class="col-4" style="background-color: #ff8e28; padding-right: 0">
                <div class="w-100 text-white d-flex justify-content-between">
                    <div class="p-4 mt-2">
                        <p class="fw-bold" style="font-size: 26px">
                            SIÊUUU <br />
                            BURGERS
                        </p>
                        <p class="" style="font-size: 12px">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.
                        </p>
                        <button class="btn btn-dark mt-">Đặt ngay</button>
                    </div>
                    <img src="../asset/haflBurger.png" alt="" class="me-0" />
                </div>
            </div>
            <div class="col-4" style="background-color: #a0cf67; padding-right: 0">
                <div class="w-100 text-white d-flex justify-content-between">
                    <div class="p-4 mt-2">
                        <p class="fw-bold" style="font-size: 26px">
                            SALAD <br />
                            SẠCHHHH !
                        </p>
                        <p class="" style="font-size: 12px">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.
                        </p>
                        <button class="btn btn-dark mt-">Đặt ngay</button>
                    </div>
                    <img src="../asset/halfSalad.png" alt="" class="me-0" />
                </div>
            </div>
        </div>
        <div class="w-100 row">
            <div class="col-6" style="background-color: #255dcc; padding-right: 0">
                <div class="w-100 text-white d-flex justify-content-between">
                    <div class="p-4 mt-2">
                        <p class="fw-bold" style="font-size: 26px">
                            ĐỒ ĂN <br />
                            CHO TRẺ EM !
                        </p>
                        <p class="" style="font-size: 12px">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.
                        </p>
                        <button class="btn btn-dark mt-">Đặt ngay</button>
                    </div>
                    <img src="../asset/halfHotdog.png" alt="" class="me-0" />
                </div>
            </div>
            <div class="col-5" style="background-color: #cd2769; padding-right: 0">
                <div class="w-100 text-white d-flex justify-content-between">
                    <div class="p-4 mt-2">
                        <p class="fw-bold" style="font-size: 26px">
                            KEM <br />
                            MÁT LẠNHHH !
                        </p>
                        <p class="" style="font-size: 12px">
                            Chiếc burger double decker hấp dẫn với hai lớp thịt bò nướng
                            chín vừa, mọng nước và thơm lừng, xen kẽ cùng phô mai tan chảy
                            mịn màng tạo nên hương vị đậm đà, khó cưỡng.
                        </p>
                        <button class="btn btn-dark mt-">Đặt ngay</button>
                    </div>
                    <img src="../asset/halfIce.png" alt="" class="me-0" />
                </div>
            </div>
            <div class="col-1 bg-white d-flex align-items-center justify-content-center">
                <p class="fw-bold">
                    VÀ...<br />NHIỀU<br />
                    HƠN<br />
                    NỮA
                </p>
            </div>
        </div>
        <div id="myDiv" class="position-absolute loginForm row visully-hidden">
            <div class="w-100 p-5 position-relative">
                <h2 class="text-success fw-bold">WAHLBURGER</h2>
                <h5 class="" style="color: #a0cf67; font-size: 12px">
                    ĐÓ LÀ NHỮNG NGƯỜI<br />
                    BAO QUANH CHÚNG TA VỚI LÒNG BIẾT ƠN<br />
                    VÀ NHỮNG GIÁ TRỊ ĐÍCH THỰC.
                </h5>
                <h5 class="text-warning" style="font-size: 12px">
                    THẬT THỎA MÃN TÂM HỒN
                </h5>
                <form action="../php/login.php" class="mt-5" method="POST">
                    <div class="">
                        <label class="d-block text-white">Email</label>

                        <input class="p-1" style="width: 300px" name="email" type="email" />
                    </div>
                    <div class="mt-3">
                        <label class="d-block text-white">Mật khẩu</label>
                        <input class="p-1" style="width: 300px" name="password" type="password" />
                    </div>
                    <div class="mt-4">
                        <button style="width: 300px" class="btn btn-success">
                            Đăng nhập
                        </button>
                    </div>
                </form>

                <a href="" id="closeLink" class="li-item position-absolute top-0 end-0 me-2 text-white mt-2">Đóng</a>
            </div>
        </div>
    </div>
    <script src="../JS/openLogin.js"></script>
</body>

</html>