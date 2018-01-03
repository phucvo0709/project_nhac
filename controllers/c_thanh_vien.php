<?php
session_start();
class C_thanh_vien {
    function trang_thanh_vien(){
        //model
        include("models/m_thanh_vien.php");
        $m_thanh_vien = new M_thanh_vien();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_thanh_vien->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $doc_thanh_vien_theo_id = $m_thanh_vien->doc_thanh_vien_theo_id($id);
        $dangBoi = $doc_thanh_vien_theo_id->id;
        $doc_bai_hat = $m_thanh_vien->doc_bai_hat_theo_thanh_vien($id);
        include("Pager.php");
		$p=new pager();
		$limit=6;
		$count=count($doc_bai_hat);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$pt_doc_bai_hat=$p->pageList($curpage,$pages);
        //Đọc lại
        $doc_bai_hat = $m_thanh_vien->doc_bai_hat_theo_thanh_vien($id,$vt,$limit);
        
        $doc_album = $m_thanh_vien->doc_album_theo_thanh_vien($id);
        //view
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_thanh_vien.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_thanh_vien_theo_id",$doc_thanh_vien_theo_id);
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("pt_doc_bai_hat",$pt_doc_bai_hat);
        $smarty->assign("doc_album",$doc_album);
        $smarty->assign("dangBoi",$dangBoi);
        $smarty->display("layout.tpl");
    }
}
?>