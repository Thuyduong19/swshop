<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
<title>Tin Khuyến Mại</title>
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
                        <li class="dropdown-link"><a class="linkdr" href="boloc.php">Bánh sinh nhật</a></li>
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
<BR> 
<div class="contentkm">
<h1 class="Tkm"> Tin khuyến mại </h1>
<div class="km-container">
    <div class="promo">
        <img src="https://savourebakery.com/vnt_upload/news/03_2024/cover-web.jpg" alt="Tin khuyến mại 1">
        <div class="promo-content">
            <h2>ƯU ĐÃI KHAI TRƯƠNG </h2>
            <h4 class="date"> 16/03/2023 - 24/03/2023 </H4>
            <p class="gt-km">"Mở cửa chào đón: Sweets Shop ra mắt với sự kiện khai trương đầy phấn khích, kèm theo loạt ưu đãi hấp dẫn dành cho những người yêu thích hương vị ngọt ngào!"
            </p>
            <a class="read-more" href="Tin khuyến mại 1.php">Xem chi tiết</a>
        </div>
    </div>
    
    <div class="promo">
        <img src="https://savourebakery.com/vnt_upload/news/02_2024/cover08.03_website_1.jpg" alt="Tin khuyến mại 2">
        <div class="promo-content">
            <h2>QUÀ TẶNG NGÀY PHÁI ĐẸP</h2>
            <h4 class="date"> 07 - 08/03/2024 </H4>
                <p class="gt-km">Mừng ngày Quốc tế Phụ Nữ, Sweets shop cùng bạn gửi trọn yêu thương đến một nửa xinh đẹp của thế giới với ưu đãi đến 30% tất cả bánh kem ổ trong ngày 07 & 08.03.2024.</p>
            <a class="read-more" href="Tin khuyến mại 2.php">Xem chi tiết</a>
        </div>
    </div>
    
    <div class="promo">
        <img src="https://i.pinimg.com/564x/93/01/3d/93013dd3cffb4b65a96aac6b11da8ec8.jpg" alt="Tin khuyến mại 3">
        <div class="promo-content">
            <h2>HOT HOT HOT!!! MUA 1 ĐƯỢC 2</h2>
            <h4 class="date"> 30/12/2023 </H4>
                <p class="gt-km">Thưởng thức gấp đôi:  Mua 1 được 2! Thỏa sức thưởng thức hương vị ngọt ngào với chương trình khuyến mại hấp dẫn tại tiệm bánh ngọt của chúng tôi!"
                </p>
            <a class="read-more" href="Tin khuyến mại 3.php">Xem chi tiết</a>
        </div>
    </div>

    <div class="promo">
        <img src="https://i.pinimg.com/564x/18/b7/b5/18b7b5105f48a2fe843c4241b8278330.jpg" alt="Tin khuyến mại 4">
        <div class="promo-content">
            <h2>CÁM ƠN VÌ TẤT CẢ - CHƯƠNG TRÌNH ƯU ĐÃI TẠI CỬA HÀNG</h2>
            <h4 class="date"> 11/04/2024 - 24/04/2024 </H4>
                <p  class="gt-km">Tri ân sự ủng hộ: Sweets Shop gửi đến khách hàng yêu quý chương trình khuyến mại đặc biệt, đầy quà tặng và ưu đãi hấp dẫn để cảm ơn những khoảnh khắc ngọt ngào đã được chia sẻ cùng chúng tôi!</p>
            <a class="read-more" href="Tin khuyến mại 4.php">Xem chi tiết</a>
        </div>
    </div>
       
    <div class="promo">
        <img src="https://i.pinimg.com/564x/c4/ba/5b/c4ba5b15fcbf5674ff560fa290681098.jpg" alt="Tin khuyến mại 3">
        <div class="promo-content">
            <h2>TẤT TẦN TẬT CÁC CHƯƠNG TRÌNH KHUYẾN MÃI THÁNG 4 NÀY</h2>
            <h4 class="date"> 01/04/2024 </H4>
                <p class="gt-km">Khám phá vị ngọt của tháng 4: Sweets Shop chào đón mùa mới với loạt ưu đãi hấp dẫn, từ những chiếc bánh tươi ngon đến những phần quà đặc biệt, mang đến cho bạn trải nghiệm thú vị và đầy ấn tượng!</p>
            <a class="read-more" href="Tin khuyến mại 5.php">Xem chi tiết</a>
        </div>
    </div>

    <div class="promo">
        <img src="https://i.pinimg.com/564x/82/63/08/826308dce7362631e656633310b88d31.jpg" alt="Tin khuyến mại 4">
        <div class="promo-content">
            <h2 class="date">KHUNG GIỜ VÀNG 18H-20H</h2>
            <h4> 15/03/2024 - 01/04/2024 </H4>
                <p class="gt-km">Tận hưởng giây phút ngọt ngào: Khung giờ vàng từ 18h đến 20h tại Sweets Shop, cơ hội để thưởng thức những chiếc bánh tinh tế và đắm chìm trong không gian ngọt ngào với ưu đãi đặc biệt chỉ dành riêng cho bạn!</p>
            <a class="read-more" href="Tin khuyến mại 6.php">Xem chi tiết</a>
        </div>
    </div>
 
       
    <div class="promo">
        <img src="https://i.pinimg.com/564x/59/18/b6/5918b6408249f209b16795d3343b384a.jpg" alt="Tin khuyến mại 3">
        <div class="promo-content">
            <h2>CHỤP ẢNH CÓ QUÀ - LIKE NHIỀU QUÀ CHẤT</h2>
            <h4 class="date"> 06/09/2023 </H4>
                <p class="gt-km">Chụp ảnh, nhận quà: Sweets Shop khuấy động mạng xã hội với chương trình khuyến mại 'LIKE nhiều, quà chất'! Hãy cùng chia sẻ khoảnh khắc ngọt ngào và nhận ngay những phần quà hấp dẫn từ chúng tôi!                </p>
            <a class="read-more" href="Tin khuyến mại 7.php">Xem chi tiết</a>
        </div>
    </div>

    <div class="promo">
        <img src="https://i.pinimg.com/564x/62/b9/34/62b93445cbe10f4246664a874e2f2808.jpg" alt="Tin khuyến mại 4">
        <div class="promo-content">
            <h2>SUỴT! BÍ KÍP THOÁT Ế THÀNH CÔNG</h2>
            <h4 class="date"> 14/02/2024 </H4>
                <p class="gt-km">Bí kíp thành công thoát ế: Sweets Shop tiết lộ những mẹo ngọt ngào giúp bạn vượt qua trạng thái ế khó khăn! Khám phá những chiêu thức đặc biệt và nhận ngay những ưu đãi hấp dẫn từ chúng tôi!                </p>
            <a class="read-more" href="Tin khuyến mại 8.php">Xem chi tiết</a>
        </div>
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
</div>
</footer>

</body>
</html>
