<?php
session_start();
include("models/phan_quyen.php");
class C_xoa_album{
    public function trang_xoa_album()
	{
		include("models/m_xoa_album.php");
		$m_xoa_album = new M_xoa_album();
		if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_xoa_album->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $xoa = $m_xoa_album->xoa_album($id);
		if($xoa)
		{
			echo "<script>alert('Xóa thành công');window.history.back();</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi')</script>";	
		}
		
	}
}
?>