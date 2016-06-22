<?php
$link = mysql_connect("127.0.0.1","root","") or die ("khong ket noi duoc voi database");
mysql_select_db("db_nhatro",$link);
if(isset($_POST['submit'])){
    if($_POST[tieude]==NULL){
        echo "Nh?p thi?u th�ng tin";
    }
    else{
        $sql="update nhatro set TieuDe=$_POST[tieude], DienTich=$_POST[dientich],Diachi=$_POST[diachi],Gia=$_POST[gia],NguoiLienHe=$_POST[nguoilienhe],SoDienThoai=$_POST[sodienthoai],QuanHuyen=$_POST[quanhuyen],MoTa=$_POST[mota] where MaNT=id" ;
        $result=mysql_query($sql,$link);
        header("Location: DSNhatro.php");
        if(!$result ) die ("Kh�ng th? th?c hi?n ???c c�u l?nh SQL:".mysql_error($link));
    }
}
?>