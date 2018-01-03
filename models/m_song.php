<?php
require_once("database.php");
include("thu_vien.php");
class M_song extends database{
    function doc_bai_hat_theo_id($id){
        $sql = "SELECT * FROM baihat WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_thanh_vien($dangBoi){
        $sql = "SELECT bh.dangBoi, us.id, us.ten FROM baihat bh INNER JOIN  users us ON us.id = bh.dangBoi WHERE us.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($dangBoi));
    }
    function doc_bai_hat_theo_the_loai($theLoai, $id){
        $sql = "SELECT bh.*, cs.tenCaSi FROM baihat bh INNER JOIN casi cs ON cs.id=bh.caSi where bh.theLoai = ? and cs.id != ? LIMIT 0, 4";
        $this->setQuery($sql);
        return $this->loadAllRows(array($theLoai, $id));
    }
    function doc_bai_hat_theo_ca_si($caSi, $id){
        $sql = "SELECT * FROM baihat where caSi = ? and id != ? LIMIT 0, 4";
        $this->setQuery($sql);
        return $this->loadAllRows(array($caSi, $id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM baihat WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
// $m_song = new m_Song();
// $doc_bai_hat = $m_song->doc_bai_hat_theo_id(95);
// $dangBoi = $doc_bai_hat->dangBoi;
// $xuat = $m_song->doc_thanh_vien($dangBoi);
// $xuatThanhVien = $xuat->ten;
?>