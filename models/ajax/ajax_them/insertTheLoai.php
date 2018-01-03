<?php
if($_POST['tenTheLoai']){
	$tenTheLoai = $_POST['tenTheLoai'];
	include("../../database.php");
	$db = new database();
	$sql = "SELECT tenTheLoai FROM theLoai WHERE tenTheLoai=?";
	$db->setQuery($sql);
	$param=array($tenTheLoai);
	$xuat = $db->loadRow($param);
	if($xuat){
		echo "Trùng thể loại";
	}else{
	$dbInsert = new database();
	$sql = "INSERT INTO theloai (`tenTheLoai`) VALUES ('$tenTheLoai')";
	$dbInsert->setQuery($sql);
	$dbInsert->execute();
		if($dbInsert){
			echo"
			<div class='asd'>
				<span>Thêm thể loại thành công</span>
			</div>";
		}
	}
}
?>
