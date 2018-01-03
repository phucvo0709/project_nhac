<?php
require_once("database.php");
include("thu_vien.php");
class M_thanh_vien extends database{
    function doc_thanh_vien_theo_id($id){
        $sql = "SELECT * FROM users WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function doc_bai_hat_theo_thanh_vien($id,$vt=-1,$limit=-1){
        $sql = "SELECT * FROM baihat where dangBoi = ?";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function doc_album_theo_thanh_vien($id){
        $sql = "SELECT ab.*, tl.tenTheLoai FROM albums ab INNER JOIN theloai tl ON tl.id = ab.theLoai where ab.dangBoi = ? and ab.hienThi = 1";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function kiem_tra_get_id($id){
        $sql = "SELECT id FROM users WHERE id=?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);
    }
}
// $m_ca_si = new M_ca_si();
// $doc = $m_ca_si->doc_bai_hat_theo_ca_si(40);
// print_r($doc);
?>