<?php
/* Smarty version 3.1.30, created on 2017-11-01 12:56:27
  from "C:\wamp64\www\project_nhac\views\v_them_bai_hat_album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9c47b70c6f3_26971614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007f013017d633544ba43443391d6e106badd5b8' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_them_bai_hat_album.tpl',
      1 => 1509540986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9c47b70c6f3_26971614 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_them_bai_hat_ajax.js"><?php echo '</script'; ?>
>
<form class="w3-container" id="container" action="them_bai_hat_album.php" method="post" autocomplete="off">
	<div class="row itemThem">
		<div class="col-8">
			<div class="row">
					<div class="col-2"><label class="w3-text-brown"><b>Tên bài hát</b></label></div>
					<div class="col-10">
						<input class="w3-input w3-border w3-sand" type="text" id="tenBaiHat" name="tenBaiHat" placeholder="Nhập tên bài hát" required>
						<div class="hien-thi-tim-kiem-bai-hat">
						<select class="w3-select" id="caSi" name="caSi" required>

							<option value=''><div id="result-timThemBaiHat"></div></option>
						</select>
                            
                        </div>
					</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<button class="w3-green w3-button" type="submit" name="add_album">Thêm bài hát</button>
		</div>
	</div>
</form>

<?php }
}
