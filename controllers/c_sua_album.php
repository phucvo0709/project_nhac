<?php
session_start();
if (isset($_SESSION['ten']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: dang_nhap.php');
}
class C_sua_album{
    function trang_sua_album(){
    include("models/m_sua_album.php");
    $m_sua_album = new M_sua_album();
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $kiem_tra_get_id = $m_sua_album->kiem_tra_get_id($id);
        if(!$kiem_tra_get_id){
            Header("Location: index.php");
        }
    }else{
        Header("Location: index.php");
    }
    $doc_album = $m_sua_album->doc_album();
    $doc_album_theo_id = $m_sua_album->doc_album_theo_id($id);
    $dangBoi = $doc_album_theo_id->dangBoi;
    if (isset($_SESSION['dangBoi'])) {
        if($_SESSION['dangBoi'] != $dangBoi){
            echo "<script>
            window.alert('Không có quyền')
            window.location.href='index.php'
            </script>";
        }
    }
    $doc_ca_si = $m_sua_album->doc_ca_si();
    $doc_ca_si_id = $m_sua_album->doc_ca_si_theo_id($id);
    $doc_the_loai = $m_sua_album->doc_the_loai();
    $doc_the_loai_theo_id = $m_sua_album->doc_the_loai_theo_id($id);
    if(isset($_POST['update_album'])){
        $tenAlbum = $_POST['tenAlbum'];
        $caSi = $_POST['caSi'];
        $theLoai = $_POST['theLoai'];
        $id = $_POST['id'];
        if($_POST['caSi'] == $id){
            $caSi = $_GET['caSi'];
        }
        if($_POST['theLoai'] == $id){
            $theLoai = $_GET['theLoai'];
        }
        $target_dir = "public/images/albums/";
        $target_file = $target_dir . basename($_FILES["artworkPath"]["name"]);
        $uploadOk = 1;
        $artworkPath = "";
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $xuat = $m_sua_album->doc_album_theo_id($id);
        if(!empty($_FILES['artworkPath']['name'])){
            if($_FILES["artworkPath"]["size"] > 500000){
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
                    if(move_uploaded_file($_FILES['artworkPath']['tmp_name'], $target_file)) {
                      $artworkPath = $target_file;
                    } else{
                         echo "<script>
                        window.alert('Lỗi upload file')
                        </script>";  
                    }
                }
            }else{
                $artworkPath = $xuat->artworkPath;
                $update = $m_sua_album->update_album($tenAlbum,$caSi,$theLoai,$artworkPath,$id);
            }
            if($artworkPath != ""){
                $update = $m_sua_album->update_album($tenAlbum,$caSi,$theLoai,$artworkPath,$id);
                if($update){
                    echo "<script>
                    window.alert('Sửa thành công')
                    window.location.href='album.php?id=$xuat->id'
                    </script>";
                }
            }
        }
    //views
    include("Smarty_nhac.php");
    $smarty = new Smarty_nhac();
    $view = "views/v_sua_album.tpl";
    $smarty->assign("view",$view);
    $smarty->assign("doc_album",$doc_album);
    $smarty->assign("doc_album_theo_id",$doc_album_theo_id);
    $smarty->assign("doc_ca_si",$doc_ca_si);
    $smarty->assign("doc_ca_si_id",$doc_ca_si_id);
    $smarty->assign("doc_the_loai",$doc_the_loai);
    $smarty->assign("doc_the_loai_theo_id",$doc_the_loai_theo_id);
    $smarty->display("layout.tpl");
    }
}
?>