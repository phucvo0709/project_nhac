<?php
/* Smarty version 3.1.30, created on 2017-11-05 05:10:49
  from "C:\wamp64\www\project_nhac\views\v_sua_ten_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fe9d595364c4_52741044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe78f9c52aebbb51ad0af1b2d368fb26207807a3' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_sua_ten_thanh_vien.tpl',
      1 => 1509858451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fe9d595364c4_52741044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="w3-container" id="container" action="#" method="post" autocomplete="off">
    <div class="row itemThem">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2"><label class="w3-text-brown"><b>Tên thành viên</b></label></div>
                <div class="col-lg-10">
                <input class="w3-input w3-border w3-sand" type="text" id="ten" name="ten" placeholder="Nhập tên" value="<?php echo $_smarty_tpl->tpl_vars['doc_ten']->value->ten;?>
" required>
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
<?php }
}
