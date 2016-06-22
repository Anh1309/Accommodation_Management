
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Tìm kiếm nhà trọ </title>
</head>
<body>
				<div style="width: 200px">
				<form name="formDangKy" method="POST" action="xulyDangKy.php">
 				<div class="form-group">
                    <label>Tài khoản</label>
                    <input type="text" name="taikhoan" class="form-control" placeholder="Tài khoản">
                 </div>
                 <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu">
                 </div>
                  <button type="submit" name="btn_submit" class="btn btn-default">Dang ky</button>
                </form>
                </div>
</body>
</html>
