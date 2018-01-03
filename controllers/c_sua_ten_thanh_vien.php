<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_sua_ten_thanh_vien
{
    function trang_sua_ten_thanh_vien()
    {
        //Models
        include("models/m_sua_ten_thanh_vien.php");
        $m_sua_ten_thanh_vien = new M_sua_ten_thanh_vien();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_sua_ten_thanh_vien->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $doc_ten = $m_sua_ten_thanh_vien->doc_ten($id);
        $dangBoi = $doc_ten->id;
        if (isset($_SESSION['dangBoi'])) {
            if($_SESSION['dangBoi'] != $dangBoi){
                echo "<script>
                window.alert('Không có quyền truy cập')
                window.location.href='index.php'
                </script>";
            }
        }
        if(isset($_POST['btn_sua_ten'])){
            $ten = $_POST['ten'];
            $sua_ten_thanh_vien = $m_sua_ten_thanh_vien->sua_ten_thanh_vien($ten,$id);
            if($sua_ten_thanh_vien){
                echo "<script>
                window.alert('Sửa tên thành công')
                window.location.href='thanh_vien.php?id=$id'
                </script>";
            }
        }
        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_sua_ten_thanh_vien.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_ten",$doc_ten);
        $smarty->display("layout.tpl");
    }  
}
?>