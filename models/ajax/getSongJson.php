<?php
if(isset($_POST['songId'])) {
	$songId = $_POST['songId'];
	include("../database.php");
	$db = new database();
	$sql = "SELECT * FROM baihat WHERE id='$songId'";
	$db->setQuery($sql);
	$resultArray = $db->loadRow();
	echo json_encode($resultArray);
}
?>