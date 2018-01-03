    <script src="public/js/ajax_kiem_tra_trung/xl_tai_khoan.js"></script>
    <script src="public/js/ajax_kiem_tra_trung/xl_email.js"></script>
        <div class="container" id="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form action="dang_ky.php" method="POST">
                        <div class="form-group">
                            <label for="Tên"></label>
                            <input type="text" name="ten" class="form-control" placeholder="Nhập tên" value="{if isset($smarty.post.btn_dang_ky)}{$smarty.post.ten}{/if}"
                            data-validation="length" data-validation-length="min4" data-validation-error-msg="Tên ít nhất 4 ký tự" required>
                        </div>
                        <div class="form-group">
                            <label for="Tài khoản"></label>
                            <input type="text" id="tai_khoan" name="tai_khoan" class="form-control" placeholder="Nhập tài khoản" value="{if isset($smarty.post.btn_dang_ky)}{$smarty.post.tai_khoan}{/if}" 
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
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập Email" value="{if isset($smarty.post.btn_dang_ky)}{$smarty.post.email}{/if}"
                            autocomplete="off" data-validation="email" data-validation-error-msg="Nhập không đúng định dạng email" required>
                            <span id="email-result"></span>
                        </div>
                            <button type="submit" name="btn_dang_ky" class="btn btn-success">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script>
            $.validate({
                modules : 'location, date, security, file',
            });
            // Restrict presentation length
            $('#presentation').restrictLength( $('#pres-max-length') );
        </script>