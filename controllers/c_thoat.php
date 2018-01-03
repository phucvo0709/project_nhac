<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_thoat{
    function trang_thoat(){
    //models
    include("models/m_thoat.php");
    $c_thoat = new M_thoat();
    $c_thoat->thoat_dang_nhap();
    }
}
?>