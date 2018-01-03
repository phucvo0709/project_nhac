<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_them_ca_si
{
    function Trang_them_ca_si()
    {
        //Models
        include("models/m_them_ca_si.php");
        $m_them_ca_si = new M_them_ca_si();
        $xuat = $m_them_ca_si->data_them_ca_si();

        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_them_ca_si.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
?>