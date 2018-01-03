<?php
/* Smarty version 3.1.30, created on 2017-11-05 06:29:34
  from "C:\wamp64\www\project_nhac\views\v_the_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59feafce2e70a2_74059978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a8cb9df60ead9a33c6fb8e52ead52146936e8e' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_the_loai.tpl',
      1 => 1509863372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59feafce2e70a2_74059978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3-content w3-margin-top" id="container" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-col l2">
        <div class="w3-display-container">
            <h2 class="w3-text-teal w3-center"><?php echo $_smarty_tpl->tpl_vars['doc_the_loai']->value->tenTheLoai;?>
</h2>
        </div>
    </div>
    <div class="w3-col l10 ">
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_bai_hat w3-text-purple">Bài hát <?php echo $_smarty_tpl->tpl_vars['doc_the_loai']->value->tenTheLoai;?>
</h5>
      <ul class="w3-ul w3-card-4">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_bai_hat']->value, 'dbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dbh']->value) {
?>       
        <li class="w3-bar">
          <a href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
          <div class="w3-bar-item">
            <a class="item_bai_hat" href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
</a><br>
          </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
      <div class="w3-bar w3-center phan_trang">
        <a href="#"><?php echo $_smarty_tpl->tpl_vars['pt_doc_bai_hat']->value;?>
</a>
      </div>
    </div>
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_album w3-text-purple">Album <?php echo $_smarty_tpl->tpl_vars['doc_the_loai']->value->tenTheLoai;?>
 </h5>
      <ul class="w3-ul w3-card-4">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_album']->value, 'dab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dab']->value) {
?>
      <li class="w3-bar">
          <img src="<?php echo $_smarty_tpl->tpl_vars['dab']->value->artworkPath;?>
" class="w3-bar-item w3-circle w3-hide-small" style="width:86px">
          <div class="w3-bar-item">
              <a class="item_album" href="album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenAlbum;?>
</a><br>
              <a class="item_the_loai" href="ca_si.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->caSi;?>
"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenCaSi;?>
</a>
          </div>
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
    </div>
  </div>
</div>
</div><?php }
}
