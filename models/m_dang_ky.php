<?php
require_once("database.php");
class M_dang_ky{

    public function sanitizeTaiKhoan($inputText){
        $inputText = strip_tags($inputText); // loại bỏ ký tự html khi submit
        $inputText = str_replace(" ","", $inputText); //loại bỏ khoảng trắng trong input
        return $inputText;
    } 
    public function sanitizeBaoMat($inputText){
        $inputText = strip_tags($inputText); //loại bỏ thẻ html trong input
        return $inputText;
    }
    public function sanitizeInput($inputText){
        $inputText = strip_tags($inputText); // loại bỏ ký tự html khi submit
        $inputText = ucfirst($inputText);//viết hoa chữ cái đầu
        return $inputText;
    }
    public function validateTaiKhoan($tai_khoan){
        $dbTaiKhoan = new database();
        $sql = "SELECT taiKhoan FROM users WHERE taiKhoan=?";
        $dbTaiKhoan->setQuery($sql);
        $param=array($tai_khoan);
        return $dbTaiKhoan->loadRow($param);
    }
    public function validateEmail($email){
        $dbEmail = new database();
        $sql = "SELECT email FROM users WHERE email=?";
        $dbEmail->setQuery($sql);
        $param=array($email);
        return $dbEmail->loadRow($param);
    }
    public function dangKy(){
        if(isset($_POST["btn_dang_ky"])){
            $ten = $this->sanitizeInput($_POST['ten']);
            $taiKhoan = $this->sanitizeTaiKhoan($_POST['tai_khoan']);
            $matKhau = $this->sanitizeBaoMat($_POST['mat_khau']);
            $email = $this->sanitizeBaoMat($_POST['email']);
            if($this->validateTaiKhoan($taiKhoan))
            {
                echo "<script>
                alert('Tài khoản đã tồn tại');
                </script>";
            }
            else if($this->validateEmail($email)){
                echo "<script>
                alert('Email đã tồn tại');
                </script>";
            }
            else{
                $this->themTaiKhoan($ten, $taiKhoan, $matKhau, $email);
            }
        }
    }
    private function themTaiKhoan($ten,$taiKhoan,$matKhau,$email)
    {       
            $db = new database();
            $hasformat="$2y$10$";
            $salt="haimuoihaihaimuoihai22";
            $has_and_salt=$hasformat.$salt;
            $baoMatMatKhau = crypt($matKhau,$has_and_salt);
            //Insert lên database
            $sql = "INSERT INTO users(ten, taiKhoan, matKhau, email) VALUES ( '$ten', '$taiKhoan', '$baoMatMatKhau', '$email')";
            $db->setQuery($sql);
            $db->execute();
            if(!$db){
                echo "Tên tài khoản đã tồn tại";
            }else{
                echo "<script>
                alert('Bạn đã đăng ký thành công');
                window.location.href='dang_nhap.php';
                </script>";
            }
    }
}
?>