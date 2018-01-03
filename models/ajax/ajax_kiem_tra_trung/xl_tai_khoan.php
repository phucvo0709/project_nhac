<?php
if(isset($_POST["tai_khoan"]))
{
    include("../../m_dang_ky.php");
    $m_dang_ky = new M_dang_ky();
    $xuat = $m_dang_ky->validateTaiKhoan($tai_khoan = $_POST["tai_khoan"]);
    if($xuat){
    die("Trùng tài khoản");
    }
}
?>