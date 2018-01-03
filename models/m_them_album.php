<?php
require_once("database.php");
include("thuvien.php");
class M_them_album extends database{
    function kiem_tra_ten_album($tenAlbum){
        $sql = "SELECT tenAlbum FROM albums WHERE tenAlbum=?";
        $this->setQuery($sql);
        $param=array($tenAlbum);
        return $this->loadRow($param);
    }
    private function get_id(){
        $sql = "SELECT id FROM albums ORDER by id DESC LIMIT 1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function data_them_album(){
        if (isset($_POST["add_album"])) 
        {
            //lấy thông tin từ các form bằng phương thức POST
            $tenAlbum = $_POST["tenAlbum"];
            $caSi = $_POST["caSi"];
            $theLoai = $_POST["theLoai"];
            $dangBoi = $_POST['dangBoi'];
            if($this->kiem_tra_ten_album($tenAlbum)){
                echo "<script>window.alert('Tên album đã tồn tại')</script>";
            }else{
                $target_dir = "public/images/albums/";
                $target_file = $target_dir . basename($_FILES["artworkPath"]["name"]);
                $uploadOk = 1;
                $artworkPath = "";
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                if (isset($_FILES['artworkPath']))
                {
                    // Nếu file upload không bị lỗi,
                    // Tức là thuộc tính error > 0
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
                        alert('Upload ảnh bị lỗi');
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
                }
                else{
                    echo 'Bạn chưa chọn file upload';
                }
            //KT
                if($artworkPath != ""){
                $sql = "INSERT INTO albums(tenAlbum, caSi, theLoai, artworkPath, dangBoi) VALUES ('$tenAlbum', '$caSi', '$theLoai', '$artworkPath', $dangBoi)";
                $this->setQuery($sql);
                $this->execute();
                    if($this)
                    {	
                        $xuat = $this->get_id();
                        echo "<script>
                        window.alert('Thêm album thành công')
                        window.location.href='album.php?id=$xuat->id'
                        </script>";   
                    }
                }
            }
        }
    }
}
?>