<?php
if(isset($_POST["tenAlbum"]))
{
    $tenAlbum = $_POST["tenAlbum"];
    include("../../m_them_album.php");
    $m_them_album = new M_them_album();
    $xuat = $m_them_album->kiem_tra_ten_album($tenAlbum);
    if($xuat){
    die("Trùng tên album");
    }
}
?>