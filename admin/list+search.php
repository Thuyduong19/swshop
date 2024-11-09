<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>(Admin): Quản lý người dùng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php
        session_start();
        include '../connect_db.php';
        include '../function.php';
        if (!empty($_SESSION['current_user'])) { //Kiểm tra xem đã đăng nhập chưa?
            ?>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <a href="list+search.php">Tất cả người dùng</a>
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading-nd">QUẢN LÝ NGƯỜI DÙNG</div>
                    
                    </div>
                </div>
            </div>        
            <?php } ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý người dùng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input[type="text"] {
            width: 70%; /* Điều chỉnh chiều rộng của input */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #DF0E62; /* Đặt màu chủ đạo */
            color: white;
            cursor: pointer;
            width: 200px;
            height: 40px;
            border-radius: 15px;
            border: none; /* Loại bỏ viền */
        }
	</style>
</head>

<div class="container_nd">
		<?php
			$link = new mysqli('localhost','root','','sweetshop') or die ('Ket noi that bai');
		?>
	    <h1> DANH SÁCH NGƯỜI DÙNG </h1>
		<table align = "center">
		<tr>
			<th class = "th1"> IDND </th>
			<th class = "th2"> Tên người dùng </th>
			<th class = "th3"> Email </th>
			<th class = "th4"> Mật khẩu </th>
			<th class = "th5"> Xóa </th>
		</tr>

<?php			
	$query = "SELECT * FROM nguoidung";
	$result = mysqli_query($link, $query);
	
	
	if(mysqli_num_rows($result)<>0) 
	{
		
		  while($r = mysqli_fetch_assoc($result))
		  {
		  $makh = $r['IDND'];
		  $tenkh = $r['TENND'];
		  $email = $r['EMAIL'];
		  $pass = $r['PASS'];	
		  echo "<tr>";
			echo "<td align='center'>$makh</td>";
			echo "<td align='center'>$tenkh</td>";
			echo "<td align='center'>$email</td>";
			echo "<td align='center'>$pass</td>";	
			echo "<td align='center'> <a href='delete.php?id=$makh'>Xóa</td>";
		  echo "</tr>";
		  }
	}
?>
</TABLE>
<br/> <br/> 
<div align="center">
    <form action = "list+search.php" method ="get">
    Search: <input type = "text" name = "search" /> <br> <br> 
    <input type = "submit" name = "OK" value="Tìm kiếm"/>
    </form> 
</div>

<?php
    if (isset($_REQUEST['OK']))
    {
        $search = addslashes($_GET['search']);

        if (empty($search)) {
            echo "<br><br><center> Yêu cầu nhập từ khóa vào ô trống</center>";
        }
        else
        {
            //Connect sql
            $link = new mysqLi('localhost','root','','sweetshop') or die ('Kết nối không thành công');
            
            //Tim du lieu
            $query = "SELECT * FROM NGUOIDUNG where TENND like '%$search%'";
            
            //Truyvan
            $sql = mysqLi_query($link, $query);
            
            //Demso dong truy van
            $num = mysqli_num_rows($sql);

            if ($num > 0 && $search!="")
            {
                echo "<br><br>";
                echo "<p><center>$num KẾT QUẢ TÌM KIẾM <b> $search </b></center></p>";
                echo "<br><br>";
                //Lay du lieu trong table va truy van du lieu
                echo '<table align= "center" border="1" cellspacing="0" cellpadding="10" width="50%">';
                            echo '<tr>';
                                echo '<th> IDND </th>';
                                echo '<th> Tên Người dùng </th>';
                                echo '<th> Email </th>';
                            echo '</tr>';
                while ($row = mysqLi_fetch_assoc($sql))
                {
                    echo '<tr>';
                        echo "<td align='center'>{$row['IDND']} </td>";
                        echo "<td align='center'>{$row['TENND']} </td>";
                        echo "<td align='center'>{$row['EMAIL']} </td>";
                    echo'</tr>';
                }
                echo '</table>';
            }
            else {
                echo "<br><br><center> Không tìm thấy người dùng!</center>";
            }
        }
    }
    include 'footer.php';
?>
</div> 


