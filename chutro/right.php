<div class="container-fluid" style="background-color: lavender">
<div class="col-md-2 bwg plr" style="height: 230px; -moz-border-radius: 10px; -webkit-border-radius: 10px; background-color: #2e6da4">
    <h2 style="text-align: center">Tìm kiếm</h2>

     <form name="formTimKiem" method="POST" action="xulyTimKiemNhaTro.php">
        <?php
        $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
        mysql_select_db("db_nhatro",$link);
        $sql = "SELECT * from quanhuyen ";
        $result = mysql_query($sql,$link);

        echo '<select class="form-control" name="quanhuyen">';
        echo '<option value = "0">-----Quận huyện-----</option>';
        while($row = mysql_fetch_array($result)){
            echo 	' <option>'.$row["TenQH"].'</option>';
        }
        echo '</select>';

        ?>
        <select class="form-control" style="margin-top: 10px" name="gia">
            <option value = "0" selected = "selected">-----Giá Phòng Trọ------</option>
            <option value = "1"> 500.000-1.000.000</option>
            <option value = "2"> 1.000.000-1.500.000</option>
            <option value = "3"> 1.500.000-2.000.000</option>
            <option value = "4" > 2.000.000-2.500.000</option>
            <option value = "5"> > 2.500.000  </option>
        </select>

        <button type="submit" name="submit" class="btn btn-default" style="width: 100px;margin-top: 10px; margin-left: 40px;">Tìm kiếm</button>
     </form>
</div>