<?php
if(isset($_POST['tenBaiHat'])) {
	$tenBaiHat = $_POST['tenBaiHat'];
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM baihat WHERE tenBaiHat LIKE '%$tenBaiHat%'";
	$db->setQuery($sql);
	$xbh = $db->loadAllRows();
}
?>
<?php
if(!$xbh){
	echo"<p>Bài Hát</p>";
	echo "Không tìm thấy";
}else{
	echo"<p>Bài Hát</p>";
	foreach($xbh as $xbhat){
		echo"
		<div class='baiHat'>
			<span><a href='song.php?id=$xbhat->id'>$xbhat->tenBaiHat</a></span>
		</div>";
	}
}
?>