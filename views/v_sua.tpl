<script src="public/js/ajax_kiem_tra_trung/xl_bai_hat.js"></script>

<form class="w3-container" id="container" action="" method="post">
	<div class="row itemThem">
	<input type="hidden" id="id" name="id" value="{$doc_bai_hat_theo_id->id}">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2">
					<label class="w3-text-brown"><b>Tên bài hát</b></label>
				</div>
				<div class="col-lg-10">
					<input class="w3-input w3-border w3-sand" type="text" id="tenBaiHat" name="tenBaiHat" value="{$doc_bai_hat_theo_id->tenBaiHat}" required>
					<span id="baihat-result"></span>
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
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Thể loại</b></label></div>
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
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Album</b></label></div>
				<div class="col-lg-10">
					<select class="w3-select" id="album" name="album" required>
						<option value='{$doc_album_theo_id->id}'>{$doc_album_theo_id->tenAlbum}</option>
							{foreach $doc_album as $dab}
						<option value='{$dab->id}'>{$dab->tenAlbum}</option>
							{/foreach}
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_update">Sửa bài hát</button>
                </div>
            </div>
		</div>
	</div>
</form>

