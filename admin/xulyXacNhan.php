<?php
				session_start();
				$MaNT = $_REQUEST['MaNT'];
				$link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

        	    if (isset($_POST["submit"])) {
        	   		echo "toidfafaaf";
        	   		$sql="Update nhatro set XacNhan='1' where MaNT='$MaNT'";
                    $result=mysql_query($sql,$link);
					 if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));

                }
        	    if (isset($_POST["khongxacnhan"])) {
					$sql1="delete from nhatro where MaNT='$MaNT'";
                    $result1=mysql_query($sql1,$link);
                     if(!$result1 ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));

                }
              	 header("Location: xacnhan.php");

		?>