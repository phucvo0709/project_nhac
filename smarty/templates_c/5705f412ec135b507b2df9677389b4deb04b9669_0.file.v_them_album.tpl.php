<?php
/* Smarty version 3.1.30, created on 2017-11-04 05:07:48
  from "C:\wamp64\www\project_nhac\views\v_them_album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd4b24712cd9_54773826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5705f412ec135b507b2df9677389b4deb04b9669' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_them_album.tpl',
      1 => 1509771709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd4b24712cd9_54773826 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="public/js/ajax_kiem_tra_trung/xl_album.js"><?php echo '</script'; ?>
>
<form class="w3-container" id="container" action="them_album.php" method="post" id="uploadForm" enctype="multipart/form-data" autocomplete="off">
	<?php if (isset($_SESSION['dangBoi'])) {?>
		<input class="w3-input w3-border w3-sand" type="hidden" id="dangBoi" name="dangBoi" value="<?php echo $_SESSION['dangBoi'];?>
" required>
	<?php }?>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Tên album</b></label></div>
					<div class="col-lg-10">
						<input class="w3-input w3-border w3-sand" type="text" id="tenAlbum" name="tenAlbum"  placeholder="Nhập tên album" required>
						<span id="album-result"></span>
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
		<div class="col-lg-4">
			<a class="btn btn-primary button_them" href="them_ca_si.php" role="button">Thêm ca sĩ mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
					<div class="col-lg-2"><label class="w3-text-brown"><b>Thể Loại</b></label></div>
					<div class="col-lg-10"><select class="w3-select" id="theLoai" name="theLoai" required></select></div>
			</div>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-primary button_them" href="them_the_loai.php" role="button">Thêm Thể Loại mới</a>
		</div>
	</div>
	<div class="row itemThem">
		<div class="col-lg-8">
			<div class="row">
				<div class="nhap_anh col-lg-6">
					<div class="row">
						<div class="tieu_de_input col-lg-4">
							<label class="w3-text-brown"><b>Ảnh album</b></label>
						</div>
						<div class="khung_input col-lg-8">
							<input type="file" id="file" name="artworkPath" required/>
						</div>
					</div>
				</div>
				<div class="hien_thi_anh col-6 w3-right-align">
					<img id="hienThi" class="img-fluid" src="#"/></br>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="add_album">Thêm Album</button>
                </div>
            </div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
<?php }
}
