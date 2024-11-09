<!DOCTYPE html>
<html>
    <head>
        <title>Chi tiết đơn hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #order-wrapper{
                width: 450px;
                margin: 50px auto;
                border: 4px solid #DF0E62;
                padding: 5px;
                
            }

            h1 {
                text-align: center;
                color: #DF0E62;
            }

            h2 {
             
                color: #DF0E62;
            }

            #ttkh{
                display: flex;
            }

            #ttsp{
                display: flex;
            }

            #tt{
                display: flex;
            }

            #order-detail{
                flex-basis: 50%
            }

            #tien{
                display:flex;
                color: #DF0E62;
            }

        </style>

    </head>
    <body>
      
        <div id="order-wrapper">
            
            <h1>Chi tiết đơn hàng</h1>
            <hr/>
           
            <h2>Thông tin khách hàng</h2>
            <div id='ttkh'>
                <div id="order-detail">
                    <p>Khách hàng: </p>
                    <p>Số điện thoại: </p>
                    <p>Địa chỉ: </p>
                </div>
                <div id='order-right'>
                    <p>Huy Hảo </p>
                    <p>534561777 </p>
                    <p> 79 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy </p>
                </div>
            </div>

            <hr/>

            <h2>Thông tin sản phẩm</h2>
            <div id='ttsp'>
                <div id="order-detail">
                    <p>Mã sản phẩm: </p>
                    <p>Tên sản phẩm: </p>
                    <p>Số lượng: </p>
                    <p>Đơn giá: </p>
                </div>
                <div id='order-right'>
                    <p>SP01 </p>
                    <p>Bánh macarons </p>
                    <p> 1</p>
                    <p>50.000 </p>
                </div>
            </div>

            <hr/>

            <h2>Thanh toán</h2>
            <div id='tt'>
                <div id="order-detail">
                    <p>Sản phẩm: </p>
                    <p>Phí vận chuyển: </p>
                    <p>VAT: </p>
                </div>
                <div id='order-right'>
                    <p>50.000 </p>
                    <p>20.000 </p>
                    <p> 10% </p>
                </div>
            </div>

            <hr/>

            <div id='tien'>
                <div id="order-detail"><h2>Tổng:</h2></div>
                <div ><h2>75.000VND</h2></div>
            <div>
        </div>
    </body>
</html>