<script src="public/js/ajax_kiem_tra_trung/xl_ca_si.js"></script>
<form class="w3-container" id="container" action="them_ca_si.php" method="post" id="uploadForm" enctype="multipart/form-data" autocomplete="off">
    <div class="row itemThem">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2"><label class="w3-text-brown"><b>Tên ca sĩ</b></label></div>
                <div class="col-lg-10">
                <input class="w3-input w3-border w3-sand" type="text" id="tenCaSi" name="tenCaSi" placeholder="Nhập tên ca sĩ" required>
                <span id="casi-result"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row itemThem">
            <div class="col-lg-8">
                <div class="row">
                    <div class="nhap_anh col-lg-6">
                        <div class="row">
                            <div class="tieu_de_input col-lg-4">
                                <label class="w3-text-brown"><b>Ảnh ca sĩ</b></label>
                            </div>
                            <div class="khung_input col-lg-8">
                                <input type="file" name="anhCaSi" id="file" required/>
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
			        <button class="w3-green w3-button" type="submit" name="add_ca_si">Thêm Ca Sĩ</button>
                </div>
            </div>
		</div>
	</div>
</form>
<script src="public/js/script_hien_thi_anh.js"></script>