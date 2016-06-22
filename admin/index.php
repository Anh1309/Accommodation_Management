<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Trang chủ </title>
</head>
<body >
<div class="container-fluid">
	<div class="col-md-2">
		<ul class="nav nav-pills nav-stacked" >
			<li role="presentation" class="active"><a href="index.php">Trang chủ</a></li>
			<li role="presentation"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
			<li role="presentation"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
			<li role="presentation"><a href="formAddQuanHuyen.php">Thêm quận huyện</a></li>
			<li role="presentation"><a href="XacNhan.php">Xác nhận</a></li>
			<li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
		</ul>
	</div>

	<div class="container-fluid">


		<div class="col-md-8" style="height: 500px;">
			<div class="col-md-6">
				<img src="images/hinh1.jpg" style="height: 300px;"/>

            </div>
			<div class="col-md-6">
				<img src="images/hinh2.jpg" style="height: 300px;"/>

			</div>
		</div>
<?php include 'right.php';?>
	</div>
	</div>
</body>
</html>