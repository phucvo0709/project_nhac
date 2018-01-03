<form class="w3-container" id="container" action="" method="post" id="uploadForm" enctype="multipart/form-data">
	<div class="row itemThem">
    <input type="hidden" id="id" name="id" value="{$doc_album_theo_id->id}">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên album</b></label></div>
					<div class="col-lg-10">
                    <input class="w3-input w3-border w3-sand" type="text" id="tenAlbum" name="tenAlbum" value="{$doc_album_theo_id->tenAlbum}" required>
                    </div>
			</div>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Ca sĩ</b></label></div>
				<div class="col-lg-10">
					<select class="w3-select" id="caSi" name="caSi" required>
						<option value='{$doc_ca_si_id->id}'>{$doc_ca_si_id->tenCaSi}</option>
							{foreach $doc_ca_si as $dcs}
						<option value='{$dcs->id}'>{$dcs->tenCaSi}</option>
							{/foreach}
					</select>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Thể Loại</b></label></div>
					<div class="col-lg-10">
					<select class="w3-select" id="theLoai" name="theLoai" required>
						<option value='{$doc_the_loai_theo_id->id}'>{$doc_the_loai_theo_id->tenTheLoai}</option>
							{foreach $doc_the_loai as $dtl}
						<option value='{$dtl->id}'>{$dtl->tenTheLoai}</option>
							{/foreach}
					</select>
				</div>
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
							<label class="w3-text-brown"><b>Ảnh album</b></label>
						</div>
						<div class="khung_input col-lg-8">
							<input type="file" name="artworkPath" id="file"/>
						</div>
					</div>
				</div>
				<div class="hien_thi_anh col-6 w3-right-align">
					<img id="hienThi" src="{$doc_album_theo_id->artworkPath}"></img></br>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="update_album">Sửa Album</button>
                </div>
            </div>
		</div>
	</div>
</form>
<script src="public/js/script_hien_thi_anh.js"></script>