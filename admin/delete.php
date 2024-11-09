<?php include 'header.php'; ?>
<br> <br> <br> 
<?php
            $error = false;
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                include '../connect_db.php';
				$makh = $_GET['id'];
                $result = mysqli_query($con, "DELETE FROM nguoidung WHERE IDND ='$makh'");
                if (!$result) {
                    $error = "Không thể xóa người dùng.";
                }
                mysqli_close($con);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa người dùng thành công</h2>
						<a href="list+search.php">Danh sách người dùng</a>
                    </div>
                <?php } ?>
    <?php } 
    include 'footer.php';
	?>