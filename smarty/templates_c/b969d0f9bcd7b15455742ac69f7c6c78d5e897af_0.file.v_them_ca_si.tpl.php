<?php
/* Smarty version 3.1.30, created on 2017-11-05 23:04:55
  from "/home/wikicach/public_html/views/v_them_ca_si.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff9917527ff8_35009392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b969d0f9bcd7b15455742ac69f7c6c78d5e897af' => 
    array (
      0 => '/home/wikicach/public_html/views/v_them_ca_si.tpl',
      1 => 1509846782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff9917527ff8_35009392 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/ajax_kiem_tra_trung/xl_ca_si.js"><?php echo '</script'; ?>
>
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
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
><?php }
}
