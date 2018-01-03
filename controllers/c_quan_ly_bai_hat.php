<?php
session_start();
include("models/phan_quyen.php");
class C_quan_ly_bai_hat{
    function trang_quan_ly_bai_hat(){
        //model
        include("models/m_quan_ly_bai_hat.php");
        $m_quan_ly_bai_hat = new M_quan_ly_bai_hat();
        $doc_bai_hat = $m_quan_ly_bai_hat->doc_bai_hat();
        //Phân trang
        include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($doc_bai_hat);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$pt_doc_bai_hat=$p->pageList($curpage,$pages);
        //Đọc lại
        $doc_bai_hat = $m_quan_ly_bai_hat->doc_bai_hat($vt,$limit);
        //view
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_quan_ly_bai_hat.tpl";
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("pt_doc_bai_hat",$pt_doc_bai_hat);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
?>