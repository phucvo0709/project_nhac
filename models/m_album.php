<?php
require_once("database.php");
include("thu_vien.php");
class M_album extends database{
    function doc_album_theo_id($id){
        $sql = "SELECT ab.*, cs.tenCaSi FROM albums ab INNER JOIN casi cs ON cs.id = ab.caSi WHERE ab.id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
    function doc_bai_hat_theo_id_album($id){
        $sql = "SELECT * FROM baihat WHERE album=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function doc_ca_si_theo_id($id){
        $sql = "SELECT * FROM casi WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
    public function xoa_bai_hat_album($delete)
    {
        $sql="delete from baihat where id=?";
        $this->setQuery($sql);
        return $this->execute(array($delete));
    }
    function doc_thanh_vien($dangBoi){
        $sql = "SELECT ab.dangBoi, us.id, us.ten FROM albums ab INNER JOIN  users us ON us.id = ab.dangBoi WHERE us.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($dangBoi));
    }
    function doc_album_theo_the_loai($theLoai, $id){
        $sql = "SELECT ab.*, cs.tenCaSi FROM albums ab INNER JOIN casi cs ON cs.id = ab.caSi where ab.theLoai = ? and ab.id != ? and ab.hienThi = 1 LIMIT 0,8";
        $this->setQuery($sql);
        return $this->loadAllRows(array($theLoai, $id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM albums WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>