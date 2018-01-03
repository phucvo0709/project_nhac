<?php
require_once("database.php");
include("thuvien.php");
class M_them extends database{
    function kiem_tra_ten_bai_hat($tenBaiHat){
        $sql = "SELECT tenBaiHat FROM baihat WHERE tenBaiHat=?";
        $this->setQuery($sql);
        $param=array($tenBaiHat);
        return $this->loadRow($param);
    }
    private function get_id(){
        $sql = "SELECT id FROM baihat ORDER by id DESC LIMIT 1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
     function data_them_san_pham(){
        if (isset($_POST["btn_submit"])) 
        {
		    //lấy thông tin từ các form bằng phương thức POST
            $tenBaiHat = $_POST["tenBaiHat"];
            $caSi = $_POST["caSi"];
            $album = $_POST["album"];
            $theLoai = $_POST["theLoai"];
            $dangBoi = $_POST['dangBoi'];
            if($this->kiem_tra_ten_bai_hat($tenBaiHat)){
                echo "<script>window.alert('Tên bài hát đã tồn tại')</script>";
            }else{
                $target_dir = "public/nhac/";
                $target_file = $target_dir . basename($_FILES["path"]["name"]);
                $uploadOk = 1;
                $path = "";
                $mp3FileType = pathinfo($target_file,PATHINFO_EXTENSION);
                if (isset($_FILES['path']))
                {
                    if($_FILES["path"]["size"] > 20000000){
                        echo "<script>
                        alert('File không được quá 20MB');
                        </script>";
                        $uploadOk = 0;
                    }
                    if($mp3FileType != "mp3"){
                        echo "<script>
                        alert('Không phải file nhạc');
                        </script>";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 0) {
                        echo "<script>
                        alert('Upload nhạc bị lỗi');
                        </script>";
                    }else{
                        // Upload file
                        $string = str_replace(' ', '', $_FILES['path']['name']);
                        $chuyen = vn_str_filter($string);
                        if(move_uploaded_file($_FILES['path']['tmp_name'], "public/nhac/" . $chuyen)) {
                          $path = 'public/nhac/'.$chuyen;
                          $sql = "INSERT INTO baihat(tenBaiHat, caSi, album, theLoai, path, dangBoi) VALUES ('$tenBaiHat', '$caSi', '$album', '$theLoai', '$path', '$dangBoi')";
                          $this->setQuery($sql);
                          $this->execute();
                          if($this)
                          {	
                                  $xuat = $this->get_id();
                                  echo "<script>
                                  window.alert('Thêm bài hát thành công')
                                  window.location.href='song.php?id=$xuat->id'
                                  </script>";   
                          }
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
            }
	    }
    }
}
?>