<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Tìm kiếm nhà trọ </title>
</head>
<body style="background-color: white">
<div class="container-fluid">
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked" >
            <li role="presentation"><a href="index.php">Trang chủ</a></li>
            <li role="presentation"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
            <li role="presentation" class="active"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
            <li role="presentation"><a href="formThemQuanHuyen.php">Thêm quận huyện</a></li>
            <li role="presentation"><a href="XacNhan.php">Xác nhận</a></li>
            <li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
        </ul>
    </div>
<div class ="container-fluid">

        <div class="col-md-8">
            <h2> THÊM NHÀ TRỌ </h2>
            <form name="formThemNhatro" method="POST" action="xulyThemNhaTro.php">
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name= "tieude" class="form-control" placeholder="Tieu de">
                </div>
                <div class="form-group">
                    <label>Số lượng phòng</label>
                    <input type="text" name="soluongphong" class="form-control" placeholder="Số lượng phòng">
                </div>
                    <div class="form-group">
                        <label>Số phòng trống</label>
                        <input type="text" name="sophongtrong" class="form-control" placeholder="Số phòng trống">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
                    </div>

                    <div class="form-group">
                        <label>Quận huyện</label>

                        <?php
                        $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
                        mysql_select_db("db_nhatro",$link);
                        $sql = "SELECT * from quanhuyen ";
                        $result = mysql_query($sql,$link);

                        echo '<select class="form-control" name="quanhuyen">';
                        echo '<option>-----QuanHuyen-----</option>';
                        while($row = mysql_fetch_array($result)){
                            echo 	' <option>'.$row["TenQH"].'</option>';
                        }
                        echo '</select>';

                        ?>
                    </div>
                    <div>
                        <label>Mô tả</label>
                        <input type="text" name="mota" class="form-control" placeholder="Mo Ta">
                    </div>
                    <button type="submit" name="submit" class="btn btn-default" style="margin-top: 10px; background: #2b669a">Lưu</button>
                <a href="DSNhatro.php">
                    <button type="button" name="cancel" class="btn btn-default" style="background: #2e6da4; margin-top: 10px">Hủy</button>
                </a>
            </form>
        </div>
<?php include 'right.php';?>

</div>
</div>
</body>
</html>