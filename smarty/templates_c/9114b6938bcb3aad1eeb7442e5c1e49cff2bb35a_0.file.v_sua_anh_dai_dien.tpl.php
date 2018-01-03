<?php
/* Smarty version 3.1.30, created on 2017-11-05 22:43:27
  from "/home/wikicach/public_html/views/v_sua_anh_dai_dien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff940f3e86d5_08275144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9114b6938bcb3aad1eeb7442e5c1e49cff2bb35a' => 
    array (
      0 => '/home/wikicach/public_html/views/v_sua_anh_dai_dien.tpl',
      1 => 1509855978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff940f3e86d5_08275144 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="w3-container" id="container" action="#" method="post" id="uploadForm" enctype="multipart/form-data">
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
                    <img id="hienThi" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['doc_anh']->value->anhDaiDien;?>
"/></br>
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
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
><?php }
}
