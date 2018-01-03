<?php
session_start();
class C_dang_nhap{
    function trang_dang_nhap(){
        //model
        if(isset($_POST["btn_dang_nhap"]))
		{
			$taiKhoan=$_POST["tai_khoan"];
            $matKhau=$_POST["mat_khau"];
			$this->luu_dang_nhap($taiKhoan,$matKhau);
        }
        if(isset($_SESSION['ten'])){
            header("Location: index.php");
        }
        //view
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view = "views/v_dang_nhap.tpl";
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
    function luu_dang_nhap($taiKhoan, $matKhau){
        include("models/m_dang_nhap.php");
        $m_dang_nhap=new M_dang_nhap();
        $user=$m_dang_nhap->kt_dang_nhap($taiKhoan,$matKhau);
        if($user){
            $_SESSION['ten']=$user->ten;
            $_SESSION['taiKhoan']=$user->taiKhoan;
            $_SESSION['anhDaiDien']=$user->anhDaiDien;
            $_SESSION['phanQuyen']=$user->phanQuyen;
            $_SESSION['dangBoi']=$user->id;
        }else{
            echo "<script>
            alert('Tên tài khoản hoặc mật khẩu không chính xác');
            </script>";
        }
    }
}
?>