<?php include 'header.php';?>
<?php $MaNT=$_REQUEST['MaNT']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Tìm kiếm nhà trọ </title>
</head>
<body style="background: white">
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

        <div class="col-md-8" style="height: 600px;">
            <h2> Thêm loại phòng </h2>
            <form name="formThemLoaiPhong" method="POST" action="xulyThemLoaiPhongTro.php?MaNT=<?php echo $MaNT; ?>">

                <div class="form-group">
                    <label>Tên loại phòng</label>
                    <input type="text" name= "tenloaiphong" class="form-control" placeholder="Tên loại phòng">
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
                        <label>Diện tích</label>
                        <input type="text" name="dientich" class="form-control" placeholder="Diện tích">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" name="gia" class="form-control" placeholder="Giá">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="mota" placeholder="Mô tả">
                    </div>

                    <button type="submit" name="submit" class="btn btn-default" style="background: #2e6da4; margin-top: 10px">Lưu</button>
                <a href="ChiTietNhatro.php">
                    <button type="button" name="cancel" class="btn btn-default" style="margin-top: 10px; background: #2e6da4">Hủy</button>
                </a>
            </form>
        </div>
<?php include 'right.php';?>


</div>
</div>
</body>
</html>