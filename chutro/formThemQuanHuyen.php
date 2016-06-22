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
<body style="background: white">
<div class="container-fluid">
	<div class="col-md-2">
		<ul class="nav nav-pills nav-stacked" >
			<li role="presentation"><a href="index.php">Trang chủ</a></li>
			<li role="presentation"><a href="DSNhatro.php">Danh sách nhà trọ</a></li>
			<li role="presentation"><a href="formThemNhatro.php">Thêm nhà trọ</a></li>
			<li role="presentation" class="active"><a href="formThemQuanHuyen.php">Thêm quận huyện</a></li>
			<li role="presentation"><a href="TaiKhoan.php">Tài khoản</a></li>
		</ul>
	</div>
    <div class ="container-fluid">




		<div class="col-md-8" style="height: 500px;">
		    <h1> Thêm quận huyện </h1>

	    	<form name="formAdd" method="POST" action="xulyThemQuanHuyen.php">
                  <div class="form-group">
                    <label>Tên quận huyện</label>
                    <input type="text" name= "tenQH" class="form-control" placeholder="Tên Quận Huyện">
                  </div>
                  <button type="submit" name="submit" class="btn btn-default" style="background: #2e6da4">Lưu</button>
				<a href="index.php">
				  <button type="button" name="cancel" class="btn btn-default" style="background: #2e6da4">Hủy</button></a>
                </form>
		</div>
		<?php include 'right.php';?>
	</div>
	</div>
</body>
</html>