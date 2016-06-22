<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Tìm kiếm nhà trọ </title>
</head>
<body style="background: url(images/background.jpg)">

    		<div style="width:400px">
    			<h1> Thêm thông tin chủ trọ </h1>
            	<form name="formAdd" method="POST" action="xulyAddThongTinChuTro.php">
                  <div class="form-group">
                    <label>Họ tên</label>
                    <input type="text" name="hoten" class="form-control" placeholder="Họ Tên">
                  </div>
                  <div class="form-group">
                    <label> Số iện thoạ</label>
                    <input type="text" name="sodienthoai" class="form-control" placeholder="so dien thoai">

                  <div class="form-group">
                    <label>Dia chi</label>
                    <input type="text" name="diachi" class="form-control" placeholder="Dia chi">
                  </div>
                  <button type="submit" name="submit" class="btn btn-default">Lưu</button>
                </form>
    		</div>



   	</div>
	</div>
</body>
</html>