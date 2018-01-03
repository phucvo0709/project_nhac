<?php
require_once("database.php");
class M_sua_anh_dai_dien extends database{
    function doc_anh_dai_dien($id){
        $sql = "SELECT * FROM users WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function sua_anh_dai_dien($anhDaiDien,$id){
        $sql ="UPDATE users SET anhDaiDien=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($anhDaiDien,$id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM users WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}

?>