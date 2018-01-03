<?php
session_start();
include("models/phan_quyen.php");
class C_quan_ly_album{
    function trang_quan_ly_album(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    include("models/m_quan_ly_album.php");
    $m_quan_ly_album = new M_quan_ly_album();
    $doc_album = $m_quan_ly_album->doc_album();
    $doc_so_bai_hat = null;
    if(isset($_POST['btn_xem'])){
        $idAlbum = $_POST['idAlbum'];
        $doc_so_bai_hat = $m_quan_ly_album->hien_thi_so_bai_hat($idAlbum);
    }
    if(isset($_POST['btn_duyet'])){
        $duyet_album = $m_quan_ly_album->duyet_album($id);
        header("Location: quan_ly_album.php");
    }
    if(isset($_POST['btn_xoa'])){
        $duyet_album = $m_quan_ly_album->xoa_album($id);
        header("Location: quan_ly_album.php");
    }
    //views
    include("Smarty_nhac.php");
    $smarty = new Smarty_nhac();
    $view = "views/v_quan_ly_album.tpl";
    $smarty->assign("view",$view);
    $smarty->assign("doc_album",$doc_album);
    $smarty->assign("doc_so_bai_hat",$doc_so_bai_hat);
    $smarty->display("layout.tpl");
    }
}
?>