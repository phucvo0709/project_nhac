<?php
    include("../m_index.php");
    $m_index = new M_index();
    $xuat = $m_index->xepHangBaiHat();
    $xuatt = json_encode($xuat);
    echo $xuatt;
?>