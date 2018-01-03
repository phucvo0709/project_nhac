<?php
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM casi";
	$db->setQuery($sql);
	$getCaSi = $db->loadAllRows();
?>
<?php
    echo "<option value='' disabled selected>Chọn ca sĩ</option>";
	foreach($getCaSi as $gcs){
		echo "<option value='$gcs->id'>$gcs->tenCaSi</option>";
	}
?>