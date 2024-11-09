<?php

    $server ='localhost';
    $user ='root';
    $pass ='';
    $database ='sweetshop';

    $conn = new mysqLi($server, $user, $pass, $database);

    if($conn-> connect_error)
    {
            die("Kết nối lỗi:".$conn-> connect_error);
    }
?>