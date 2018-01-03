<?php
/* Smarty version 3.1.30, created on 2017-11-06 14:39:08
  from "/home/wikicach/public_html/views/v_sua_album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a00119c996cc2_12492655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac93f2509c2963b81eddb6acd642689ea49a2aef' => 
    array (
      0 => '/home/wikicach/public_html/views/v_sua_album.tpl',
      1 => 1509953473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a00119c996cc2_12492655 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="w3-container" id="container" action="" method="post" id="uploadForm" enctype="multipart/form-data">
	<div class="row itemThem">
    <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['doc_album_theo_id']->value->id;?>
">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên album</b></label></div>
					<div class="col-lg-10">
                    <input class="w3-input w3-border w3-sand" type="text" id="tenAlbum" name="tenAlbum" value="<?php echo $_smarty_tpl->tpl_vars['doc_album_theo_id']->value->tenAlbum;?>
" required>
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
						<option value='<?php echo $_smarty_tpl->tpl_vars['doc_ca_si_id']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['doc_ca_si_id']->value->tenCaSi;?>
</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_ca_si']->value, 'dcs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dcs']->value) {
?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['dcs']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['dcs']->value->tenCaSi;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
						<option value='<?php echo $_smarty_tpl->tpl_vars['doc_the_loai_theo_id']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['doc_the_loai_theo_id']->value->tenTheLoai;?>
</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_the_loai']->value, 'dtl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dtl']->value) {
?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['dtl']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['dtl']->value->tenTheLoai;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
					<img id="hienThi" src="<?php echo $_smarty_tpl->tpl_vars['doc_album_theo_id']->value->artworkPath;?>
"></img></br>
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
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
><?php }
}
