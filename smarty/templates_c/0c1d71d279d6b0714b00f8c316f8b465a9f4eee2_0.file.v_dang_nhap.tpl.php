<?php
/* Smarty version 3.1.30, created on 2017-11-05 09:52:01
  from "/home/wikicach/public_html/views/v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fedf41b3e0a7_56102483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1d71d279d6b0714b00f8c316f8b465a9f4eee2' => 
    array (
      0 => '/home/wikicach/public_html/views/v_dang_nhap.tpl',
      1 => 1509529392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fedf41b3e0a7_56102483 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" action="dang_nhap.php">
                    <div class="form-group">
                        <label for="Tài khoản"></label>
                        <input type="text" name="tai_khoan" class="form-control" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="form-group">
                        <label for="Mật khẩu"></label>
                        <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" name="btn_dang_nhap" class="btn btn-success">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
<?php }
}
