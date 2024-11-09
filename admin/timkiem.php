<?php

	$link = new mysqli('localhost','root','','sweetshop') or die ('Ket noi that bai');
?>


<?php
        // Click submit để tìm đơn hàng
        if (isset($_REQUEST['ok'])) 
        {
            // Dùng hàm addslashes de chong sql injection
            $search = addslashes($_GET['search']);
 
            // Neu $search rong thi bao loi, tuc la nguoi dung chua nhap lieu ma da nhan submit.
            if (empty($search)) {
                echo "Yêu cầu nhập dữ liệu vào ô trống";
            } 
            else
            {
                // Ket noi sql
                $link = new mysqli('localhost','root','','sweetshop') or die ('Ket noi that bai');
				
				// Dung cau lenh like trong sql va su dung toan tu % cua php de tim du lieu 
                $query = "SELECT * from orderr where TRANGTHAI like '%$search%' or NGAYDH like '%$search%' ";
 
                // Thuc hien cau truy van
                $sql = mysqli_query($link, $query);
 
                // Dem so dong truy van trong sql.
                $num = mysqli_num_rows($sql);
 
                // Neu co ket qua thi hien thi, nguoc lai thong bao khong tim thay ket qua
                if ($num > 0 && $search != "") 
                {
                    // Dung $num de dem do dong truy van
					echo "<br> <br> <br>";
                    echo "$num KẾT QUẢ TRẢ VỀ VỚI TỪ KHÓA <b>$search</b>";
					echo "<br> <br> <br>";
 
                    // Dung vong lap while & mysqli_fetch_assoc de lat toan bo du lieu trong table va truy van du lieu dang mang array.
                    echo '<table border="1" cellspacing="0" cellpadding="10" width="50%">';
					echo '<tr>';

                            echo '<th>ID đơn hàng</th>';
                            echo '<th>Khách hàng</th>';
                            echo '<th>SDT</th>';
                       
                            echo '<th>Ngày đặt hàng</th>';
                            
                            echo '<th>Trạng thái</th>';
                            echo '<th>Ghi chú</th>';
                
					echo '</tr>';
						
                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['IDDH']}</td>";
                            echo "<td>{$row['KHACHHANG']}</td>";
                            echo "<td>{$row['SDT']}</td>";
                            
                            echo "<td>{$row['NGAYDH']}</td>";
							
                            echo "<td>{$row['TRANGTHAI']}</td>";
                            echo "<td>{$row['GHICHU']}</td>";

                            
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Không tìm thấy kết quả!";
                }
            }
        }
	/*	
	header ('location:order.php');
	}*/
?>