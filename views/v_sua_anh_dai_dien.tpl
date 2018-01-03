<form class="w3-container" id="container" action"" method="post" id="uploadForm" enctype="multipart/form-data">
    <div class="row itemThem">
        <div class="col-lg-8">
            <div class="row">
                <div class="nhap_anh col-lg-6">
                    <div class="row">
                        <div class="tieu_de_input col-lg-4">
                            <label class="w3-text-brown"><b>Ảnh đại diện</b></label>
                        </div>
                        <div class="khung_input col-lg-8">
                            <input type="file" name="anhDaiDien" id="file" required/>
                        </div>
                    </div>
                </div>
                <div class="hien_thi_anh col-6 w3-right-align">
                    <img id="hienThi" class="img-fluid" src="{$doc_anh->anhDaiDien}"/></br>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_sua_anh_dai_dien">Sửa ảnh đại diện</button>
                </div>
            </div>
		</div>
	</div>
</form>
<script src="public/js/script_hien_thi_anh.js"></script>