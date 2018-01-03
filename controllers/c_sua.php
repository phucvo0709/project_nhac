<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_sua{
    function trang_sua(){
    include("models/m_sua.php");
    $m_sua = new M_sua();
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $kiem_tra_get_id = $m_sua->kiem_tra_get_id($id);
        if(!$kiem_tra_get_id){
            Header("Location: index.php");
        }
    }else{
        Header("Location: index.php");
    }
    $doc_ca_si = $m_sua->doc_ca_si();
    $doc_ca_si_id = $m_sua->doc_ca_si_theo_id($id);

    $doc_the_loai = $m_sua->doc_the_loai();
    $doc_the_loai_theo_id = $m_sua->doc_the_loai_theo_id($id);

    $doc_album = $m_sua->doc_album();
    $doc_album_theo_id = $m_sua->doc_album_theo_id($id);

    $doc_bai_hat_theo_id = $m_sua->doc_bai_hat_theo_id($id);
    $dangBoi = $doc_bai_hat_theo_id->dangBoi;
    if (isset($_SESSION['dangBoi'])) {
        if($_SESSION['dangBoi'] != $dangBoi){
            echo "<script>
            window.alert('Không có quyền truy cập')
            window.location.href='index.php'
            </script>";
        }
    }
    if(isset($_POST['btn_update'])){
        $tenBaiHat = $_POST['tenBaiHat'];
        $caSi = $_POST['caSi'];
        $album = $_POST['album'];
        $theLoai = $_POST['theLoai'];
        $id = $_POST['id'];
        if($_POST['caSi'] == $id){
            $caSi = $_GET['caSi'];
        }
        if($_POST['theLoai'] == $id){
            $theLoai = $_GET['theLoai'];
        }
        if($_POST['album'] == $id){
            $album = $_GET['album'];
        }
        $update = $m_sua->update_bai_hat($tenBaiHat,$caSi,$album,$theLoai,$id);
        if($update){
            echo "<script>
            window.alert('Sữa thành công')
            window.location.href='song.php?id=$id'
            </script>";
        }
    }
    //views
    include("Smarty_nhac.php");
    $smarty = new Smarty_nhac();
    $view = "views/v_sua.tpl";
    $smarty->assign("view",$view);
    $smarty->assign("doc_ca_si",$doc_ca_si);
    $smarty->assign("doc_ca_si_id",$doc_ca_si_id);
    $smarty->assign("doc_the_loai",$doc_the_loai);
    $smarty->assign("doc_the_loai_theo_id",$doc_the_loai_theo_id);
    $smarty->assign("doc_album",$doc_album);
    $smarty->assign("doc_album_theo_id",$doc_album_theo_id);
    $smarty->assign("doc_bai_hat_theo_id",$doc_bai_hat_theo_id);
    $smarty->display("layout.tpl");
    }
}
?>