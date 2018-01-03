<?php
if(isset($_POST['tenCaSi'])) {
	$tenCaSi = $_POST['tenCaSi'];
	include("../../database.php");
	$db = new database();
	$sql = "SELECT * FROM casi WHERE tenCaSi LIKE '%$tenCaSi%'";
	$db->setQuery($sql);
	$xcs = $db->loadAllRows();
}
?>
<?php
if(!$xcs){
	echo"<p>Ca Sĩ</p>";
	echo "Không tìm thấy";
}else{
	echo"<p>Ca Sĩ</p>";
	foreach($xcs as $xcsi){
		echo"
		<div class='caSi'>
			<span><a href='casi.php?id=$xcsi->id'>$xcsi->tenCaSi</a></span>
		</div>";
	}
}
?>