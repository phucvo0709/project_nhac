<?php
/* Smarty version 3.1.30, created on 2017-11-03 10:33:22
  from "C:\wamp64\www\project_nhac\views\v_xep_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc45f28b3b74_33512598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25978788ee7e15b8a93bb3beedf5eb4d9f910bf9' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_xep_hang.tpl',
      1 => 1509705167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc45f28b3b74_33512598 (Smarty_Internal_Template $_smarty_tpl) {
?>
                <div class="wrap-ngau-nhien col-12 col-lg-3 col-xl-3">
                        <h2 class="title-section">Xếp hạng</h2>
                        <div class="widget">
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xep_hang']->value, 'xh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xh']->value) {
?>     
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="title-item">
                                        <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['xh']->value->tenBaiHat;?>
</a></span>
                                    </h3>
                                    <h4 class="singer-name">
                                        <span><a href="https://mp3.zing.vn/nghe-si/Various-Artists" title="Nghệ sĩ Various Artists"></a></span>
                                    </h4> 
                                </div>
                                <div class="col-4">
                                    <h5 class="luot-nghe">
                                        <span><?php echo $_smarty_tpl->tpl_vars['xh']->value->luotNghe;?>
</span>
                                    </h5>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div><?php }
}
