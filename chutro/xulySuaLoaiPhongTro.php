<?php
				session_start();
				$MaLPT = $_REQUEST['MaLPT'];
				$link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["submit"])) {

                   			//lấy thông tin từ các form bằng phương thức POST
                   			$tlp = $_POST["tenloaiphong"];
                   			$slp = $_POST["soluongphong"];
                   			$spt = $_POST["sophongtrong"];
                   			$dt = $_POST["dientich"];
                   			$mt = $_POST["mota"];
							$g = $_POST["gia"];

                 			  if ($tlp == "" || $slp == ""|| $spt == ""|| $dt == ""|| $mt == ""|| $g == "") {
                 				   echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{

					$tk=$_SESSION["taikhoan"];
					$sql="Update loaiphongtro set TenLPT='$tlp',SoLuongPhong='$slp',SoPhongTrong='$spt',DienTich='$dt',MoTa='$mt',Gia='$g' where MaLPT='$MaLPT'";
                    $result=mysql_query($sql,$link);

                	 header("Location: DSnhatro.php");
                    if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
                 }
                 }
		?>