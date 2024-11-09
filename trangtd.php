<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="author" content="Đinh Thị Ngọc Diễm"/>
    <title>Trang tuyển dụng</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
        <img src="ảnh/logo.jpg" >
        </div>
    
   <form id="product-search" method="GET">
        <div class="search-text">
        <input type="search" placeholder="Tìm kiếm sản phẩm..." value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>" name="name" />
            <a href="" class="search" onclick="document.getElementById('product-search').submit(); return false;">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
    </form>
    <?php

    $search = isset($_GET['name']) ? $_GET['name'] : "";
    include './connect_db.php';

    if ($search) {
        // Liên kết đến trang boloc.php với từ khóa tìm kiếm
        $search_url = urlencode($search);
        header("Location: boloc.php?name=$search_url");
        exit();
        
        // Truy vấn SQL sẽ được thực hiện trong trang boloc.php
    } 
    // Nếu không có tìm kiếm, không làm gì cả

    ?>
    <div class="user">
        <?php
        session_start();
        // Kiểm tra nếu session 'user' tồn tại
        if(isset($_SESSION['user'])) {
            // Lấy tên người dùng từ session
            $user = $_SESSION['user'];
            // Hiển thị tên người dùng và nút đăng xuất
            echo '<span class="user-icon"><i class="fa-solid fa-user"></i> ' . $user['TENND'] . ' | <a href="dangxuat.php" class="logout-btn">Đăng xuất</a></span>';
        } else {
            // Nếu không có session 'user', hiển thị nút đăng nhập/đăng ký
            echo '<a href="dangnhap.php" class="user-icon"><i class="fa-solid fa-user"></i> Đăng nhập/Đăng ký</a>';
        }
        ?>
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
                        <li class="dropdown-link"><a class="linkdr" href="Product.php">Bánh sinh nhật</a></li>
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
        </header><br>
    <div id="wp-content">
        <div id="left">
            <div id="siderbar"><br>
                <h4><center>DANH MỤC TRANG</center></h4><br>
                <center><hr size="3px" width="200px" color="#745240"></center><br>
                <ul class="list">
                    <li><a class="danhmuc" href="sanphammoi.php">Sản phẩm mới</a></li>
                    <li><a class="danhmuc" href="spbanchay.php">Sản phẩm bán chạy</a></li>
                    <li><a class="danhmuc" href="boloc.php">Tất cả sản phẩm</a></li>
                    <li><a class="danhmuc" href="Khuyến mại.php">Khuyến mại</a></li>
                </ul>
            </div>
            <br><br>
            <!--ảnh-->
            <div>
                <img class="anhdanhmuc" src="https://uniquekiosk.com/wp-content/uploads/2021/03/1-6.png"/>
            </div>
        </div>
        <!--Tuyển dụng-->
        <div class ="content">
            <center><h1>Sweets shop tuyển dụng</h1></center><br>
            <p> Hơn 19 năm kinh nghiệm trong lĩnh vực sản xuất các sản phẩm từ bột Công Ty Cổ phần dịch vụ thương mại sản xuất SWTS với thương hiệu SWEETS SHOP đã và đang ngày càng trở nên thân thiết với thực khách yêu thích bánh ngọt. Mỗi sản phẩm của SWEETS SHOP luôn được chăm chú, lựa chọn kỹ càng từ nguyên liệu sản xuất đến việc tạo hình cho từng sản phẩm hoàn toàn hand-make. Với mục đích mang lại các dịch vụ tốt nhất, nhanh nhất trên địa bàn Hà Nội, chúng tôi luôn luôn sẵn sàng phục vụ bạn với hệ thống bao gồm 13 cửa hàng. Chúng tôi chào mừng các bạn gia nhập vào đội ngũ nhân viên của Công ty. </p>
            <p>Nếu bạn quan tâm đến chúng tôi, hãy gửi CV đến: <a href="https://forms.gle/ZjE9iur2rZfaAVud8" target="_blank" title="Form gửi CV">Tại đây</a> .<br>
            Mọi chi tiết xin liên hệ ĐT: 0243 8722 428 hoặc gửi e-mail: info@sweetsshop.vn</p>
        </div>
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
                        <a href="trangchu.php"  class="footer_lk-link">Bán hàng</a>
                    </li>
                    <li>
                        <a href="giohang.php" class="footer_lk-link">Thanh toán</a>
                    </li>
                    <li>
                        <a href="trangtd.php" class="footer_lk-link">Tuyển dụng</a>
                    </li>
                    <li>
                        <a href="boloc.php" class="footer_lk-link">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="tranglhe.php" class="footer_lk-link">Liên hệ với chúng tôi</a>
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