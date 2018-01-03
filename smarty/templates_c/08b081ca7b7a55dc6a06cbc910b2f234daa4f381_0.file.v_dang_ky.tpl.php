<?php
/* Smarty version 3.1.30, created on 2017-11-05 09:52:00
  from "/home/wikicach/public_html/views/v_dang_ky.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fedf409c88b2_11943856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b081ca7b7a55dc6a06cbc910b2f234daa4f381' => 
    array (
      0 => '/home/wikicach/public_html/views/v_dang_ky.tpl',
      1 => 1509524394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fedf409c88b2_11943856 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 src="public/js/ajax_kiem_tra_trung/xl_tai_khoan.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/ajax_kiem_tra_trung/xl_email.js"><?php echo '</script'; ?>
>
        <div class="container" id="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form action="dang_ky.php" method="POST">
                        <div class="form-group">
                            <label for="Tên"></label>
                            <input type="text" name="ten" class="form-control" placeholder="Nhập tên" value="<?php if (isset($_POST['btn_dang_ky'])) {
echo $_POST['ten'];
}?>"
                            data-validation="length" data-validation-length="min4" data-validation-error-msg="Tên ít nhất 4 ký tự" required>
                        </div>
                        <div class="form-group">
                            <label for="Tài khoản"></label>
                            <input type="text" id="tai_khoan" name="tai_khoan" class="form-control" placeholder="Nhập tài khoản" value="<?php if (isset($_POST['btn_dang_ky'])) {
echo $_POST['tai_khoan'];
}?>" 
                            autocomplete="off" data-validation="length alphanumeric" data-validation-length="min4" data-validation-error-msg="Tối thiểu 4 ký tự" required>
                            <span id="user-result"></span>
                        </div>
                        <div class="form-group">
                            <label for="Mật khẩu"></label>
                            <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu"
                            data-validation="strength" data-validation-strength="2" data-validation-error-msg="Mật khẩu bao gồm chữ và số và tối thiểu 8 ký tự" required>
                        </div>
                        <div class="form-group">
                            <label for="Nhập lại mật khẩu"></label>
                            <input type="password" name="nhap_lai_mat_khau" class="form-control" placeholder="Nhập lại mật khẩu" 
                            data-validation="confirmation" data-validation-confirm="mat_khau" data-validation-error-msg="Không trùng mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="Email"></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập Email" value="<?php if (isset($_POST['btn_dang_ky'])) {
echo $_POST['email'];
}?>"
                            autocomplete="off" data-validation="email" data-validation-error-msg="Nhập không đúng định dạng email" required>
                            <span id="email-result"></span>
                        </div>
                            <button type="submit" name="btn_dang_ky" class="btn btn-success">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $.validate({
                modules : 'location, date, security, file',
            });
            // Restrict presentation length
            $('#presentation').restrictLength( $('#pres-max-length') );
        <?php echo '</script'; ?>
><?php }
}
