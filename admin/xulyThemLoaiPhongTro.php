<?php
				session_start();
				$MaNT=$_REQUEST['MaNT'];

        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["submit"])) {

                   			//lấy thông tin từ các form bằng phương thức POST
                   			$tlp = $_POST["tenloaiphong"];
                   			$slp = $_POST["soluongphong"];
                   			$spt = $_POST["sophongtrong"];
                   			$dt = $_POST["dientich"];
                   			$g = $_POST["gia"];
                   			$mt = $_POST["mota"];
                  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                 			  if ($tlp == "" || $slp == ""|| $spt == ""|| $dt == ""|| $g == ""|| $mt == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{
					echo "toi dayyyyyyy";
					$tk=$_SESSION["taikhoan"];
                  	$sql2 = "Select MaCT from chutro where TaiKhoan='$tk'";
		           	$result2=mysql_query($sql2,$link);
		           	$MaCT = mysql_fetch_array($result2);
						$sql="INSERT INTO loaiphongtro(TenLPT,SoLuongPhong,SoPhongTrong,DienTich,Gia,MoTa,MaNT) VALUES ('$tlp' ,'$slp','$spt' ,'$dt','$g' ,'$mt','$MaNT')";
                    $result=mysql_query($sql,$link);

					header("Location: DSNhaTro.php");
                    if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>