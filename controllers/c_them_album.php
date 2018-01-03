<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_them_album
{
    function Trang_them_album()
    {
        //Models
        include("models/m_them_album.php");
        $m_them_album = new M_them_album();
        $them_album = $m_them_album->data_them_album();
        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_them_album.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
?>