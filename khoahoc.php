<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Bookstore</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="images/logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"
    ></script>
   <!-- Thư viện jquery đã nén phục vụ cho bootstrap.min.js  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Thư viện popper đã nén phục vụ cho bootstrap.min.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
   <!-- Bản js đã nén của bootstrap 4, đặt dưới cùng trước thẻ đóng body-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   <script src="js/scriptdt.js"></script>
</head>
<body>

    <div class="boxcenter">
    <div class="row mb header">  
         <div class="row mb menu">
            <ul>
            <li><a href="index.php">Trang chủ</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
                <li><a href="lienhe.php">Liên Hệ</a></li>
                <li><a href="dangky.php">Đăng Ký</a></li>
            </ul>
        </div>
        </div>
        <div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <video loop autoplay muted id="bg-video" width="100%" height="100%">
                            <source src="video/4.mp4"  type="video/mp4">
                          </video>
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/sach-khoa-hoc-hay.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Tri Thức Về Vạn Vật</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Tri Thức Về Vạn Vật">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="sach-khoa-hoc-hay.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/lich_su_van_vat.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Lịch Sử Vạn Vật</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Lịch Sử Vạn Vật">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="lich_su_van_vat.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/lich-su-tu-nhien.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Lịch Sử Tự Nhiên</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Lịch Sử Tự Nhiên">
                            <input type="hidden" name="gia" value="58000">
                            <input type="hidden" name="hinh" value="lich-su-tu-nhien.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/gen-vi-ky.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Gen Vị Kỷ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Gen Vị Kỷ">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="gen-vi-ky.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/thong-diep-cua-nuoc.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Thông Điệp Của Nước</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Thông Điệp Của Nước">
                            <input type="hidden" name="gia" value="56000">
                            <input type="hidden" name="hinh" value="thong-diep-cua-nuoc.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/sao-chung-ta-lai-ngu.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Sao Chúng Ta Lại Ngủ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Sao Chúng Ta Lại Ngủ">
                            <input type="hidden" name="gia" value="58000">
                            <input type="hidden" name="hinh" value="sao-chung-ta-lai-ngu.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/6-phat-minh-lam-nen-thoi-dai.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">6 Phát Minh Làm Nên Thời Đại</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="6 Phát Minh Làm Nên Thời Đại">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="6-phat-minh-lam-nen-thoi-dai.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/tu-duy-nhanh-va-cham.jpg" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">Tư Duy Nhanh Và Chậm</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Tư Duy Nhanh Và Chậm">
                            <input type="hidden" name="gia" value="59000">
                            <input type="hidden" name="hinh" value="tu-duy-nhanh-va-cham.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/nguon-goc-cac-loai.jpg" alt=""></div>
                        <p><span>57000</span>VNĐ</p>
                        <a href="#">Nguồn Gốc Các Loài</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Nguồn Gốc Các Loài">
                            <input type="hidden" name="gia" value="57000">
                            <input type="hidden" name="hinh" value="nguon-goc-cac-loai.jpg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="cuocsong.php">Cuộc Sống</a>
                            </li>
                            <li>
                                <a href="tieuthuyet.php">Tiểu Thuyết</a>
                            </li>
                            <li>
                                <a href="truyentranh.php">Truyện Tranh</a>
                            </li>
                            <li>
                                <a href="khoahoc.php">Khoa Học</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
        </div>
            </div>
        <div class="row mb footer">
            <p>© 2022 Bản quyền thuộc về happybookstore.VN:
                <a href="https://vi-vn.facebook.com/">Facebook</a>
                <a href="https://www.instagram.com//">Instagram</a>
                <a href="https://twitter.com/i/flow/login">Twitter</a>
                <a href="https://www.pinterest.com/">Printerest</a>
            </p>
        </div>
    </div>

</body>

</html>