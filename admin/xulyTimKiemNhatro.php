<?php include 'header.php';?>
<?php session_start() ?>
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
                        <li role="presentation"><a href="XacNhan.php">Xác nhận</a></li>
                        <li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
        </ul>
    </div>
    <div class ="container-fluid">

    <div class="col-md-8" style="height: 500px;overflow:auto">
            <?php

                            $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
                    	    mysql_select_db("db_nhatro",$link);
                              	    if (isset($_POST["submit"])) {
                              	//lấy thông tin từ các form bằng phương thức POST
                               	$qh = $_POST["quanhuyen"];
                                $g = $_POST["gia"];

                                if($qh=="0"){
                                    if($g=="0")  $sql="select * from nhatro;";
                                    else {
                                    	if($g=="1")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 500000 and 1000000) ";
                                        if($g=="2")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 1000000 and 1500000)";
                                        if($g=="3")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 1500000 and 2000000) ";
                                        if($g=="4")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 2000000 and 2500000)";
                                        if($g=="5")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia > 2500000)";
                                        }
                                }

                                else{
                                    if($g=="0") $sql = "select * from nhatro where MaQH = (select MaQH from quanhuyen where TenQH='$qh')";
                                    else{
                                        if($g=="1")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 500000 and 1000000) and MaQH in (select MaQH from quanhuyen where TenQH='$qh')";
                                        if($g=="2")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 100000 and 150000))and MaQH in (select MaQH from quanhuyen where TenQH='$qh')";
                                        if($g=="3")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 1500000 and 2000000)and MaQH in (select MaQH from quanhuyen where TenQH='$qh')";
                                        if($g=="4")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia between 2000000 and 2500000)and MaQH in (select MaQH from quanhuyen where TenQH='$qh')";
                                        if($g=="5")$sql="Select * from nhatro where MaNT in (select MaNT from loaiphongtro where Gia > 2500000) and MaQH in (select MaQH from quanhuyen where TenQH='$qh')";

                                        }
                                }
                            }
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
</body>
</html>