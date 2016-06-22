<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Thong tin nha tro </title>
</head>
<body style="background: white" >
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

        <div class="col-md-8" style="height: 500px;overflow:auto">
          <?php
            $MaNT = $_REQUEST['MaNT'];

            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
            mysql_select_db("db_nhatro",$link);
            $sql = "SELECT * from nhatro where MaNT='$MaNT'";
            $result = mysql_query($sql,$link);

            while($row = mysql_fetch_array($result)){

                                       $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
                                        mysql_select_db("db_nhatro",$link);
                                        $sql2= "Select TenQH from quanhuyen where MaQH='$row[7]';";
                                         $result2 = mysql_query($sql2,$link);
                                         $TenQH=mysql_fetch_array($result2);
                                         ?>

                <div class="row" style="margin-right: 10px">
                    <div class="col-md-2" style="margin-top: 10px">
                        <img src="images/house.jpg" style="height:155px; ">
                    </div>
                    <div class= "post-infor col-md-9">
                        <h1><?php echo $row["TieuDe"]; ?></h1>
                        <p>
                            Mô tả: <?php echo $row["MoTa"]; ?>
                        </p>
                        <p>

                            Khu vực:  <strong><?php echo $TenQH[0]; ?> </strong>
                        </p>
                        <p>
                            Số lượng phòng: <strong><?php echo $row["SoLuongPhong"];?></strong>
                        </p>
                        <p>
                            Số phòng trống: <strong><?php echo $row["SoPhongTrong"];?></strong>
                        </p>
                        <hr>
                        <p>
                            Các loại phòng:
                              <?php $sql = "SELECT * from loaiphongtro where MaNT='$MaNT'";
                                        $result = mysql_query($sql,$link);
                                        while($rows = mysql_fetch_array($result)){

                                        ?>

                                <a href="ChiTietLoaiPhong.php?MaLPT=<?php echo $rows[0]; ?>">
                                    <h1><?php echo $rows["TenLPT"]; ?></h1>
                                </a>
                                <p>
                                    Mô tả: <?php echo $rows["MoTa"]; ?>
                                </p>
                                <p>
                                    Diện tích:  <strong><?php echo $rows["DienTich"]; ?> </strong>
                                </p>
                                <p>
                                    Số lượng phòng: <strong><?php echo $rows["SoLuongPhong"];?></strong>
                                </p>
                                <p>
                                    Số phòng trống: <strong><?php echo $rows["SoPhongTrong"];?></strong>
                                </p>
                                <p>
                                    Giá: <strong><?php echo $rows["Gia"];?></strong>
                                </p>

                        </p>
                        <hr>
                        <?php } ?>

                        <p>
                            <?php
                            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
                             mysql_select_db("db_nhatro",$link);
                             $sql2= "Select TenCT,SoDienThoai,DiaChi So from chutro where MaCT='$row[6]';";
                             $result2 = mysql_query($sql2,$link);
                             $ChuTro = mysql_fetch_array($result2);

                             ?>

                            Tên chủ trọ: <strong><?php echo $ChuTro[0];?></strong>
                        </p>
                        <p>
                            Số điện thoại liên hệ: <strong><?php echo $ChuTro[1];?></strong>
                        </p>

                        <p>
                            Địa chỉ: <strong><?php echo $ChuTro[2];?></strong>
                        </p>
                        <a href="formThemLoaiPhong.php?MaNT=<?php echo $MaNT;?>">
                            <button type="button" class="btn btn-default" name="themloaiphong" style="align: left; margin: 5px; background: #2e6da4">Thêm loại phòng</button>
                        </a>
                        <a href="formSuaNhatro.php?MaNT=<?php echo $MaNT; ?>">
                            <button type="button" class="btn btn-default" name="edit" id="edit" style="align: left; margin:5px; background: #2e6da4">Sửa</button>
                        </a>
                        <a href="xulyXoaNhaTro.php?MaNT=<?php echo $MaNT; ?>">
                            <button type="button" class="btn btn-default" name="delete" style="align: left; margin:5px; background: #2e6da4">Xóa</button>
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
</body>
</html>