<?php
require_once("database.php");
include("thu_vien.php");
class M_quan_ly_album extends database{
    function doc_album(){
        $sql = "SELECT * FROM albums WHERE hienThi=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function duyet_album($id){
        $sql = "UPDATE albums set hienThi = 1 WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    function xoa_album($id)
    {
        $sql="delete from albums where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    function hien_thi_so_bai_hat($idAlbum){
        $sql = "select bh.id, bh.album, bh.tenBaiHat, bh.caSi, cs.tenCaSi from albums ab INNER JOIN baihat bh on bh.album = ab.id INNER JOIN casi cs ON cs.id = bh.caSi where ab.id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($idAlbum));
    }
}
// $m_quan_ly_album = new M_quan_ly_album();
// $xuatr = $m_quan_ly_album->hien_thi_so_bai_hat(12);
// print_r($xuatr);
// $array = array();
// foreach ($xuatr as $x) {
//     $doc = $x->album;
//     $array[] = $doc;
// }
// $dem_array = array_count_values($array);
// print_r($dem_array);
?>