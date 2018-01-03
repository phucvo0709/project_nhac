<?php
/* Smarty version 3.1.30, created on 2017-11-05 22:40:13
  from "/home/wikicach/public_html/views/v_them.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff934da49515_32284150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf4148d67116f10552189da9cbc096f3cbc0fe7' => 
    array (
      0 => '/home/wikicach/public_html/views/v_them.tpl',
      1 => 1509772432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff934da49515_32284150 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/ajax_get_them/ajaxCaSi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax_get_them/ajaxTheLoai.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax_get_them/ajaxAlbum.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax_kiem_tra_trung/xl_bai_hat.js"><?php echo '</script'; ?>
>

<form class="w3-container" id="container" action="them.php" method="post"  enctype="multipart/form-data" autocomplete="off">
	<?php if (isset($_SESSION['dangBoi'])) {?>
		<input class="w3-input w3-border w3-sand" type="hidden" id="dangBoi" name="dangBoi" value="<?php echo $_SESSION['dangBoi'];?>
" required>
	<?php }?>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên bài hát</b></label></div>
					<div class="col-lg-10">
						<input class="w3-input w3-border w3-sand" type="text" id="tenBaiHat" name="tenBaiHat"  placeholder="Nhập tên bài hát" required>
						<span id="baihat-result"></span>
					</div>
			</div>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-2"><label class="w3-text-brown"><b>Ca sĩ</b></label></div>
				<div class="col-lg-10"><select class="w3-select" id="caSi" name="caSi" required></select></div>
			</div>
		</div>
		<div class="col-4">
			<a class="btn btn-primary" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Album</b></label></div>
					<div class="col-lg-10"><select class="w3-select" id="album" name="album" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary" href="them_album.php" role="button">Thêm Album mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-2"><label class="w3-text-brown"><b>Thể Loại</b></label></div>
					<div class="col-10"><select class="w3-select" id="theLoai" name="theLoai" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary" href="them_the_loai.php" role="button">Thêm Thể Loại mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="nhap_anh col-lg-6">
					<div class="row">
						<div class="tieu_de_input col-lg-4">
							<label class="w3-text-brown"><b>File mp3</b></label>
						</div>
						<div class="khung_input col-lg-8">
							<input type="file" name="path" required/>	
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_submit">Thêm Bài Hát</button>
                </div>
            </div>
		</div>
	</div>
</form>

<?php }
}
