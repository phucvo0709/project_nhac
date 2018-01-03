<?php
if(isset($_POST["email"]))
{
    include("../../m_dang_ky.php");
    $m_dang_ky = new M_dang_ky();
    $tbEmail = $m_dang_ky->validateEmail($email = $_POST["email"]);
    if($tbEmail){
    die("Trùng email");
    }
}
?>