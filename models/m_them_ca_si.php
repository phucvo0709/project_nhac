<?php
require_once("database.php");
include("thuvien.php");
class M_them_ca_si extends database{
    function kiem_tra_ten_ca_si($tenCaSi){
        $sql = "SELECT tenCaSi FROM casi WHERE tenCaSi=?";
        $this->setQuery($sql);
        $param=array($tenCaSi);
        return $this->loadRow($param);
    }
    private function get_id(){
        $sql = "SELECT id FROM casi ORDER by id DESC LIMIT 1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function data_them_ca_si(){
        if (isset($_POST["add_ca_si"])) 
        {
            $tenCaSi = $_POST['tenCaSi'];
            if($this->kiem_tra_ten_ca_si($tenCaSi)){
               echo "<script>window.alert('Tên ca sĩ đã tồn tại')</script>";
            }else{
                $target_dir = "public/images/anhcasi/";
                $target_file = $target_dir . basename($_FILES["anhCaSi"]["name"]);
                $uploadOk = 1;
                $anhCaSi = "";
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                if (isset($_FILES['anhCaSi']))
                {
                    if($_FILES["anhCaSi"]["size"] > 500000){
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
                        if(move_uploaded_file($_FILES['anhCaSi']['tmp_name'], $target_file)) {
                          $anhCaSi = $target_file;
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
                    if($anhCaSi != ""){
                    $sql = "INSERT INTO casi(tenCaSi, anhCaSi) VALUES ('$tenCaSi', '$anhCaSi')";
                    $this->setQuery($sql);
                    $this->execute();
                        if($this){
                            $xuat = $this->get_id();
                            echo "<script>window.alert('Thêm ca sĩ thành công');window.location.href='casi.php?id=$xuat->id'</script>";
                        }
                    }
                }
            }
    }
}
?>