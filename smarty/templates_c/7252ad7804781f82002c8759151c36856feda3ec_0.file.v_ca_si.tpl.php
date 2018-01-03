<?php
/* Smarty version 3.1.30, created on 2017-11-05 09:50:47
  from "/home/wikicach/public_html/views/v_ca_si.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fedef769cb59_40765971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7252ad7804781f82002c8759151c36856feda3ec' => 
    array (
      0 => '/home/wikicach/public_html/views/v_ca_si.tpl',
      1 => 1509868028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fedef769cb59_40765971 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3-content w3-margin-top" id="container" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-col l2">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo $_smarty_tpl->tpl_vars['doc_ca_si']->value->anhCaSi;?>
" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 class="w3-text-teal"><?php echo $_smarty_tpl->tpl_vars['doc_ca_si']->value->tenCaSi;?>
</h3>
          </div>
        </div>
      </div><br>
    </div>
    <div class="w3-col l10 ">
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_bai_hat w3-text-purple">Bài hát của <?php echo $_smarty_tpl->tpl_vars['doc_ca_si']->value->tenCaSi;?>
</h5>
      <ul class="w3-ul w3-card-4">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_bai_hat']->value, 'dbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dbh']->value) {
?>               
        <li class="w3-bar">
          <a href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
.htm"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
          <div class="w3-bar-item">
            <a class="item_bai_hat" href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
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
      <h5 class="w3-text-purple">Album <?php echo $_smarty_tpl->tpl_vars['doc_ca_si']->value->tenCaSi;?>
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
              <a class="item_the_loai" href="theloai.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->theLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenTheLoai;?>
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
