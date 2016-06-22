		<?php
  				session_start();
        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

               	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
               	if (isset($_POST["btn_submit"])) {
               		// lấy thông tin người dùng
               		$tk = $_POST["taikhoan"];
               		$mk = $_POST["matkhau"];
               		echo $tk;
               		echo $mk;
               		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
               		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
               		if ($tk == "" || $mk =="") {
               			echo "tai khoan hoặc mat khau bạn không được để trống!";
               		}else{
               			$sql = "select * from account where TaiKhoan = '$tk' and MatKhau = '$mk'";
               			$result = mysql_query($sql,$link);

               			$account=mysql_fetch_array($result);

					if(!$account){
               						echo "tên đăng nhập hoặc mật khẩu không đúng !";
               			}else{
               				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
               				$_SESSION['taikhoan'] = $tk;
                               // Thực thi hành động sau khi lưu thông tin vào session
                               // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                         	  header('Location: controler.php');
               			}
               		}
               	}
               ?>