<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>Giỏ hàng</title>
    </head>
    <style>
        
.generalcart {
    margin-top: 70px;
    margin-bottom: 30px;
}
#headingcart {
    font-size: 38px;
    font-weight: bold;
    text-align: center;
}
#basket {
    text-align: center;
    font-size: 23px;
    margin-top: 10px;
}
.containercart{
    display: flex;
    margin: 50px 150px;
}

.cartt{
    width: 70%;
    background-color: fff;
    margin: 0 auto;
    padding: 10px
}

.boxcart {
	display: flex;
	width: 100%;
	height: 100px;
	margin-bottom: 20px;
	background: fff;
}

.imagecart {
	width: 100px;
	height: 100px;
    border: 2px solid #745240;
}
.contentcart {
	padding: 20px;
	width: 100%;
	position: relative;
}
.contentcart h3 {
    margin-top: -20px;
	margin-bottom: 10px;
    color: #745240
}
.contentcart p {
	margin-bottom: 10px;
}
.nut {
    border: none;
    color: black;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
.pricecart {
	position: absolute;
    margin-bottom: 10px;
	right: 20px;
	padding: 10px 25px;
}
.under{
    display:block;
}
.sideboxcart {
    margin-top: 20px;
    width: 35%;
}
.policy {
    width: 60%;
    margin-top: 20px;
}
.policyy {
    list-style: none;
}

 
/* phai */

.summary{
    background-color: fff;
    width: 45%;
    margin-left: 20px;
    padding: 30px;
    border-color:ghostwhite;
    border-style: solid;
}
 .topcart {
    margin-bottom: 20px;
 }
 .topcart p{
    font-size: 25px;
    font-weight: bold;
 }

.detail{
    margin: 10px 0;
    padding: 0 10px;
    align-items: end;
    height: 30px;
    display: block;
}
.total {
    color: #737373;
    font-size: 20px;
}

.money {
    color: red;
    font-size: 24px;
    margin-left: 180px;
 }
.noting {
    margin-top: 30px;
    padding: 0 30px;
}
.paymentcart{
    border: none;
    background-color: red;
    padding: 8px 110px;
    font-size: 25px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 15px;
    text-align: center;
    display: inline-block;
}

button:hover {
    background-color: #333;
}
.note {
    margin-top: 20px;
    margin-bottom: 20px ;
    color: #000000;
}
.continue {
    margin-top: 15px;
    margin-left: 100px;
}
.buy {
    background-color: white;
    color: black;
    text-decoration: none;
    font-size: 20px;
    cursor: pointer;
}
    </style>
    <body>
        <div class="generalcart">
            <p id="headingcart">Giỏ hàng của bạn</p>
        </div>
        <hr style="width:100px; margin: auto; size:10; color:rgb(48, 47, 47)" />
        <div class="containercart">
            <div class="cartt">
                    <div class="boxcart">
                        <img class="imagecart" src="ảnh/1. Bánh macaron.png"/>     
                        <div class="contentcart">
                                <h3>Rainbow Macaron</h3>
                                <p>25,000đ</p>
                                <div class="pricecart" style="cursor:pointer">Xóa</div>
                                <p class="unitcart">
                                <input style="width:40px; outline:none" type="number" value="1" min="0">
                                </p>
                        </div> 
                    </div>
                    <hr>
                <div class="under">
                    <div class="sideboxcart">
                        <h4>Ghi chú đơn hàng</h4>
                        <div class="checkout-note">
                            <textarea name="note" rows="3" placeholder="Ghi chú"></textarea>
                        </div>
                    </div>
                    <div class="policy">
                        <h4>Chính sách mua hàng</h4>
                        <ul class="policyy">
                            <li>Vui lòng kiểm tra kỹ sản phẩm và số lượng trước khi nhận hàng thanh toán.</li>
                            <li>Liên hệ hotline 02438222228 để được tư vấn chi tiết.</li>
                            <li>Sản phẩm sale Bánh của tháng chỉ áp dụng khi mua tại cửa hàng.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="summary">
                <div class="topcart">
                    <p>Thông tin đơn hàng</p>
                </div>
                <hr>
                <div class="detail" style="text-align: center;">
                    <p class="total" style="font-weight: bold;">Tổng tiền:<span>25,000</span></p>
                </div>
                <hr>
                <div class="noting">
                    <p class="note">Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                    <p class="note">Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                    <a class="paymentcart" href="thanhtoan.php">Thanh toán</a>
                </div>
                <p class="continue">
                    <a class="buy" href="trangchu.php"> &#8617 Tiếp tục mua hàng</a>
                </p>
            </div>
        </div>
    </body>
</html>
