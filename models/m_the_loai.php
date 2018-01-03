<?php
require_once("database.php");
include("thu_vien.php");
class M_the_loai extends database{
    function doc_the_loai_theo_id($id){
        $sql = "SELECT * FROM theloai WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_bai_hat_theo_the_loai($id,$vt=-1,$limit=-1){
        $sql = "SELECT * FROM baihat where theLoai = ?";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function doc_album_theo_the_loai($id){
        $sql = "SELECT ab.*, tl.tenTheLoai, cs.tenCaSi FROM albums ab ";
        $sql .="INNER JOIN theloai tl ON tl.id = ab.theLoai ";
        $sql .="INNER JOIN casi cs ON cs.id = ab.caSi ";
        $sql .="where ab.theLoai = ? and ab.hienThi = 1";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM theLoai WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
?>