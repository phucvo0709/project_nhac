<?php
session_start();
class C_dang_ky {
    function trang_dang_ky(){
        //model
        include("models/m_dang_ky.php");
        $m_dang_ky = new M_dang_ky();
        $m_dang_ky->dangKy();
        if(isset($_SESSION['ten'])){
            header("Location: index.php");
        }
        //view
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_dang_ky.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
?>
