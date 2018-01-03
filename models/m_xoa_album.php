<?php
require_once("database.php");
class M_xoa_album extends database{
    public function xoa_album($id)
    {
        $sql="delete from albums where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM albums WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>