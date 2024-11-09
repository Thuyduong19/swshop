<?php
require 'connect.php';
$tên=$_POST['tên'];
$email=$_POST['email'];
$mậtkhẩu=$_POST['mậtkhẩu'];
if(!empty($tên)&&!empty($email)&&!empty($mậtkhẩu)){
    $sql="INSERT INTO `nguoidung`(`TENND`,`Email`,`PASS`) VALUES ('$tên', '$email',md5('$mậtkhẩu'))";
    if($conn->query($sql)===TRUE){
        echo "Tạo tài khoản thành công";
    }else{
        echo "Lỗi {$sql}".$conn->error;
    }
}else{
    echo('Vui lòng nhập đủ thông tin');
}
?>
<br>
<a href="dangnhap.php">Quay lại trang đăng nhập</a>
