<?php
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM albums";
	$db->setQuery($sql);
	$doc_album = $db->loadAllRows();
?>
<?php
    echo "<option value='' disabled selected>Chọn Album</option>";
	foreach($doc_album as $dab){
		echo "<option value='$dab->id'>$dab->tenAlbum</option>";
	}
?>