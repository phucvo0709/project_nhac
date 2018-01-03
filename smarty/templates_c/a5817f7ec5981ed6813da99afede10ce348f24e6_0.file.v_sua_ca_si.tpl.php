<?php
/* Smarty version 3.1.30, created on 2017-10-24 12:59:47
  from "C:\wamp64\www\project_nhac\views\v_sua_ca_si.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ef39437d9af9_56188158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5817f7ec5981ed6813da99afede10ce348f24e6' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_sua_ca_si.tpl',
      1 => 1508849904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ef39437d9af9_56188158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="w3-container" action="#" method="post">
	
	<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['doc_ca_si_theo_id']->value->id;?>
">
	<div class="row itemThem">
		<div class="col-8">
			<div class="row">
				<div class="col-2"><label class="w3-text-brown"><b>Ca sĩ</b></label></div>
				<div class="col-10">
					<select class="w3-select" id="caSi" name="caSi" required>
						<option value='<?php echo $_smarty_tpl->tpl_vars['doc_ca_si_theo_id']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['doc_ca_si_theo_id']->value->tenCaSi;?>
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
		<div class="col-4">
			<a class="btn btn-primary" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<button class="w3-green w3-button" type="submit" name="btn_update_cs">Sửa</button>
		</div>
	</div>
</form>

<?php }
}
