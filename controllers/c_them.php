<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_them
{
    function Trang_them_san_pham()
    {
        //Models
        include("models/m_them.php");
        $m_them=new M_them();
        $them_san_pham=$m_them->data_them_san_pham();
        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_them.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("them_san_pham",$them_san_pham);
        $smarty->display("layout.tpl");
    }
}
?>