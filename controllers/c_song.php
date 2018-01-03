<?php
session_start();
class C_song{
    function trang_song(){
        //Model
        include("models/m_song.php");
        $m_song = new M_song();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_song->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
            $doc_bai_hat = $m_song->doc_bai_hat_theo_id($id);
            $dangBoi = $doc_bai_hat->dangBoi;
            $thanhVien = $m_song->doc_thanh_vien($dangBoi);
            $caSi = $doc_bai_hat->caSi;
            $lien_quan_ca_si = $m_song->doc_bai_hat_theo_ca_si($caSi, $id);
            $theLoai = $doc_bai_hat->theLoai;
            $lien_quan_the_loai = $m_song->doc_bai_hat_theo_the_loai($theLoai, $id);
        
        //View
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_song.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("lien_quan_ca_si",$lien_quan_ca_si);
        $smarty->assign("lien_quan_the_loai",$lien_quan_the_loai);
        $smarty->assign("thanhVien",$thanhVien);
        $smarty->assign("dangBoi",$dangBoi);
        $smarty->display("layout.tpl");
    }
}
?>