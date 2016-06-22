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
            <li role="presentation" class="active"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
            <li role="presentation"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
            <li role="presentation"><a href="formThemQuanHuyen.php">Thêm quận huyện</a></li>
            <li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
        </ul>
    </div>
    
<div class ="container-fluid">
        
        
        <div class="col-md-8" style="height: 500px  ;overflow:auto;">
            <?php
            $tk = $_SESSION['taikhoan'];

            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
            mysql_select_db("db_nhatro",$link);
            $sql = "SELECT * from nhatro where MaCT in (select MaCT from chutro where TaiKhoan='$tk'); ";

            $result = mysql_query($sql,$link);
            while($row = mysql_fetch_array($result)){

            ?>

                <div class="row" style="background-color: #2e6da4;margin-bottom:10px; margin-right: 10px">
                    <div class="col-md-2">
                        <img src="images/house.jpg" style="height:155px; margin-top:10px; margin-bottom: 10px">
                    </div>
                    <div class= "post-infor col-md-9	">
                        <a href="ChiTietNhatro.php?MaNT=<?php echo $row["MaNT"]; ?>">
                            <h1><?php echo $row['TieuDe'];?></h1>
                        </a>
                        <p><?php echo $row["MoTa"]; ?> </p>

                        <a href="formSuaNhatro.php?MaNT=<?php echo $row['MaNT']; ?>">
                            <button type="button" class="btn btn-default" name="edit" id="edit" style="align: left; margin:5px">Sửa</button>
                        </a>
                        <a href="xulyXoaNhaTro.php?MaNT=<?php echo $row['MaNT']; ?>">
                            <button type="button" class="btn btn-default" name="delete" style="align: left; margin:5px">Xóa</button>
                        </a>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>

        <?php include 'right.php';?>

    </div>
</div>
</div>
</body>
</html>