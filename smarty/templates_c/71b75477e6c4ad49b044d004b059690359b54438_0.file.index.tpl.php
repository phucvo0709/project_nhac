<?php
/* Smarty version 3.1.30, created on 2017-11-06 19:11:54
  from "/home/wikicach/public_html/smarty/templates/body/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a00518a60d916_93985783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71b75477e6c4ad49b044d004b059690359b54438' => 
    array (
      0 => '/home/wikicach/public_html/smarty/templates/body/index.tpl',
      1 => 1509970296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a00518a60d916_93985783 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="wrapper-page">
        <div class="wrap-body container">
            <div class="row content-row">
                <div class="wrap-content col-12 col-md-9 col-lg-9 col-xl-9">
                    <div class="slider-area">
                    <!-- Slider -->
                        <div class="block-slider block-slider4">
                            <ul class="" id="bxslider-home4">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'sl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->value) {
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['sl']->value->link;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['sl']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sl']->value->tieuDe;?>
"/>
                                    </a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </div>
                    <!-- ./Slider -->
                    </div> <!-- End slider area -->
                    <div class="section">
                        <h2 class="title-section">Album bài hát mới</h2>
                        <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_album']->value, 'da');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['da']->value) {
?>
                            <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="thumbs">
                                    <a>
                                        <img  class="thumb img-fluid w3-hover-sepia" src="<?php echo $_smarty_tpl->tpl_vars['da']->value->artworkPath;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['da']->value->tenAlbum;?>
">
                                    </a>
                                    <a href="playlist/<?php echo $_smarty_tpl->tpl_vars['da']->value->id;?>
/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['da']->value->tenAlbum);?>
.htm">
                                        <img class="play-link w3-animate-zoom" src="public/images/icons/play-button.png" />
                                    </a>
                                </div>
                                <h3 class="title-item">
                                        <span><a class="title_name" href="playlist/<?php echo $_smarty_tpl->tpl_vars['da']->value->id;?>
/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['da']->value->tenAlbum);?>
.htm"><?php echo $_smarty_tpl->tpl_vars['da']->value->tenAlbum;?>
</a></span>
                                </h3>
                                <h4 class="singer-name">
                                        <span><a class="size_name" href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['da']->value->caSi;?>
" title="<?php echo $_smarty_tpl->tpl_vars['da']->value->tenCaSi;?>
"><?php echo $_smarty_tpl->tpl_vars['da']->value->tenCaSi;?>
</a></span>
                                </h4>      
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                        <h2 class="title-section">Bài hát mới</h2>
                        <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_bai_hat']->value, 'dbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dbh']->value) {
?>
                            <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="thumbs">
                                    <a>
                                        <img  class="thumb img-fluid w3-hover-sepia" src="<?php echo $_smarty_tpl->tpl_vars['dbh']->value->anhCaSi;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
">
                                    </a>
                                    <a href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
.htm">
                                        <img class="play-link w3-animate-zoom" src="public/images/icons/play-button.png" />
                                    </a>
                                </div>
                                <h3 class="title-item">
                                        <span><a class="title_name" href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
</a></span>
                                </h3>
                                <h4 class="singer-name">
                                        <span><a class="size_name" href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->caSi;?>
" title="<?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenCaSi;?>
"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenCaSi;?>
</a></span>
                                </h4>      
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
                <div class="wrap-xep-hang col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="ca_si_viet_nam">
                        <a href="danh_sach_ca_si.php">
                            <img class="anhXepHang" src="public/images/anhcasi/ca_si_viet_nam.jpg" />
                        </a>
                    </div>
                    <div class="nhung_bai_hit_moi">
                        <img class="anhXepHang" src="public/images/anhcasi/nhung_bai_hit_moi.jpg" />
                    </div>
                    <div class="nhac_phim">
                        <img class="anhXepHang" src="public/images/anhcasi/nhac_phim.jpg" />
                    </div>
                    <div class="nhac_hot">
                        <img class="anhXepHang" src="public/images/anhcasi/nhac_hot.jpg" />
                    </div>
                    <h2 class="title_xep_hang">Bảng xếp hạng</h2>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xep_hang']->value, 'xh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xh']->value) {
?>
                            <ul class="itemm">
                                <li class="stt-xh"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</li>
                                <li class="title-item-xh"><span><a href="bai-hat/<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['xh']->value->tenBaiHat);?>
/<?php echo $_smarty_tpl->tpl_vars['xh']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['xh']->value->tenBaiHat;?>
</a></span></li>
                                <li class="view-xh"><span><?php echo $_smarty_tpl->tpl_vars['xh']->value->luotNghe;?>
</span></li>
                            </ul>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div><?php }
}
