<?php
if(isset($_POST['tenAlbum'])) {
	$tenAlbum = $_POST['tenAlbum'];
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM albums WHERE tenAlbum LIKE '%$tenAlbum%'";
	$db->setQuery($sql);
	$xuat = $db->loadAllRows();
}
?>
<?php
if(!$xuat){
	echo"<p>Album</p>";
	echo "Không tìm thấy";
}else{
	echo"<p>Album</p>";
	foreach($xuat as $x){
		echo"
		<div class='album'>
			<span><a href='album.php?id=$x->id'>$x->tenAlbum</a></span>
		</div>";
	}
}
?>