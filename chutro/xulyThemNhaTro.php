<?php
				session_start();
        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["submit"])) {

                   			//lấy thông tin từ các form bằng phương thức POST
                   			$td = $_POST["tieude"];
                   			$slp = $_POST["soluongphong"];
                   			$spt = $_POST["sophongtrong"];
                   			$dc = $_POST["diachi"];
                   			$qh = $_POST["quanhuyen"];
                   			$mt = $_POST["mota"];
                  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                 			  if ($td == "" || $slp == ""|| $spt == ""|| $dc == ""|| $qh == ""|| $mt == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{

                	$sql1="Select * from quanhuyen where TenQH='$qh'";
                	$ma = mysql_query($sql1,$link);
                	$MaQH = mysql_fetch_array($ma);

					$tk=$_SESSION["taikhoan"];
                  	$sql2 = "Select MaCT from chutro where TaiKhoan='$tk'";
		           	$result2=mysql_query($sql2,$link);
		           	$MaCT = mysql_fetch_array($result2);
						$sql="INSERT INTO nhatro(TieuDe,SoLuongPhong,SoPhongTrong,DiaChi,MoTa,MaQH,MaCT) VALUES ('$td' ,'$slp','$spt' ,'$dc','$mt' ,'$MaQH[0]','$MaCT[0]')";
                    $result=mysql_query($sql,$link);

                	 header("Location: DSNhatro.php");
                    if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>