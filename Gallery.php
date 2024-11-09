<html>
<head>
<title> Gallery </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head><br>
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
   
   <h1 class="Bst"> Bộ sưu tập </h1>
<div class="image-row">
   <img src="https://i.pinimg.com/564x/8c/1e/cd/8c1ecdd731e57b9a625575df32f63d3a.jpg" alt="1">
   <img src="https://file.hstatic.net/1000104153/file/z5330532372878_aa0086cf78c229eecb9a65cc98673e93_6e665adda0364a75a5d14bb0092c3e2b_2048x2048.jpg" alt="2">
   <img src="https://file.hstatic.net/1000104153/file/z4841165954190_4a8fe363db45afe4fe8154196e872653_4e27ce786bfa46d4be0d414da597237f_2048x2048.jpg" alt="3">
</div>


<div class="image-row">
   <img src="https://file.hstatic.net/1000104153/file/z5020165667808_ebd51ccc65f59805cae945aee5031239_025a5e7c01de4799bd3fbbba8f9445ff_2048x2048.jpg" alt="4">
   <img src="https://file.hstatic.net/1000104153/file/ns71141832_d38ce6556a534b01b654dc898ecb0e90_2048x2048.jpg" alt="5">
   <img src="https://file.hstatic.net/1000104153/file/z5330533450410_c8f2f265be45bab910fb6fbf8011ff3d_78a071f82c6e490a8a42897729301e0c_2048x2048.jpg" alt="6">
</div>


<div class="image-row">
   <img src="https://file.hstatic.net/1000104153/file/z5217034617446_2874828fadd82545f30380d9302d999b_b7b2336d1fad45d5add2591eb95ea76f_2048x2048.jpg" alt="7">
   <img src="https://file.hstatic.net/1000104153/file/z5020165637016_825d747686306cad836c80c9f75f9594_9572695373044625af6031ae27634ae2_2048x2048.jpg" alt="8">
   <img src="https://file.hstatic.net/1000104153/file/z5020163954173_19319666743bd2c5d0272a908e47b037_a2d9c1b7b08d446e9635a255fc2b37aa_2048x2048.jpg" alt="9">
</div>


<div class="image-row">
   <img src="https://file.hstatic.net/1000104153/file/z4841147960867_60deefd8e52d7686f8ac4e3a27bc992a_e718e6d2f9844c71a373822ba374fccf_2048x2048.jpg" alt="10">
   <img src="https://file.hstatic.net/1000104153/file/z5020163946332_7f9df494694baa4defae2865f8bcd290_20341abcfa5d4dfbb6d435bf49e9926f_2048x2048.jpg" alt="11">
   <img src="https://file.hstatic.net/1000104153/file/z4841148604397_9c1e6f76064b60601ce3f8eb2e53939a_ad59a97736e14fbd9eaf4108aa4abba1_2048x2048.jpg" alt="12"> 
</div>


<div class="image-row">
   <img src="https://file.hstatic.net/1000104153/file/z5217034630741_b333a9b64f907542ab966b412110183e_aba9943533f446418d95fd63b99d102a_2048x2048.jpg" alt="13">
   <img src="https://file.hstatic.net/1000104153/file/z5020165667808_ebd51ccc65f59805cae945aee5031239_025a5e7c01de4799bd3fbbba8f9445ff_2048x2048.jpg" alt="14">
   <img src="https://bizweb.dktcdn.net/100/004/714/articles/cach-lam-banh-macaron-bang-bot-mi-11.jpg?v=1593449166130" alt="15"> 
</div>


<div class="image-row">
   <img src="https://digiticket.vn/blog/wp-content/uploads/2021/08/b%C3%A1nh-macaron-h%C3%A0-n%E1%BB%99i-2.jpg" alt="16">
   <img src="https://file.hstatic.net/1000104153/file/z5330533515384_b76d01181215075e72ae26a35c1beda2_3dd99d0fcb3246098828bfe0ffc6996e_2048x2048.jpg" alt="17">
   <img src="https://file.hstatic.net/1000104153/file/z4841165950546_22d50d2a0e4be976b1c5d9a3c623910a_b3095a17e4cf4af4ae894fbbff74a7e9_2048x2048.jpg" alt="18">
</div>


<div class="image-row">
   <img src="https://img.alicdn.com/imgextra/i4/2207905363147/O1CN017vM3RL1Z7N9ZMeoot_!!2207905363147.jpg" alt="19">
   <img src="https://i.pinimg.com/564x/5c/06/46/5c0646036a97c1b54749e7fb7e5549d2.jpg" alt="20">
   <img src="https://i.pinimg.com/564x/8c/59/7a/8c597a76ffbbd221a07a202b152d11c9.jpg" alt='21'>
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



