		<?php
				session_start();
        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["btn_submit"])) {
                   			//lấy thông tin từ các form bằng phương thức POST
                   			$tk = $_POST["taikhoan"];
                   			$mk = $_POST["matkhau"];
                   			echo "toi day";
                  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                 			  if ($tk == "" || $mk == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{
                 			//thực hiện việc lưu trữ dữ liệu vào db
                     		$sql = "INSERT INTO account(TaiKhoan,MatKhau,Level) VALUES ('$tk' ,'$mk',2)";
                 				    // thực thi câu $sql với biến conn lấy từ file connection.php
                    		$result=mysql_query($sql,$link);

                    		$sql2 = "Select MaA from account where TaiKhoan = '$tk'";
                    		$ma=mysql_query($sql2,$link);

							$_SESSION['taikhoan'] = $tk;
                    		header("Location: formAddThongTinChuTro.php");
                            echo "chúc mừng bạn đã đăng ký thành công";
                			if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>