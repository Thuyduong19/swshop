<?php

    include "connect.php";

    if(isset($_POST['btn'])){
        $IDDH = $_POST['IDDH'];
        $KHACHHANG = $_POST['KHACHHANG'];
        $SDT= $_POST['SDT'];
      
        $NGAYDH = $_POST['NGAYDH'];
       
        $TRANGTHAI = $_POST['TRANGTHAI'];
        $GHICHU = $_POST['GHICHU'];

    $sql = "INSERT INTO orderr(IDDH, KHACHHANG, SDT, NGAYDH, TRANGTHAI, GHICHU)
    VALUES('$IDDH','$KHACHHANG','$SDT','$NGAYDH', '$TRANGTHAI', '$GHICHU')";

    mysqLi_query($conn, $sql);

    header('location: orderr.php');
    }
?>

