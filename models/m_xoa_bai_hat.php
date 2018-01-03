<?php
require_once("database.php");
class M_xoa_bai_hat extends database{
    function xoa_bai_hat($id)
    {
        $sql="DELETE from baihat where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM baihat WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>