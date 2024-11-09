<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Sweets Shop</title>
</head>
<body>
    <header>
    <div class="logo">
    <img src="ảnh/logo.jpg" >
    </div>

    <div class="search-text">
        <input type="search" name="Tìm kiếm" placeholder="Tìm kiếm sản phẩm...">
        <a href="#" class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </a>
    </div>
    <div class="user">
        <a href="dangnhap.php" class="user-icon">
            <i class="fa-solid fa-user"></i> Đăng nhập/Đăng ký
        </a>
    </div>
    <div class="cart">
        <a href="giohang.php" class="user-icon">
            <i class="fa-solid fa-cart-shopping"></i> Giỏ hàng
        </a>
    </div>
    <nav>
        <ul class="navi">
        <li class="nav-list" ><a class="link" href="trangchu.php">Trang chủ</a></li>
            <li class="nav-list"><a class="link" href="boloc.php">Bánh ngọt và bánh mì &#x25BE;</a>
              <ul class="dropdown">
                <li class="dropdown-link"><a class="linkdr" href="Bánh sinh nhật.php">Bánh sinh nhật</a></li>
                <li class="dropdown-link"><a class="linkdr" href="Bánh mì.php">Bánh mì</a></li>
                <li class="dropdown-link"><a class="linkdr" href="Bánh tươi.php">Bánh tươi</a></li>
                <li class="dropdown-link"><a class="linkdr" href="Bánh ngọt.php">Bánh ngọt</a></li>
                <li class="dropdown-link"><a class="linkdr" href="Phụ kiện.php">Phụ kiện</a></li>
              </ul>
            </li>
            <li class="nav-list"><a class="link" href="Gallery.php">Gallery</a></li>
            <li class="nav-list"><a class="link" href="Khuyến mại.php">Khuyến mại</a></li>
            <li class="nav-list"><a class="link" href="tranglhe.php">Liên hệ</a></li>
            <li class="nav-list"><a class="link" href="trangtd.php">Tuyển dụng</a></li>
         </ul>
        </nav>
    </header>

    <div class="container">
        <h2 align="center">ĐĂNG KÝ</h2><br><br>
        <form class="formdk" align="center" action="reg.php" method="post">
            <input type=text name="tên" placeholder="Họ tên"><br><br>
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="Password" name="mậtkhẩu" placeholder="Mật khẩu"><br><br>
            <button type="submit">Đăng ký</button><br><br>
            <a href="dangnhap.php">Đăng nhập</a>
        </form>
    </div>

    <footer class="footer">
        <div class="swt">
            <div class="footer__column">
                <h class="footer_h1"><b>Giới thiệu</b></h>
                <div class="footer_p">
                    <p>Xuất thân trong gia đình có nghề làm bánh ngọt truyền thống. SWEETS cũng có thời gian dài làm việc với Công ty Bodega và Sofitel Metropole. Công ty có hơn 10 năm kinh nghiệm làm bánh tại khách sạn danh tiếng Sofitel Metropole Legende Hanoi.</p>
                </div>
            </div>
            <div class="footer__column">
                <h class="footer_h1"><b>Liên kết</b></h>
                <ul class="footer_list">
                    <li>
                        <a href="trangchu.html"  class="footer_lk-link">Bán hàng</a>
                    </li>
                    <li>
                        <a href="giohang.php" class="footer_lk-link">Thanh toán</a>
                    </li>
                    <li>
                        <a href="trangtd.html" class="footer_lk-link">Tuyển dụng</a>
                    </li>
                    <li>
                        <a href="Bộ lọc.html" class="footer_lk-link">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="tranglhe.html" class="footer_lk-link">Liên hệ với chúng tôi</a>
                    </li>
                </ul>
            </div>
            <div class="footer__column">
                <h class="footer_h1"><b>Liên hệ</b></h>
                <ul class="footer_list">
                    <div>
                        <li><p>
                            <i class="fa-solid fa-location-dot"></i>
                            Địa chỉ: Số 10, hẻm 7 ngách 50, ngõ Linh Quang, phường Văn Chương, quận Đống Đa, Hà Nội.
                            </p>
                        </li>
                        <li><p>
                            <i class="fa-solid fa-phone-volume"></i>
                            SĐT: 0243.8722428
                            </p>
                        </li>
                        <li><p>
                            <i class="fa-solid fa-envelope"></i>
                            E-mail: info@sweetsshop.vn
                            </p>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </footer>
</body>

    
</html>

    