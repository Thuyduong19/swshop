<?php
    session_start();
    unset($_SESSION['user']);
    ?>
    <div id="user_logout" class="box-content">
        <h1>Đăng xuất tài khoản thành công</h1>
        <div class="inline">
            <a href="trangchu.php">Quay lại trang chủ</a>
        </div>
    </div>