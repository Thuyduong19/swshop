<!DOCTYPE HTML>
<HTML>
<HEAD>       
        <title>Admin: quản lý đơn hàng</title>
        <meta charset="UTF-8">

        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            }

            .timkiem{
                margin-bottom: -50px;

                input[type="text"]{
                    border-radius: 8px;
                    border-color: #DF0E62;
                    
                    
             }
            }

            input[type="submit"] {
                padding: 5px;
                margin-bottom: 3px;
                background-color: #DF0E62; /* Đặt màu chủ đạo */
                color: white;
                cursor: pointer;

                border-radius: 15px;
                border: none; /* Loại bỏ viền */
            }

            a{
                color: #DF0E62;
                text-decoration: none;
            }
            
            a:hover{
                color: rgb(86,9,226);
            }

            #themdon{
                
                table{
                    margin:auto ;
                   
                }

                table,tr,td { 
                    
                    border: none;
                }
               

                input[type="text"]{
                    border-radius: 8px ;
                    border-color: #DF0E62;
                    
            
                }
                
                input[type="submit"] {
                    padding: 5px;
                    
                    background-color: #DF0E62; /* Đặt màu chủ đạo */
                    color: white;
                    cursor: pointer;

                    border-radius: 15px;
                    border: none; /* Loại bỏ viền */
                }

                    
            }

            h2 {
            
                color: #DF0E62; /* Đổi màu chữ thành hồng */
                margin-bottom: 20px; /* Tăng khoảng cách với nội dung bên dưới */
                }
             
             
        </style>
</HEAD>
<BODY>
    <H2> <CENTER>QUẢN LÝ ĐƠN HÀNG </CENTER> </H2>
    <div>
        <div class="timkiem">
            <form align = 'center' action="timkiem.php" method="get">
                 Tìm kiếm: <input type="text" name="search" />
                <input type="submit" name="ok" value="Tìm" />
                    
            </form>
        </div>
        <div id='themdon'>
            <table width="60%" >
                
                <form action="them.php" method="post" enctype="multipart/form-data">
                    
                    <tr>
                        <td><label>IDDH:</lable>
                                <br>
                            <input type="text" name="IDDH">
                        </td>
                            
                        <td>
                            <label>Khách hàng:</label>
                                <br>
                            <input type="text" name="KHACHHANG">
                        </td>
                            
                        <td>
                            <label>SDT:</label>
                                <br>
                            <input type="text" name="SDT" >
                        </td>      
                          
                    </tr>
                            <br> <br>
                    <tr>
                        <td>
                            <label>Ngày đặt hàng:</label>
                                <br>
                            <input type="text" name="NGAYDH" >
                        </td>
                        
                        
                            
                        <td>
                            <label>Trạng thái:</label>
                                <br>
                            <input type="text" name="TRANGTHAI">
                        </td>
                            
                        <td>
                            <label>Ghi chú:</label>
                                <br>
                            <input type="text" name="GHICHU">
                        </td>
                    </tr>

                        <br>
                        <br>
                    
                    <center><input type ="submit" name="btn" value='Thêm đơn hàng' /></center>
                
                
                </form>
            </table>
        </div>
    </div>
        
        <br> <br>
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
    <table width= "100%" border="2">
        
            <tr>
                <th>ID đơn hàng</th>
                <th>Khách hàng</th>
                <th>SDT</th>
                
                <th>Ngày đặt hàng</th>
               
                <th>Trạng thái</th>
                <th>Ghi chú</th>
                <th>Thao tác</th>
                <th> Chi tiết đơn hàng</th>
            </tr>
    
    <?php
        $sql = "SELECT * FROM orderr order by IDDH desc";
        $result = $conn-> query($sql);

    

        if(mysqli_num_rows($result)<>0)
        {
            While($row = mysqli_fetch_assoc($result))
            {
                $IDDH = $row['IDDH'];
                $KHACHHANG = $row['KHACHHANG'];
                $SDT = $row['SDT'];
               
                $NGAYDH = $row['NGAYDH'];
                
                $TRANGTHAI = $row['TRANGTHAI'];
                $GHICHU = $row['GHICHU'];

                echo "<tr>";
                    echo "<td align='center'> $IDDH </td>";
                    echo "<td align='center'> $KHACHHANG </td>";
                    echo "<td align='center'> $SDT </td>";
                   
                    echo "<td align='center'> $NGAYDH </td>";
                    
                    echo "<td align='center'> $TRANGTHAI </td>";
                    echo "<td align='center'> $GHICHU </td>";
            
                    echo "<td align='center'> <a href='xoa.php?this_id= $IDDH '> Xóa </a> | <a href='capnhat.php?this_id= $IDDH'> Cập nhật </a> </td>";
                    echo "<td align='center'> <a href='ctdh.php'> Chi tiết </a> </td>";
                echo "</tr>";
            }
        }
    ?>   
    </table>


    <?php
    if(isset($_POST['btn'])){
        $IDDH = $_POST['IDDH'];
        $KHACHHANG = $_POST['KHACHHANG'];
        $SDT = $_POST['SDT'];
      
        $NGAYDH = $_POST['NGAYDH'];
  
        $TRANGTHAI = $_POST['TRANGTHAI'];
        $GHICHU = $_POST['GHICHU'];

        $sql = "INSERT INTO orderr(IDDH, KHACHHANG, SDT, NGAYDH, TRANGTHAI, GHICHU) 
                VALUES('$IDDH','$KHACHHANG','$SDT','$NGAYDH', '$TRANGTHAI', '$GHICHU')";

        mysqLi_query($conn, $sql);

        header('location: orderr.php');
    }
    ?>
<br> <br>
</BODY>
</HTML>