<?php
session_start();
class C_the_loai
{
    function trang_the_loai()
    {
        //Models
        include("models/m_the_loai.php");
        $m_the_loai = new M_the_loai();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_the_loai->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $doc_the_loai = $m_the_loai->doc_the_loai_theo_id($id);
        $doc_bai_hat = $m_the_loai->doc_bai_hat_theo_the_loai($id);
        include("Pager.php");
		$p=new pager();
		$limit=6;
		$count=count($doc_bai_hat);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$pt_doc_bai_hat=$p->pageList($curpage,$pages);
        //Đọc lại
        $doc_bai_hat = $m_the_loai->doc_bai_hat_theo_the_loai($id,$vt,$limit);
        $doc_album = $m_the_loai->doc_album_theo_the_loai($id);

        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_the_loai.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_the_loai",$doc_the_loai);
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("pt_doc_bai_hat",$pt_doc_bai_hat);
        $smarty->assign("doc_album",$doc_album);
        $smarty->display("layout.tpl");
    }
}
?>