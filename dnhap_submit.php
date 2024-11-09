<?php
include 'connect.php';

session_start();
if(isset($_POST["submit"]) && $_POST["email"]!='' && $_POST["pass"]!=''){
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $pass=md5($pass);
    $sql=" SELECT * from nguoidung where email='$email' and pass='$pass'";
    $user= mysqli_query($conn,$sql);
    if(mysqli_num_rows($user)>0){
    $userr =mysqli_fetch_assoc($user);
                $_SESSION['user'] = $userr;
        header("location:trangchu.php");
                
    }else{
        echo "Bạn nhập sai số điện thoại hoặc password";
    }
}else{
    header("location:dangnhap.php");
}

?>