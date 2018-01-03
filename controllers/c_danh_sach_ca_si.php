<?php
session_start();
class C_danh_sach_ca_si {
    function trang_danh_sach_ca_si(){
        //Model
        include("models/m_danh_sach_ca_si.php");
        $m_danh_sach_ca_si = new M_danh_sach_ca_si();
        $doc_ca_si = $m_danh_sach_ca_si->doc_ca_si();
        //Phân trang
        include("Pager.php");
		$p=new pager();
		$limit=9;
		$count=count($doc_ca_si);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$pt_doc_ca_si=$p->pageList($curpage,$pages);
        //Đọc lại
        $doc_ca_si = $m_danh_sach_ca_si->doc_ca_si($vt,$limit);
        //View
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_danh_sach_ca_si.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_ca_si",$doc_ca_si);
        $smarty->assign("pt_doc_ca_si",$pt_doc_ca_si);
        $smarty->display("layout.tpl");
    }
}
?>