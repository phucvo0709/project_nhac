<?php
/* Smarty version 3.1.30, created on 2017-11-06 19:14:10
  from "/home/wikicach/public_html/views/v_danh_sach_ca_si.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0052128944e9_43561450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e619ecf6649b3b0ef9c05ada61cbd8d61d88b5b' => 
    array (
      0 => '/home/wikicach/public_html/views/v_danh_sach_ca_si.tpl',
      1 => 1509970443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0052128944e9_43561450 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="w3-bar w3-center">
                    <a href="#" class="w3-large"><?php echo $_smarty_tpl->tpl_vars['pt_doc_ca_si']->value;?>
</a>
                </div>  
            </div>
        </div>
    </div><?php }
}
