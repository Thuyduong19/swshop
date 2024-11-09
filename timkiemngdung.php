<?php
    $link = new mysqLi('localhost','root','','sweetshop') or die('Kết nối không thành công');
?>
<h2 align="center"> QUAN LY NGUOI DUNG </h2>
<table width= "85%" >
    <tr> 
        <th> ID</th> 
        <th> Họ và tên </th>
        <th> Số điện thoại </th> 
    </tr>
<?php
    $query = "SELECT * FROM nguoidung";
    $result = mysqLi_query($link, $query);
    if(mysqLi_num_rows($result)<>0)
    {
        while($r = mysqLi_fetch_assoc($result))
        {
            $id = $r['id'];
            $hoten = $r['hoten'];
            $sd = $r['sd'];

            echo "<tr>";
                echo "<td align = 'center'>$id</td>";
                echo "<td align = 'center'>$hoten</td>";
                echo "<td align = 'center'>$sd</td>";
            echo "</tr>";
        }
    }
?>
</table>
<br/> <br/> 
<div align="center">
    <form action = "timkiemngdung.php" method ="get">
    Search: <input type = "text" name = "search" />
    <input type = "submit" name = "ok" value="search"/>
    </form> 
</div>

<?php
    if (isset($_REQUEST['ok']))
    {
        $search = addslashes($_GET['search']);

        if (empty($search)) {
            echo "Yêu cầu nhập từ khóa vào ô trống ";
        }
        else
        {
            //Connect sql
            $link = new mysqLi('localhost','root','','sweetshop') or die ('Kết nối không thành công');
            
            //Tim du lieu
            $query = "SELECT * FROM nguoidung where hoten like '%$search%'";
            
            //Truyvan
            $sql = mysqLi_query($link, $query);
            
            //Demso dong truy van
            $num = mysqli_num_rows($sql);

            if ($num > 0 && $search!="")
            {
                echo "<br><br>";
                echo "$num KẾT QUẢ TÌM KIẾM <b> $search </b>";
                echo "<br><br>";
                //Lay du lieu trong table va truy van du lieu
                echo '<table border="1" cellspacing="0" cellpadding="10" width="50%">';
                            echo '<tr>';
                                echo '<th> ID </th>';
                                echo '<th> Họ và tên </th>';
                                echo '<th> Số điện thoại </th>';
                            echo '</tr>';
                while ($row = mysqLi_fetch_assoc($sql))
                {
                    echo '<tr>';
                        echo "<td>{$row['id']} </td>";
                        echo "<td>{$row['hoten']} </td>";
                        echo "<td>{$row['sd']} </td>";
                    echo'</tr>';
                }
                echo '</table>';
            }
            else {
                echo "Không tìm thấy người dùng!";
            }
        }
    }
?>

