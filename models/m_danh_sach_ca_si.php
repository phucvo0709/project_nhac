<?php
require_once("database.php");
class M_danh_sach_ca_si extends database{
    function doc_ca_si($vt=-1,$limit=-1){
        $sql = "SELECT * FROM casi";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>