<script src="public/js/ajax_get_them/ajaxCaSi.js"></script>
<script src="public/js/ajax_get_them/ajaxTheLoai.js"></script>
<script src="public/js/ajax_get_them/ajaxAlbum.js"></script>
<script src="public/js/ajax_kiem_tra_trung/xl_bai_hat.js"></script>

<form class="w3-container" id="container" action="them.php" method="post"  enctype="multipart/form-data" autocomplete="off">
	{if isset($smarty.session.dangBoi)}
		<input class="w3-input w3-border w3-sand" type="hidden" id="dangBoi" name="dangBoi" value="{$smarty.session.dangBoi}" required>
	{/if}
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên bài hát</b></label></div>
					<div class="col-lg-10">
						<input class="w3-input w3-border w3-sand" type="text" id="tenBaiHat" name="tenBaiHat"  placeholder="Nhập tên bài hát" required>
						<span id="baihat-result"></span>
					</div>
			</div>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Ca sĩ</b></label></div>
				<div class="col-lg-10"><select class="w3-select" id="caSi" name="caSi" required></select></div>
			</div>
		</div>
		<div class="col-4">
			<a class="btn btn-primary" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Album</b></label></div>
					<div class="col-lg-10"><select class="w3-select" id="album" name="album" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary" href="them_album.php" role="button">Thêm Album mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-2"><label class="w3-text-brown"><b>Thể Loại</b></label></div>
					<div class="col-10"><select class="w3-select" id="theLoai" name="theLoai" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary" href="them_the_loai.php" role="button">Thêm Thể Loại mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="nhap_anh col-lg-6">
					<div class="row">
						<div class="tieu_de_input col-lg-4">
							<label class="w3-text-brown"><b>File mp3</b></label>
						</div>
						<div class="khung_input col-lg-8">
							<input type="file" name="path" required/>	
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_submit">Thêm Bài Hát</button>
                </div>
            </div>
		</div>
	</div>
</form>

