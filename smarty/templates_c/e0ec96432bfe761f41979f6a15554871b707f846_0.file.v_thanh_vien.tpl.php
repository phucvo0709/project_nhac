<?php
/* Smarty version 3.1.30, created on 2017-11-05 22:43:22
  from "/home/wikicach/public_html/views/v_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff940a8add73_31729226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ec96432bfe761f41979f6a15554871b707f846' => 
    array (
      0 => '/home/wikicach/public_html/views/v_thanh_vien.tpl',
      1 => 1509871022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff940a8add73_31729226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3-content w3-margin-top" id="container" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-col l2">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->anhDaiDien;?>
" style="width:100%; max-width:240px; max-height:240px" alt="Avatar">
          <div class="w3-display-topright w3-container">
            <?php if (isset($_SESSION['dangBoi'])) {?>
              <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                <a href="sua_anh_dai_dien.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->id;?>
" class="fa fa-pencil-square-o"></a>
              <?php }?>
            <?php }?>
          </div>
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 class="w3-text-teal">
            <?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->ten;?>

            <?php if (isset($_SESSION['dangBoi'])) {?>
                <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                    <a href="sua_ten_thanh_vien.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->id;?>
" class="fa fa-pencil-square-o"></a>
                <?php }?>
            <?php }?>
            </h3>
          </div>
        </div>
      </div><br>
      <?php if (isset($_SESSION['dangBoi'])) {?>
          <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
              <a href="doi_mat_khau.php?id=<?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->id;?>
" class="w3-green w3-button w3-margin-bottom">Đổi mật khẩu</a>
          <?php }?>
      <?php }?>
    </div>
    <div class="w3-col l10 ">
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_bai_hat w3-text-purple d-inline">Bài hát của <?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->ten;?>
</h5> 
      <?php if (isset($_SESSION['dangBoi'])) {?>
        <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
            <a href="them.php" class="fa fa-plus"></a>
        <?php }?>
      <?php }?>
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
</a> 
          </div>
          <div class="w3-right">
            <?php if (isset($_SESSION['dangBoi'])) {?>
                <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                    <a href="sua.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
&caSi=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->caSi;?>
&album=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->album;?>
&theLoai=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->theLoai;?>
" class="fa fa-pencil-square-o"></a>
                <?php }?>
                <?php if ($_SESSION['phanQuyen'] == '1') {?>
                    <a href="xoa_bai_hat.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
" class="fa fa-trash"></a>
                <?php }?>
            <?php }?>
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
        <h5 class="w3-text-purple d-inline">Album của <?php echo $_smarty_tpl->tpl_vars['doc_thanh_vien_theo_id']->value->ten;?>
</h5>
        <?php if (isset($_SESSION['dangBoi'])) {?>
          <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
              <a href="them.php" class="fa fa-plus"></a>
          <?php }?>
        <?php }?>
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
                  <a class="item_album" href="playlist/<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['dab']->value->tenAlbum);?>
.htm"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenAlbum;?>
</a><br>
                  <a class="item_the_loai" href="theloai.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->theLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenTheLoai;?>
</a>
              </div>
              <div class="w3-right">
                <?php if (isset($_SESSION['dangBoi'])) {?>
                    <?php if ($_SESSION['dangBoi'] == $_smarty_tpl->tpl_vars['dangBoi']->value) {?>
                        <a href="sua_album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
&caSi=<?php echo $_smarty_tpl->tpl_vars['dab']->value->caSi;?>
&theLoai=<?php echo $_smarty_tpl->tpl_vars['dab']->value->theLoai;?>
" class="fa fa-pencil-square-o"></a>
                    <?php }?>
                    <?php if ($_SESSION['phanQuyen'] == '1') {?>
                        <a href="xoa_album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
" class="fa fa-trash"></a>
                    <?php }?>
                <?php }?>
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
