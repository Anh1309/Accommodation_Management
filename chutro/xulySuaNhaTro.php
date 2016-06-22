<?php
				session_start();
				$MaNT = $_REQUEST['Ma'];
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

                 			  if ($td == "" || $slp == ""|| $spt == ""|| $dc == ""|| $qh == ""|| $mt == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{

                	$sql1="Select * from quanhuyen where TenQH='$qh'";
                	$ma = mysql_query($sql1,$link);
                	$MaQH = mysql_fetch_array($ma);

					$tk=$_SESSION["taikhoan"];
					$sql="Update nhatro set TieuDe='$td',SoLuongPhong='$slp',SoPhongTrong='$spt',DiaChi='$dc',MoTa='$mt',MaQH='$MaQH[0]' where MaNT='$MaNT'";
                    $result=mysql_query($sql,$link);

                	 header("Location: DSNhatro.php");
                    if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>