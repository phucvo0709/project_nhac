<?php
require_once("database.php");
class M_doi_mat_khau extends database{
    function doi_mat_khau($matKhauMoi,$id,$matKhauCu){
        $sql = "UPDATE users SET matKhau = ? WHERE id= ? and matKhau = ?";
        $this->setQuery($sql);
        return $this->execute(array($matKhauMoi,$id,$matKhauCu));
    }
    function kiem_tra_mat_khau_cu($id, $matKhauCu){
        $sql ="SELECT matKhau FROM users WHERE id=? and matKhau=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id,$matKhauCu));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM users WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>