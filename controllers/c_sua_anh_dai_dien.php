<?php
session_start();
class C_sua_anh_dai_dien
{
    function trang_sua_anh_dai_dien()
    {
        //Models
        include("models/m_sua_anh_dai_dien.php");
        $m_sua_anh_dai_dien = new M_sua_anh_dai_dien();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $kiem_tra_get_id = $m_sua_anh_dai_dien->kiem_tra_get_id($id);
            if(!$kiem_tra_get_id){
                Header("Location: index.php");
            }
        }else{
            Header("Location: index.php");
        }
        $doc_anh = $m_sua_anh_dai_dien->doc_anh_dai_dien($id);
        $dangBoi = $doc_anh->id;
        if (isset($_SESSION['dangBoi'])) {
            if($_SESSION['dangBoi'] != $dangBoi){
                echo "<script>
                window.alert('Không có quyền truy cập')
                window.location.href='index.php'
                </script>";
            }
        }
        if(isset($_POST['btn_sua_anh_dai_dien'])){
            $target_dir = "public/images/albums/";
            $target_file = $target_dir . basename($_FILES["anhDaiDien"]["name"]);
            $uploadOk = 1;
            $anhDaiDien = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if(!empty($_FILES['anhDaiDien']['name'])){
                if($_FILES["anhDaiDien"]["size"] > 500000){
                    echo "<script>
                    alert('File không được quá 5MB');
                    </script>";
                    $uploadOk = 0;
                }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ){
                        echo "<script>
                        alert('Không phải file hình');
                        </script>";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 0) {
                        echo "<script>
                        alert('Update ảnh bị lỗi');
                        </script>";
                    }else{
                        if(move_uploaded_file($_FILES['anhDaiDien']['tmp_name'], $target_file)) {
                            $anhDaiDien="$target_file";
                        } else{
                             echo "<script>
                            window.alert('Lỗi upload file')
                            </script>";  
                        }
                    }
                }else{
                    $anhDaiDien = $doc_anh->anhDaiDien;
                    $update = $m_sua_anh_dai_dien->sua_anh_dai_dien($anhDaiDien,$id);
                }
                if($anhDaiDien != ""){
                    $update = $m_sua_anh_dai_dien->sua_anh_dai_dien($anhDaiDien,$id);
                    if($update){
                        echo "<script>
                        window.alert('Sửa thành công')
                        window.location.href='thanh_vien.php?id=$id'
                        </script>";
                    }
                }
            }
        //Views
        include("Smarty_nhac.php");
        $smarty = new Smarty_nhac();
        $view="views/v_sua_anh_dai_dien.tpl";
        $smarty->assign("view",$view);
        $smarty->assign("doc_anh",$doc_anh);
        $smarty->display("layout.tpl");
    }  
}
?>