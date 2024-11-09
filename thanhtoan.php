<html>
    <head>
        <meta charset="UTF-8">
        <title>SWEETs SHOP</title>
    </head>
    <style>
        .container {
    display: flex;
}
#thanhtoan{
    color:black;
}
.left {
    flex: 0.7;
    border-right: 1px solid #ccc;
    padding: 20px;
}

.right {
    flex: 0.5;
    padding: 35px;
}

body {
    color: #868686;
    background: white !important;
    font-size: 14px;
    font-family:Helvetica Neue, sans-serif;
    line-height: 1.3em;
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-word;
    -webkit-font-smoothing: subpixel-antialiased;
    overflow-x: hidden;
}

html, body {
    margin: 0;
    width: 100%;
}

a {
    text-decoration: none;
    color:  #338dbc;
    transition: color 0.2s ease-in-out;
    display: inline-block;
}

a:focus {
    outline: none;
    }
    
    a:hover {
    /* color: #2b78a0; */
    filter: brightness(1.2);
}

p {
    margin: 0;
    line-height: 1.5em;
}

i {
    font-style: italic;
}

img {
    border: 0;
    max-width: 100%;
}

form {
    display: flex;
    flex-wrap: wrap;
}

form > div {
    flex: 1 1 100%;
    margin: 0.5rem; 
}

form label {
    flex: 1 1 100%; 
    margin-bottom: 5px;
}

form input[type="text"]{
    width:370px;
    flex: 1 1 100%; 
    padding: 10px;
    margin-top: 5px; 
}
form input[type="email"],
form input[type="tel"],
form select {
    flex: 1 1 100%; 
    padding: 10px;
    margin-top: 3px; 
}

form input[type="submit"] {
    display: inline-block;
    border-radius: 4px;
    font-weight: 500;
    padding: 1.4em 1.7em;
    box-sizing: border-box;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
    position: relative;
    background: #338dbc;
    color: white;
}

form input[type="submit"]:hover {
    filter: brightness(1.2);
}
  
input {
    border: 1px rgb(189, 189, 189) solid;
    background: hsl(0, 0%, 100%);
    border-radius: .25rem;
    padding: .75rem 1rem;
}

input[type="submit"] {
    background: #338dbc;
    color: white;
    cursor: not-allowed;
}

input[type="submit"]:not([disabled]) {
    cursor: pointer;
}

input[type="submit"]:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}
.pay{
    border: none;
    background-color: #338dbc;
    padding: 10px 10px;
    font-size: 13px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 15px;
    text-align: center;
    display: inline-block;
}

    </style>
    <body>
        <div class="container">
            <div class="left">
                <h1 id="thanhtoan">Sweets Shop</h1>
                
                <a href="giohang.php" style="display: inline;">Giỏ hàng</a>
                <i style="display: inline;">&gt;</i>
                <p style="display: inline;">Thông tin giao hàng</p>

                <h2 id="thanhtoan">Thông tin giao hàng</h2>
            
                <span>
                <p style="display: inline;">Bạn đã có tài khoản ?</p>
                <a href="dangnhap.php" style="display: inline;">Đăng nhập</a>
                </span>

                <form>
                    <div >
                        <label for="fullname"></label><br>
                        <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên" required>
                    </div>

                    <div>
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="Nhập địa chỉ email" required>
                        <label for="phone"></label>
                        <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>

                    <div>
                        <label for="address"></label><br>
                        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ" required>
                    </div>
                    <br>
                    <div> 
                        <label for="city"></label>
                        <select id="city" name="city" required>
                            <option value="">Chọn tỉnh/thành phố</option>
                            <option value="HaNoi">Hà Nội</option>
                        </select>
                        <label for="district"></label>
                        <select id="district" name="district" required>
                            <option value="">Chọn quận/huyện</option>
                            <option value="CauGiay">Cầu Giấy</option>
                            <option value="DongDa">Đống Đa</option>
                            <option value="HaiBatTrung">Hai Bà Trưng</option>
                            <option value="BacTuLiem">Bắc Từ Liêm</option>
                            <option value="NamTuLiem">Nam Từ Liêm</option>
                            <option value="HoangMai">Hoàng Mai</option>
                            <option value="TayHo">Tây Hồ </option>
                            <option value="ThanhXuan">Thanh Xuân</option>
                        </select>
                    </div>

                    <div>
                        <label>Phương thức vận chuyển:</label><br>
                        <label>
                            <input type="radio" name="radio" checked/>
                            <span>Giao hàng tận nơi</span><br>
                        </label>
                        <label>
                            <input type="radio" name="radio"/>
                            <span>Nhận tại cửa hàng</span>
                        </label>
                    </div>

                    <div>
                        <label>Phương thức thanh toán:</label><br>
                        <input type="radio" id="cash" name="payment" value="cash" checked>
                        <label for="cash">Thanh toán khi nhận hàng</label>
                    </div>
                    <br>
                    <div style="display:flex; justify-content: space-between;">
                        <a href="giohang.php">Giỏ hàng</a>
                        <input type="submit" value="Hoàn tất đơn hàng">
                    </div>
                </form>
                <hr>
                <center><p>Powered by</p></center>
            </div>
            <div class="right">
                <h2 id="thanhtoan">Thanh toán</h2>
                <hr>
                <img style="height: 100px; width: 100px;" src="ảnh/1. Bánh macaron.png" alt="Bánh macaron">
                    <p  >Bánh macaron</p>
                    <p>Số lượng: 1</p>
                <div style="display:flex; justify-content: space-between;">
                    <label for="sales"></label><br>
                    <input type="text" id="sales" name="sales" placeholder="Mã giảm giá" required>
                    <input type="submit" value="Sử dụng" disabled>
                </div>
                <hr>
                <div style="display:flex">
                <p>Tạm tính</p>
                <p style="padding-left:350px;">25,000đ</p>
                </div>
                <div style="display:flex">
                <p>Phí vận chuyển</p>
                <p style="padding-left:330px;">----</p>
                </div>
                <hr>
                <div style="display:flex">
                <p>Tổng cộng</p>
                <p style="padding-left:340px;">25.000đ</p>
                </div>
            </div>
        </div>
    </body>
</html>