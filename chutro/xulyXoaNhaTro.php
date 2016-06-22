		<?php
				$MaNT=$_REQUEST['MaNT'];
        	    $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);
					$sql="delete from nhatro where MaNT= '$MaNT'";
					$result=mysql_query($sql,$link);

					header("Location: DSNhaTro.php");
					if(!$result ) die ("Không th? th?c hi?n ???c câu l?nh SQL:".mysql_error($link));
		?>
