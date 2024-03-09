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
                            <source src="video/2.mp4"  type="video/mp4">
                          </video>
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/5-tren-giay.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">5 Centimet Trên Giây</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="5 Centimet Trên Giây">
                            <input type="hidden" name="gia" value="54000 VNĐ">
                            <input type="hidden" name="hinh" value="5-tren-giay.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/hoang-tu-be.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Hoàng Tử Bé</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Hoàng Tử Bé">
                            <input type="hidden" name="gia" value="56000">
                            <input type="hidden" name="hinh" value="hoang-tu-be.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/khong-gia-dinh.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Không Gia Đình</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Không Gia Đình">
                            <input type="hidden" name="gia" value="58000 ">
                            <input type="hidden" name="hinh" value="khong-gia-dinh.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/toi-thay-hoa-vang.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Tôi thấy hoa vàng trên cỏ xanh</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Tôi thấy hoa vàng trên cỏ xanh">
                            <input type="hidden" name="gia" value="54000 ">
                            <input type="hidden" name="hinh" value="toi-thay-hoa-vang.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/con-chut-gi-de-nho.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Còn chút gì để nhớ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Còn chút gì để nhớ">
                            <input type="hidden" name="gia" value="56000 ">
                            <input type="hidden" name="hinh" value="con-chut-gi-de-nho.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/your-name.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Your Name</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Your Name">
                            <input type="hidden" name="gia" value="58000 ">
                            <input type="hidden" name="hinh" value="your-name.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/tieu-thuyet-nhat-ban-colorful.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Colorful</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Colorful">
                            <input type="hidden" name="gia" value="54000 ">
                            <input type="hidden" name="hinh" value="tieu-thuyet-nhat-ban-colorful.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/14-Nhung-nguoi-khon-kho-Les-Miserables-Victor-hugo.jpg" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">Những người khốn khổ</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Những người khốn khổ">
                            <input type="hidden" name="gia" value="59000 ">
                            <input type="hidden" name="hinh" value="14-Nhung-nguoi-khon-kho-Les-Miserables-Victor-hugo.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/doi-gio-hu-cung-2013.jpg" alt=""></div>
                        <p><span>57000</span>VNĐ</p>
                        <a href="#">Đồi Gió Hú</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Đồi Gió Hú">
                            <input type="hidden" name="gia" value="57000 ">
                            <input type="hidden" name="hinh" value="doi-gio-hu-cung-2013.jpg">
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