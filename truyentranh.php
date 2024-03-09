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
                                <source src="video/3.mp4"  type="video/mp4">
                              </video> 
                        </div>
                    </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/tam_cam.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Tấm Cám</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Tấm Cám">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="tam_cam.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/Harry_Potter.jpg" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">Harry Potter</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Harry Potter">
                            <input type="hidden" name="gia" value="59000 ">
                            <input type="hidden" name="hinh" value="Harry_Potter.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/doraemon.jpg" alt=""></div>
                        <p><span>57000</span>VNĐ</p>
                        <a href="#">Doraemon</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Doraemon">
                            <input type="hidden" name="gia" value="57000 ">
                            <input type="hidden" name="hinh" value="doraemon.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/conan.jfif" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Thám Tử Lừng Danh Conan</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Thám Tử Lừng Danh Conan">
                            <input type="hidden" name="gia" value="54000 ">
                            <input type="hidden" name="hinh" value="conan.jfif">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/Rave_Master.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Rave Master</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Rave Master">
                            <input type="hidden" name="gia" value="56000 ">
                            <input type="hidden" name="hinh" value="Rave_Master.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/top-manga-hay-nhat-moi-thoi-dai-khong-the-bo-qua-15.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Hunter x Hunter</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Hunter x Hunter">
                            <input type="hidden" name="gia" value="58000 ">
                            <input type="hidden" name="hinh" value="top-manga-hay-nhat-moi-thoi-dai-khong-the-bo-qua-15.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/naruto.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Naruto</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Naruto">
                            <input type="hidden" name="gia" value="54000 ">
                            <input type="hidden" name="hinh" value="naruto.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/onepice.jpg" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">One Piece</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="One Piece">
                            <input type="hidden" name="gia" value="59000 ">
                            <input type="hidden" name="hinh" value="onepice.jp">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/hoc-vien-anh-hung.jpg" alt=""></div>
                        <p><span>57000</span>VNĐ</p>
                        <a href="#">My Hero Academia</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="My Hero Academia">
                            <input type="hidden" name="gia" value="57000 ">
                            <input type="hidden" name="hinh" value="hoc-vien-anh-hung.jpg">
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