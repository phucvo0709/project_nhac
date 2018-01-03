<meta charset='utf-8'>
<?php
ob_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}else {
	if (isset($_SESSION['phanQuyen']) == true) {
		// Ngược lại nếu đã đăng nhập
		$phanQuyen = $_SESSION['phanQuyen'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($phanQuyen == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo 
			"<script>
				window.location.href='index.php';
			</script>";
			exit();
		}
	}
}
?>