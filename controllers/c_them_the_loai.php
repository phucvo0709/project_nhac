<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_them_the_loai
{
    function Trang_them_the_loai()
    {
        //Models

        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_them_the_loai.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
?>