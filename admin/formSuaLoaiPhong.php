<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Sửa thông tin loại phòng trọ </title>
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
            $id = $_REQUEST['id'];
            $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
            mysql_select_db("db_nhatro",$link);
            $sql = "SELECT * from nhatro where MaLoaiPhong='$id'";
            $result = mysql_query($sql,$link);
            $row = mysql_fetch_array($result);
            ?>
            <h1> Sửa thông tin loại phòng trọ </h1>
            <form name="formSuaLoaiPhong" method="POST" action="SuaLoaiPhong.php">
                <div class="form-group">
                    <label>Tên loại phòng trọ</label>
                    <input type="text" name= "tenloaiphong" class="form-control" value= <?php echo $row['TenLoaiPhong']; ?> >

                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" name="gia" class="form-control" value= <?php echo $row['Gia']; ?>>
                </div>
                <div class="form-group">
                    <label>Số lượng phòng</label>
                    <input type="text" name="soluongphong" class="form-control" value= <?php echo $row['SoLuongPhong']; ?>>
                </div>
                <div class="form-group">
                    <label>Số phòng trống</label>
                    <input type="text" name="sophongtrong" class="form-control" value= <?php echo $row['SoPhongTrong']; ?>>
                    </div>
                    
                    <div class="form-group">
                        <label>Diện tích</label>
                        <input type="text" name="dientich" class="form-control" value= <?php echo $row['DienTich']; ?>>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="mota" value= <?php echo $row['MoTa']; ?>>
                    </div>
                   
                    
                    <button type="submit" name="submit" class="btn btn-default" style="margin-top: 10px; background: #2e6da4">Lưu</button>
                    <a href="ChiTietLoaiPhong.php">
                        <button type="submit" name="submit" class="btn btn-default" style="margin-top: 10px; background: #2e6da4">Hủy</button>
                    </a>
            </form>
        </div>

        <?php include 'right.php';?>

    </div>
</div>
</body>
</html>