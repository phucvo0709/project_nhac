<?php
if(isset($_POST['albumId'])) {
	$albumId = $_POST['albumId'];
	include("../database.php");
	$db = new database();
	$sql = "SELECT * FROM albums WHERE id='$albumId'";
	$db->setQuery($sql);
	$resultArray = $db->loadRow();
	echo json_encode($resultArray);
}
?>