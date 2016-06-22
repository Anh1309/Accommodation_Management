		<?php
  				session_start();
        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);
				     	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
               	if (isset($_POST["submit"])) {
               		// lấy thông tin người dùng

               		$ht = $_POST["hoten"];
               		$sdt = $_POST["sodienthoai"];
               		$dc = $_POST["diachi"];

               		if ($ht == "" || $sdt ==""|| $dc =="") {
                           echo "Nhap thieu thong tin";

                    }else{
                    		$tk=$_SESSION["taikhoan"];

                           	$sql="INSERT INTO chutro(TaiKhoan,TenCT,SoDienThoai,DiaChi) VALUES ('$tk','$ht','$sdt','$dc');";
                            $result=mysql_query($sql,$link);
                          	header("Location: controler.php");
                            if(!$result ) die ("Không th? th?c hi?n ???c câu l?nh SQL:".mysql_error($link));
               			}
               	}
               ?>