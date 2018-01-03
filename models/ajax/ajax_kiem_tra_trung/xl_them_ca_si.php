<?php
if(isset($_POST["tenCaSi"]))
{
    $tenCaSi = $_POST["tenCaSi"];
    include("../../m_them_ca_si.php");
    $m_them_ca_si = new M_them_ca_si();
    $xuat = $m_them_ca_si->kiem_tra_ten_ca_si($tenCaSi);
    if($xuat){
    die("Trùng tên ca sĩ");
    }
}
?>