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
                        <video loop autoplay muted id="bg-video" width="100%" height="100%" >
                            <source src="video/1.mp4"  type="video/mp4">
                          </video>
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/Đời-ngắn-đừng-ngủ-dài-3.jpg" alt=""></div>
                        <p><span>55000</span>VNĐ</p>
                        <a href="#">Đời Ngắn Đừng Ngủ Dài</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Đời Ngắn Đừng Ngủ Dài">
                            <input type="hidden" name="gia" value="55000">
                            <input type="hidden" name="hinh" value="Đời-ngắn-đừng-ngủ-dài-3.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/dac-nhan-tam.png" alt=""></div>
                        <p><span>60000</span>VNĐ</p>
                        <a href="#">Đắc Nhân Tâm</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Đắc Nhân Tâm">
                            <input type="hidden" name="gia" value="60000">
                            <input type="hidden" name="hinh" value="dac-nhan-tam.png">
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/di_tim_le_song.jfif" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">Đi Tìm Lẽ Sống</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Đi Tìm Lẽ Sống">
                            <input type="hidden" name="gia" value="59000">
                            <input type="hidden" name="hinh" value="di_tim_le_song.jfif">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/sach_hay_nen_doc_nha_gia_kim.jpeg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Nhà Giả Kim</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Nhà Giả Kim">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="sach_hay_nen_doc_nha_gia_kim.jpeg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/nhung-bai-hov-cuoc-song.jpg" alt=""></div>
                        <p><span>56000</span>VNĐ</p>
                        <a href="#">Những Bài Học Cuộc Sống</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Những Bài Học Cuộc Sống">
                            <input type="hidden" name="gia" value="56000">
                            <input type="hidden" name="hinh" value="nhung-bai-hov-cuoc-song.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/hanh_trinh_ve_phuong_dong.jpg" alt=""></div>
                        <p><span>58000</span>VNĐ</p>
                        <a href="#">Hành trình về Phương Đông</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Hành trình về Phương Đông">
                            <input type="hidden" name="gia" value="58000">
                            <input type="hidden" name="hinh" value="hanh_trinh_ve_phuong_dong.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/hat_giong.jpg" alt=""></div>
                        <p><span>54000</span>VNĐ</p>
                        <a href="#">Hạt Giống Tâm Hồn</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Hạt Giống Tâm Hồn">
                            <input type="hidden" name="gia" value="54000">
                            <input type="hidden" name="hinh" value="hat_giong.jpg">
                        </form>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="images/sach-song-co-muc-dich.jpg" alt=""></div>
                        <p><span>59000</span>VNĐ</p>
                        <a href="#">Sống Có Mục Đích</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Sống Có Mục Đích">
                            <input type="hidden" name="gia" value="59000">
                            <input type="hidden" name="hinh" value="sach-song-co-muc-dich.jpg">
                        </form>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="images/thuc-tinh.jfif" alt=""></div>
                        <p><span>57000</span>VNĐ</p>
                        <a href="#">Thức Tỉnh Mục Đích Sống</a>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="100" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="Thức Tỉnh Mục Đích Sống">
                            <input type="hidden" name="gia" value="57000">
                            <input type="hidden" name="hinh" value="thuc-tinh.jfif">
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