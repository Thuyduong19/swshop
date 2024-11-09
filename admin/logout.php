<!DOCTYPE html>
<html>
<head>
    <title>Đăng xuất tài khoản</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box-content {
            margin: 0 auto;
            width: 500px;
            height:135px;
            border: 1px solid #ccc;
            text-align: center;
            padding: 20px;
            border-radius:15px;
        }
        #user_logout form {
            width: 200px;
            margin: 40px auto;
        }
        #user_logout form input {
            margin: 5px 0;
        }
        a {
            color: white; /* Màu chữ */
            text-decoration: none; /* Loại bỏ gạch chân */
            background-color: #DF0E62; /* Màu nền */
            padding: 10px 20px; /* Đệm */
            border: 1px solid #DF0E62; /* Khung màu */
            border-radius: 5px; /* Bo tròn góc */
        }
        h1 {
            margin-bottom: 20px; /* Khoảng cách với dòng dưới */
        }
        .inline {
            display: inline-block; /* Hiển thị trên cùng một dòng */
            margin-top:15px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    unset($_SESSION['current_user']);
    ?>
    <div id="user_logout" class="box-content">
        <h1>Đăng xuất tài khoản thành công</h1>
        <div class="inline">
            <a href="./index.php">Đăng nhập lại</a>
        </div>
    </div>
</body>
</html>
