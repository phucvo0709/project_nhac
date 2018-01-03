<?php
/* Smarty version 3.1.30, created on 2017-11-03 10:20:44
  from "C:\wamp64\www\project_nhac\smarty\templates\xephang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc42fc1694a6_01335157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38bc64447587f9aadd304da6c9204ad9fc3afa4' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\smarty\\templates\\xephang.tpl',
      1 => 1509704433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc42fc1694a6_01335157 (Smarty_Internal_Template $_smarty_tpl) {
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
