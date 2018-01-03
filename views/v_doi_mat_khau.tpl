<form class="w3-container" id="container" action="#" method="post">
	<h2 class="w3-text-teal h2 w3-margin">Đổi mật khẩu</h2>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2">
					<label class="w3-text-brown"><b>Mật Khẩu cũ:</b></label>
				</div>
				<div class="col-lg-10">
					<input class="w3-input w3-border w3-sand" type="password" id="mat_khau_cu" name="mat_khau_cu" placeholder="Nhập mật khẩu hiện tại" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2">
					<label class="w3-text-brown"><b>Mật Khẩu mới:</b></label>
				</div>
				<div class="col-lg-10">
					<input class="w3-input w3-border w3-sand" type="password" id="mat_khau_moi" name="mat_khau_moi" 
					data-validation="strength" data-validation-strength="2" data-validation-error-msg="Mật khẩu bao gồm chữ và số và tối thiểu 8 ký tự" placeholder="Nhập mật khẩu muốn thay đổi" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2">
					<label class="w3-text-brown"><b>Nl mật khẩu:</b></label>
				</div>
				<div class="col-lg-10">
					<input class="w3-input w3-border w3-sand" type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" 
					data-validation="confirmation" data-validation-confirm="mat_khau_moi" data-validation-error-msg="Mật khẩu mới không trùng nhau" placeholder="Nhập lại mật khẩu mới" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_doi_mat_khau">Đổi mật khẩu</button>
                </div>
            </div>
		</div>
	</div>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
	$.validate({
		modules : 'location, date, security, file',
	});
	// Restrict presentation length
	$('#presentation').restrictLength( $('#pres-max-length') );
</script>