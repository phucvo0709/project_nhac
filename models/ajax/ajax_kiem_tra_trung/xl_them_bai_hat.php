<?php
if(isset($_POST["tenBaiHat"]))
{
    $tenBaiHat = $_POST["tenBaiHat"];
    include("../../m_them.php");
    $m_them = new M_them();
    $xuat = $m_them->kiem_tra_ten_bai_hat($tenBaiHat);
    if($xuat){
    die("Trùng tên bài hát");
    }
}
?>