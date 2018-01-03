<?php
require_once("database.php");
class M_thoat extends database
{
	public function thoat_dang_nhap(){
        session_destroy();
		header("location:dang_nhap.php");
    }
}

?>