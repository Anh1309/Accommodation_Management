		<?php
				session_start();
        	    $link = mysql_connect("localhost","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);

				$tk=$_SESSION["taikhoan"];

                $sql1 = "Select Level from account where TaiKhoan = '$tk';";
                $ma = mysql_query($sql1,$link);
                $row = mysql_fetch_array($ma);
				if($row[0]==1)   header("Location: admin/index.php");
				if($row[0]==2)   header("Location: chutro/index.php");


		?>