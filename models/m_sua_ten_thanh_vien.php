<?php
require_once("database.php");
class M_sua_ten_thanh_vien extends database{
    function doc_ten($id){
        $sql = "SELECT * FROM users WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function sua_ten_thanh_vien($ten,$id){
        $sql ="UPDATE users SET ten=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($ten,$id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM users WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>