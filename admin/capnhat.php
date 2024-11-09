<!DOCTYPE HTML>
<HTML>
<HEAD>       
       
        <meta charset="UTF-8">

        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            }

            #capnhatdon{
                h2{
                    color: #DF0E62; /* Đổi màu chữ thành hồng */
                    margin-bottom: 20px; /* Tăng khoảng cách với nội dung bên dưới */
                }
                input[type="submit"] {
                    background-color: #DF0E62; /* Đặt màu chủ đạo */
                    color: white;
                    cursor: pointer;
                    padding: 10px;
                    border-radius: 15px;
                    border: none; /* Loại bỏ viền */
                }

                input[type="text"]{
                        border-radius: 8px;
                    }
                
            }
                
        </style>
</head>
<body>

<?php

    include "connect.php";
    $this_id = $_GET['this_id'];
    $sql = "SELECT * FROM orderr where IDDH ='$this_id'";
    $query = mysqLi_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    // khi nhấn nút cập nhật

    if(isset($_POST['btn'])){
        $IDDH = $_POST['IDDH'];
        $KHACHHANG= $_POST['KHACHHANG'];
        $SDT = $_POST['SDT'];
       
        $NGAYDH = $_POST['NGAYDH'];
       
        $TRANGTHAI = $_POST['TRANGTHAI'];
        $GHICHU = $_POST['GHICHU'];

    $sql = "UPDATE orderr SET
        IDDH='$IDDH',
        KHACHHANG=' $KHACHHANG',
        SDT='$SDT',
        
        NGAYDH='$NGAYDH',
       
        TRANGTHAI='$TRANGTHAI',
        GHICHU='$GHICHU'
        where IDDH = '$this_id'";

    $query = mysqLi_query($conn, $sql);

    header('location: orderr.php');

    }

?>

<div id="capnhatdon" align="center">
<h2>Cập nhật đơn hàng</h2>
<form method="post" enctype="multipart/form-data">
    <label>IDDH:</label>
        <br>
    <input type="text" name="IDDH" value="<?= $row['IDDH'] ?>" >
        <br> <br>
    <label>Khách hàng:</label>
        <br>
    <input type="text" name="KHACHHANG" value="<?= $row['KHACHHANG'] ?>">
        <br> <br>
    <label>SDT:</label>
        <br>
    <input type="text" name="SDT" value="<?= $row['SDT'] ?>">
        <br> <br>
    
    <label>Ngày đặt hàng:</label>
        <br>
    <input type="text" name="NGAYDH" value="<?= $row['NGAYDH'] ?>">
        <br> <br>
    
    <label>Trạng thái:</label>
        <br>
    <input type="text" name="TRANGTHAI" value="<?= $row['TRANGTHAI'] ?>">
        <br> <br>
    <label>Ghi chú:</label>
        <br>
    <input type="text" name="GHICHU" value="<?= $row['GHICHU'] ?>">

    <br> <br>

    <input type="submit" name="btn" value="Cập nhật" >
</form>
</div>

</body>
</HTML>

