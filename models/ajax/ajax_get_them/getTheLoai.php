<?php
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM theloai";
	$db->setQuery($sql);
	$doc_the_loai = $db->loadAllRows();
?>
<?php
    echo "<option value='' disabled selected>Chọn Thể loại</option>";
	foreach($doc_the_loai as $dtl){
		echo "<option value='$dtl->id'>$dtl->tenTheLoai</option>";
	}
?>