<form class="w3-container" id="container" action="" method="post" autocomplete="off">
    <div class="row itemThem">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2"><label class="w3-text-brown"><b>Tên thành viên</b></label></div>
                <div class="col-lg-10">
                <input class="w3-input w3-border w3-sand" type="text" id="ten" name="ten" placeholder="Nhập tên" value="{$doc_ten->ten}" required>
                <span id="casi-result"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_sua_ten">Sửa tên</button>
                </div>
            </div>
		</div>
	</div>
</form>
