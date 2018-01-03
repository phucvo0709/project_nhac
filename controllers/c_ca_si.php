<?php
session_start();
class C_ca_si {
    function trang_ca_si(){
        //model
        include("models/m_ca_si.php");
        $m_ca_si = new M_ca_si();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_ca_si->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $doc_ca_si = $m_ca_si->doc_ca_si_theo_id($id);
        $doc_bai_hat = $m_ca_si->doc_bai_hat_theo_ca_si($id);
        include("Pager.php");
		$p=new pager();
		$limit=6;
		$count=count($doc_bai_hat);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$pt_doc_bai_hat=$p->pageList($curpage,$pages);
        //Đọc lại
        $doc_bai_hat = $m_ca_si->doc_bai_hat_theo_ca_si($id,$vt,$limit);

        $doc_album = $m_ca_si->doc_album_theo_ca_si($id);
        //view
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_ca_si.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_ca_si",$doc_ca_si);
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("pt_doc_bai_hat",$pt_doc_bai_hat);
        $smarty->assign("doc_album",$doc_album);
        $smarty->display("layout.tpl");
    }
}
?>