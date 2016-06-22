<?php
				session_start();
				$link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["submit"])) {

                   			//lấy thông tin từ các form bằng phương thức POST
                   			$mk = $_POST["matkhau"];
                   			$ht = $_POST["hoten"];
                   			$sdt = $_POST["sodienthoai"];
                   			$dc = $_POST["diachi"];

                 			  if ($mk == "" || $ht == ""|| $sdt == ""|| $dc == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{
					$tk=$_SESSION["taikhoan"];
					$sql="Update account set MatKhau='$mk' where TaiKhoan='$tk'";
                    $result=mysql_query($sql,$link);

					$sql1="Update admin set TenA='$ht',SoDienThoai='$sdt',DiaChi='$dc' where TaiKhoan='$tk'";
                    $result1=mysql_query($sql1,$link);

                	 header("Location: TaiKhoan.php");
                    if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>