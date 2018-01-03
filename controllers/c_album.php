<?php
session_start();
class C_album{
    function trang_album(){
        //Model
        include("models/m_album.php");
        $m_album = new M_album();
        if(isset($_GET['delete'])){
            $delete=$_GET["delete"];
            print_r($delete);
            $xoa = $m_album->xoa_bai_hat_album($delete);
            if($xoa)
            {
                $id=$_GET['id'];
                echo "<script>alert('Xóa thành công');window.location.href='album.php?id=$id'</script>";	
            }
            else
            {
                echo "<script>alert('Xóa bị lỗi')</script>";	
            }
        }
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_album->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
            $hien_thi = $m_album->doc_album_theo_id($id);
            $dangBoi = $hien_thi->dangBoi;
            $thanhVien = $m_album->doc_thanh_vien($dangBoi);
            $theLoai = $hien_thi->theLoai;
            $lien_quan_the_loai = $m_album->doc_album_theo_the_loai($theLoai, $id);
            $hien_thi_ca_si = $m_album->doc_ca_si_theo_id($id);
            $doc_bai_hat = $m_album->doc_bai_hat_theo_id_album($id);
            //model ajax
            $ht = $m_album->doc_bai_hat_theo_id_album($id);
            $resultArray = array();
            foreach($ht as $d){array_push($resultArray, $d->id);}
            $jsonArray = json_encode($resultArray);
            $jsonXuat = json_decode($jsonArray);
        //View
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_album.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("hien_thi",$hien_thi);
        $smarty->assign("lien_quan_the_loai",$lien_quan_the_loai);
        $smarty->assign("thanhVien",$thanhVien);
        $smarty->assign("hien_thi_ca_si",$hien_thi_ca_si);
        $smarty->assign("doc_bai_hat",$doc_bai_hat);
        $smarty->assign("dangBoi", $dangBoi);
        $smarty->assign("jsonArray", $jsonArray);
        $smarty->assign("jsonXuat", $jsonXuat);
        $smarty->display("layout.tpl");
    }
}
?>