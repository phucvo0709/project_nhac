<?php
require_once("database.php");
class M_quan_ly_bai_hat extends database{
    function doc_bai_hat($vt=-1,$limit=-1){
        $sql = "SELECT bh.*, cs.tenCaSi, tl.tenTheLoai, us.ten FROM baihat bh ";
        $sql .= "INNER JOIN casi cs ON cs.id = bh.caSi ";
        $sql .= "INNER JOIN theloai tl ON tl.id = bh.theLoai ";
        $sql .= "INNER JOIN users us ON us.id = bh.dangBoi ";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>