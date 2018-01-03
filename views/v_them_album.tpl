<script src="public/js/ajax_get_them/ajaxCaSi.js"></script>
<script src="public/js/ajax_get_them/ajaxTheLoai.js"></script>
<script src="public/js/ajax_get_them/ajaxAlbum.js"></script>
<script src="public/js/ajax_kiem_tra_trung/xl_album.js"></script>
<form class="w3-container" id="container" action="them_album.php" method="post" id="uploadForm" enctype="multipart/form-data" autocomplete="off">
	{if isset($smarty.session.dangBoi)}
		<input class="w3-input w3-border w3-sand" type="hidden" id="dangBoi" name="dangBoi" value="{$smarty.session.dangBoi}" required>
	{/if}
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên album</b></label></div>
					<div class="col-lg-10">
						<input class="w3-input w3-border w3-sand" type="text" id="tenAlbum" name="tenAlbum"  placeholder="Nhập tên album" required>
						<span id="album-result"></span>
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
		<div class="col-lg-4">
			<a class="btn btn-primary button_them" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Thể Loại</b></label></div>
					<div class="col-lg-10"><select class="w3-select" id="theLoai" name="theLoai" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary button_them" href="them_the_loai.php" role="button">Thêm Thể Loại mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="nhap_anh col-lg-6">
					<div class="row">
						<div class="tieu_de_input col-lg-4">
							<label class="w3-text-brown"><b>Ảnh album</b></label>
						</div>
						<div class="khung_input col-lg-8">
							<input type="file" id="file" name="artworkPath" required/>
						</div>
					</div>
				</div>
				<div class="hien_thi_anh col-6 w3-right-align">
					<img id="hienThi" class="img-fluid" src="#"/></br>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="add_album">Thêm Album</button>
                </div>
            </div>
		</div>
	</div>
</form>
<script src="public/js/script_hien_thi_anh.js"></script>
