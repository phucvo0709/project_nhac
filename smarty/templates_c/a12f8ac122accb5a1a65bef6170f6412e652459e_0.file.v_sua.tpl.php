<?php
/* Smarty version 3.1.30, created on 2017-11-06 14:37:45
  from "/home/wikicach/public_html/views/v_sua.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a001149384b54_28458841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12f8ac122accb5a1a65bef6170f6412e652459e' => 
    array (
      0 => '/home/wikicach/public_html/views/v_sua.tpl',
      1 => 1509953465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a001149384b54_28458841 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/ajax_kiem_tra_trung/xl_bai_hat.js"><?php echo '</script'; ?>
>

<form class="w3-container" id="container" action="" method="post">
	<div class="row itemThem">
	<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat_theo_id']->value->id;?>
">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2">
					<label class="w3-text-brown"><b>Tên bài hát</b></label>
				</div>
				<div class="col-lg-10">
					<input class="w3-input w3-border w3-sand" type="text" id="tenBaiHat" name="tenBaiHat" value="<?php echo $_smarty_tpl->tpl_vars['doc_bai_hat_theo_id']->value->tenBaiHat;?>
" required>
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
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Thể loại</b></label></div>
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
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Album</b></label></div>
				<div class="col-lg-10">
					<select class="w3-select" id="album" name="album" required>
						<option value='<?php echo $_smarty_tpl->tpl_vars['doc_album_theo_id']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['doc_album_theo_id']->value->tenAlbum;?>
</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_album']->value, 'dab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dab']->value) {
?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenAlbum;?>
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

<?php }
}
