<?php include 'header.php';?>
<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Danh sách nhà trọ </title>
</head>
<body style="background-color: white)" >
<div class="container-fluid">
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked" >
            <li role="presentation"><a href="index.php">Trang chủ</a></li>
            <li role="presentation"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
            <li role="presentation"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
            <li role="presentation"><a href="formThemQuanHuyen.php">Thêm quận huyện</a></li>
            <li role="presentation" class="active"><a href="TaiKhoan.php">Tài khoản</a></li>
        </ul>
    </div>
    
<div class ="container-fluid">
        
        
        <div class="col-md-8" style="height: 500px  ;overflow:auto;">
            <?php
            $tk = $_SESSION['taikhoan'];

            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
            mysql_select_db("db_nhatro",$link);
            $sql = "SELECT * from account where TaiKhoan='$tk'";
            $result = mysql_query($sql,$link);
            $row = mysql_fetch_array($result);

            $sql1 = "SELECT * from chutro where TaiKhoan='$tk'";
            $result1 = mysql_query($sql1,$link);
            $row1 = mysql_fetch_array($result1);

            ?>

                <div class="row" style="background-color: #2e6da4;margin-bottom:10px; margin-right: 10px">
                        <p>Tài khoản: <?php echo $row["TaiKhoan"]; ?> </p>
                        <p>Mật khẩu: <?php echo $row["MatKhau"]; ?> </p>
                        <p>Họ Tên: <?php echo $row1["TenCT"]; ?> </p>
                        <p>So Dien Thoai: <?php echo $row1["SoDienThoai"]; ?> </p>
                        <p>Dia Chi: <?php echo $row1["DiaChi"]; ?> </p>

                        <a href="formSuaTaiKhoan.php">
                            <button type="button" class="btn btn-default" name="edit" id="edit" style="align: left; margin:5px">Sửa</button>
                        </a>
                </div>


        </div>

        <?php include 'right.php';?>

    </div>
</div>
</div>
</body>
</html>