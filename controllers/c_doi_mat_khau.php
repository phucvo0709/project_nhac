<?php
session_start();
class C_doi_mat_khau
{
    function trang_doi_mat_khau()
    {
        //Models
        include("models/m_doi_mat_khau.php");
        $m_doi_mat_khau = new M_doi_mat_khau();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_doi_mat_khau->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
            if($_SESSION['dangBoi'] != $id){
                echo "<script>
                window.alert('Không có quyền')
                window.location.href='index.php'
                </script>";
            }
        }else{
            Header("Location: index.php");
        }
        if(isset($_POST["btn_doi_mat_khau"]))
		{
            $matKhauCu = $this->ma_hoa_mat_khau($_POST["mat_khau_cu"]);
            $matKhauMoi=$this->ma_hoa_mat_khau($_POST["mat_khau_moi"]);
            $ktmk = $m_doi_mat_khau->kiem_tra_mat_khau_cu($id,$matKhauCu);
            if(!$ktmk){
                echo "<script>
                window.alert('Sai mật khẩu cũ vui lòng đăng nhập lại')
                window.location.href='thoat.php'
                </script>";
            }
            $dmk = $m_doi_mat_khau->doi_mat_khau($matKhauMoi,$id,$matKhauCu);
            if($dmk){
                echo "<script>
                window.alert('Đổi thành công vui lòng đăng nhập lại')
                window.location.href='thoat.php'
                </script>";
            }
		}
        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_doi_mat_khau.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
    function ma_hoa_mat_khau($ma_hoa){
        $hasformat="$2y$10$";
        $salt="haimuoihaihaimuoihai22";
        $has_and_salt=$hasformat.$salt;
        return $ma_hoa_mk = crypt($ma_hoa,$has_and_salt);
    }
    
}
?>