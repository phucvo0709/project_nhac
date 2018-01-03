<?php
require_once("database.php");
include("thu_vien.php");
class M_index extends database{
    public function hienThiAlbums(){
        $sql = "SELECT ab.*, cs.tenCaSi FROM albums ab INNER JOIN casi cs ON cs.id = ab.caSi WHERE ab.hienThi=1 ORDER BY ngayDang DESC LIMIT 0 , 4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function hienThiBaiHat(){
        $sql = "SELECT bh.*, cs.tenCaSi, cs.anhCaSi FROM baihat bh INNER JOIN casi cs ON cs.id = bh.caSi ORDER BY ngayDangBaiHat DESC LIMIT 0 , 4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function xepHangBaiHat(){
        $sql = "SELECT * FROM `baihat` ORDER BY luotNghe DESC LIMIT 0 , 10";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function slider(){
        $sql = "SELECT * FROM slider";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>