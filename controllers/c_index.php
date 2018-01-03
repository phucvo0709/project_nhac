<?php
session_start();
class C_index{
    function trang_index(){
    include("models/m_index.php");
    $m_index = new M_index();
    $doc_album = $m_index->hienThiAlbums();
    $doc_bai_hat = $m_index->hienThiBaiHat();
    $xep_hang = $m_index->xepHangBaiHat();
    $slider = $m_index->slider();
    $i=1;
    //views
    include("Smarty_nhac.php");
    $smarty = new Smarty_nhac();
    $view = "views/v_index.tpl";
    $smarty->assign("view",$view);
    $smarty->assign("doc_album", $doc_album);
    $smarty->assign("doc_bai_hat", $doc_bai_hat);
    $smarty->assign("xep_hang", $xep_hang);
    $smarty->assign("slider", $slider);
    $smarty->assign("i", $i);
    $smarty->display("layout.tpl");
    }
}
?>