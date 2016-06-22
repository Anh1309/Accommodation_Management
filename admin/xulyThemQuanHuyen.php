		<?php
        	    $link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
        	    mysql_select_db("db_nhatro",$link);
			if(isset($_POST['submit'])){
				if($_POST[tenQH]==NULL){
				echo "Nh?p thi?u thông tin";
					}
				else{
					$sql="INSERT INTO quanhuyen(MaQH,TenQH) VALUE ('','".$_POST[tenQH]."')";
					$result=mysql_query($sql,$link);
					header("Location: viewThongTin.php");
					if(!$result ) die ("Không th? th?c hi?n ???c câu l?nh SQL:".mysql_error($link));
				}
			}
		?>
