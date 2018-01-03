<?php
session_start();
include("models/phan_quyen.php");
class C_xoa_bai_hat{
    public function trang_xoa_bai_hat()
	{
		include("models/m_xoa_bai_hat.php");
		$m_xoa_bai_hat = new M_xoa_bai_hat();
		if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_xoa_bai_hat->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $xoa = $m_xoa_bai_hat->xoa_bai_hat($id);
		if($xoa)
		{
			echo "<script>alert('Xóa thành công');window.location.href = 'index.php';</script>";	
		}
	}
}
?>