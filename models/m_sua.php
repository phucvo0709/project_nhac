<?php
require_once("database.php");
class M_sua extends database{
    function update_bai_hat($tenBaiHat,$caSi,$album,$theLoai,$id){
        $sql ="UPDATE baihat SET tenBaiHat=?,caSi=?, album=?, theLoai=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($tenBaiHat,$caSi,$album,$theLoai,$id));
    }
    function doc_ca_si(){
        $sql = "SELECT * FROM casi";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_ca_si_theo_id($id){
        $sql = "SELECT bh.id, bh.caSi, cs.tenCaSi FROM baihat bh INNER JOIN casi cs ON cs.id = bh.caSi where bh.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_the_loai(){
        $sql = "SELECT * FROM theloai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_the_loai_theo_id($id){
        $sql = "SELECT bh.id, bh.theLoai, tl.tenTheLoai FROM baihat bh INNER JOIN theloai tl ON tl.id = bh.theLoai WHERE bh.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    function doc_album(){
        $sql = "SELECT * FROM albums";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_album_theo_id($id){
        $sql = "SELECT bh.id, bh.album, ab.tenAlbum FROM baihat bh INNER JOIN albums ab ON ab.id = bh.album where bh.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    function doc_bai_hat_theo_id($id){
        $sql = "SELECT * FROM baihat WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM baihat WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }

}
?>