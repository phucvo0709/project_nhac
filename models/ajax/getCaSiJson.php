<?php
if(isset($_POST['artistId'])) {
	$artistId = $_POST['artistId'];
	include("../database.php");
	$db = new database();
	$sql = "SELECT * FROM casi WHERE id='$artistId'";
	$db->setQuery($sql);
	$resultArray = $db->loadRow();
	echo json_encode($resultArray);
}
?>