<?php
if(isset($_POST['songId'])) {
	$songId = $_POST['songId'];
	include("../database.php");
	$db = new database();
	$sql = "UPDATE baihat SET luotNghe = luotNghe + 1 WHERE id ='$songId'";
	$db->setQuery($sql);
	$db->loadRow();
}
?>