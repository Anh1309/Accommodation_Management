<?php include 'header.php';?>
<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Sửa thông tin nhà trọ </title>
</head>
<body style="background: white)">
<div class="container-fluid">
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked" >
            <li role="presentation"><a href="index.php">Trang chủ</a></li>
            <li role="presentation" class="active"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
            <li role="presentation"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
            <li role="presentation"><a href="formThemQuanHuyen.php">Thêm quận huyện</a></li>
            <li role="presentation"><a href="XacNhan.php">Xác nhận</a></li>
            <li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
        </ul>
    </div>
<div class ="container-fluid">

        <div class="col-md-8">
            <?php
            $tk = $_SESSION['taikhoan'];
            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
            mysql_select_db("db_nhatro",$link);

            $sql = "SELECT * from account where TaiKhoan='$tk'";
            $result = mysql_query($sql,$link);
            $row = mysql_fetch_array($result);

            $sql1 = "SELECT * from admin where TaiKhoan='$tk'";
            $result1 = mysql_query($sql1,$link);
            $row1 = mysql_fetch_array($result1);

            ?>
            <h1> Sửa thông tin tai khoan </h1>

             <form name="formSuaNhatro" method="POST" action="xulySuaTaiKhoan.php ?>">
                    <label>Tai khoan: </label> <?php echo $row['TaiKhoan']?>
                <div class="form-group">
                    <label>Mat khau:</label>
                    <input type="text" name="matkhau" class="form-control" value= "<?php echo $row['MatKhau']; ?>">
                </div>
                    <div class="form-group">
                        <label>Ho Ten: </label>
                        <input type="text" name="hoten" class="form-control" value= "<?php echo $row1['TenA']; ?>">
                    </div>
                    <div class="form-group">
                        <label>So Dien Thoai: </label>
                        <input type="text" name="sodienthoai" class="form-control" value= "<?php echo $row1['SoDienThoai']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Dia Chi: </label>
                        <input type="text" name="diachi" class="form-control" value= "<?php echo $row1['DiaChi']; ?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-default" style="margin-top: 10px; background: #2e6da4">Lưu</button>
                        <a href="TaiKhoan.php">
                            <button type="button" name="cancel" class="btn btn-default" style="margin-top: 10px; background: #2e6da4">Hủy</button>
                        </a>
            </form>
        </div>

<?php include 'right.php';?>

</div>
</div>
</body>
</html>