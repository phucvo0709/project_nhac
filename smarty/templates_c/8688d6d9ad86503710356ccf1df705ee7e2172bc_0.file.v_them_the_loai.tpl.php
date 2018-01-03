<?php
/* Smarty version 3.1.30, created on 2017-11-14 05:51:06
  from "/home/wikicach/public_html/views/v_them_the_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a21da8db839_04168673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8688d6d9ad86503710356ccf1df705ee7e2172bc' => 
    array (
      0 => '/home/wikicach/public_html/views/v_them_the_loai.tpl',
      1 => 1509774418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a21da8db839_04168673 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/ajax_them/ajaxThemTheLoai.js"><?php echo '</script'; ?>
>


<div class="container" id="container">
    <div class="row itemThem">
        <div class="tieu_de_input col-lg-1">
            <label class="w3-text-brown"><b>Thể loại</b></label>
        </div>
        <div class="khung_input col-lg-11">
            <input type="text" name="tenTheLoai" id="tenTheLoai" placeholder="Nhập thể loại" required>
            <div id="themTheLoai"></div>
        </div>
    </div>
    <div class="row itemThem">
        <div class="col-lg-10 offset-lg-1">
            <button class="w3-green w3-button" type="submit" id="submit">Thêm thể loại</button>
        </div>
    </div>
</div><?php }
}
