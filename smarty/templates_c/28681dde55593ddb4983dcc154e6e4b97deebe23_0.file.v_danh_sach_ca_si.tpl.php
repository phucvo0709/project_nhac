<?php
/* Smarty version 3.1.30, created on 2017-11-05 02:11:19
  from "C:\wamp64\www\project_nhac\views\v_danh_sach_ca_si.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fe73478abf83_55977625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28681dde55593ddb4983dcc154e6e4b97deebe23' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_danh_sach_ca_si.tpl',
      1 => 1509763037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fe73478abf83_55977625 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <div class="container" id="container">
        <div class="content_ca_si">
            <div class="center">
                <div class="w3-row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_ca_si']->value, 'dcs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dcs']->value) {
?>                        
                    <div class="w3-col s12 m6 l4 item">
                        <div class="w3-card-2">
                            <img class="w3-hover-sepia" src="<?php echo $_smarty_tpl->tpl_vars['dcs']->value->anhCaSi;?>
" style="width:100%">
                            <div class="w3-container">
                                <h3 class="w3-text-blue w3-margin-top ten_ca_si"><a href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['dcs']->value->id;?>
" class="w3-text-blue w3-margin-top ten_ca_si"><?php echo $_smarty_tpl->tpl_vars['dcs']->value->tenCaSi;?>
</a></h3>
                            </div>
                        </div>

                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <div class="w3-bar w3-center phan_trang">
                    <a href="#" class="w3-button"><?php echo $_smarty_tpl->tpl_vars['pt_doc_ca_si']->value;?>
</a>
                </div>
            </div>
        </div>
    </div><?php }
}
