<?php
require_once("database.php");
class M_sua_album extends database{
    function update_album($tenAlbum,$caSi,$theLoai,$artworkPath,$id){
        $sql ="UPDATE albums SET tenAlbum=?,caSi=?,theLoai=?,artworkPath=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($tenAlbum,$caSi,$theLoai,$artworkPath,$id));
    }
    function doc_album(){
        $sql = "SELECT * FROM albums";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_album_theo_id($id){
        $sql = "SELECT * FROM albums WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_ca_si(){
        $sql = "SELECT * FROM casi";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_ca_si_theo_id($id){
        $sql = "SELECT ab.id, ab.caSi, cs.tenCaSi FROM albums ab INNER JOIN casi cs ON cs.id=ab.caSi WHERE ab.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_the_loai(){
        $sql = "SELECT * FROM theloai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_the_loai_theo_id($id){
        $sql = "SELECT ab.id, ab.theLoai, tl.tenTheLoai FROM albums ab INNER JOIN theloai tl ON tl.id = ab.theLoai WHERE ab.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM albums WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
// $m_sua_album = new M_sua_album();
// $xuat = $m_sua_album->doc_album_theo_id(2);
// print_r($xuat->artworkPath);
?>