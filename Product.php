<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Sweets Shop</title>
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
<?php
include './connect_db.php';
$result= mysqli_query($con, "SELECT * FROM `product` where `id`=".$_GET['id']);
$product = mysqli_fetch_array($result);
?>
    <section class="product">
        <div class="Tatcasp">
            <div class="product-content row">
                <div class="product-content-left">
                    <div class="product-content-left-img">
                    <img src="<?=$product['image'] ?>"> </div>
                </div>
                <div class="product-content-right" >
                    <div class="product-content-right-product-name">
                        <h1> <b> <?= $product['name'] ?> </b></h1>
                    </div>
                    <div class="product-content-right-product-price">
                        <p4><?= number_format($product['price'], 0, ",", ".") ?>đ</p4>
                    </div>
                    <div class="quantity">
                         <input type="number" min="1" value="1"> 
                    </div>
                    <div class="'product-content-right-product-button">
                        <button><p>THÊM VÀO GIỎ</p></button> 
                    </div>
                    <div class="product-content-right-product-describe">
                        <h2> Mô tả</h2><br>
                        <p>Chiếc bánh <b><?= $product['name'] ?></b> được ra đời với thông điệp về sự đủ đầy & tốt lành. “Trời tròn - Đất vuông” đơn giản như vậy, tạo hình trên nền tráng gương màu xanh lá dịu mát có hình vuông tượng trưng cho đất & hình tròn tượng trưng cho trời. Hương vị chủ đạo là xoài tươi và lá dứa - đậm chất Châu Á, kết hợp thêm cùng phô-mai cream cheese của Châu Âu, chiếc bánh này sẽ đem lại cảm giác tươi mát, thơm ngậy và ngọt dịu khi thưởng thức.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-related">
        <div class="'product-related-title">
            <center><p style="font-size: 22px;"><b>SẢN PHẨM LIÊN QUAN</b></p></center>
        </div>
        <div class="product-related-content row">
            <div class="products-right-content-item">
                <img src="ảnh/1. Bánh macaron.png" alt="Bánh macaron">
                <h1><a href="#">Bánh Macaron</a></h1>
                <p>50.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/2. Bánh sừng bò nhân ruốc.png" alt="Bánh sừng bò nhân ruốc">
                <h1><a href="#">Bánh sừng bò nhân ruốc</a></h1>
                <p>17.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/3. Bánh custard bun.png" alt="custard bun">
                <h1><a href="#">Bánh custard bun</a></h1>
                <p>15.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/4. Bánh panna cotta.png" alt="Bánh panna cotta">
                <h1><a href="#">Bánh panna cotta</a></h1>
                <p>370.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/5. Tiramisu matcha.png" alt="Tiramisu matcha">
                <h1><a href="#">Tiramisu matcha</a></h1>
                <p>130.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/6. Tiramisu choco.png" alt="Tiramisu choco">
                <h1><a href="#">Tiramisu choco</a></h1>
                <p>130.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/7. Bánh dừa nho trứng muối.png" alt="Bánh dừa nho trứng muối">
                <h1><a href="#">Bánh dừa nho trứng muối</a></h1>
                <p>30.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/8. Bánh Flan cake.png" alt="Bánh Flan cake">
                <h1><a href="#">Bánh Flan cake</a></h1>
                <p>25.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/9. Petist set mix.png" alt="Petist set mix">
                <h1><a href="#">Petist set mix</a></h1>
                <p>70.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/10. Bánh sừng bò.png" alt="Bánh sừng bò">
                <h1><a href="#">Bánh sừng bò</a></h1>
                <p>25.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/11. Bánh Choux.png" alt="Bánh Choux">
                <h1><a href="#">Bánh Choux</a></h1>
                <p>20.000<sup>đ</sup></p>
            </div>
            <div class="products-right-content-item">
                <img src="ảnh/12. Bánh pastry Orient Scent.png" alt="Bánh pastry Orient Scent">
                <h1><a href="#">Bánh pastry Orient Scent</a></h1>
                <p>595.000<sup>đ</sup></p>
            </div>
        </div>
    </section>
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
                        <a href=""  class="footer_lk-link">Bán hàng</a>
                    </li>
                    <li>
                        <a href="" class="footer_lk-link">Thanh toán</a>
                    </li>
                    <li>
                        <a href="" class="footer_lk-link">Tuyển dụng</a>
                    </li>
                    <li>
                        <a href="" class="footer_lk-link">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="" class="footer_lk-link">Liên hệ với chúng tôi</a>
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
    <script src="cart.js"></script>
</body>
</html>