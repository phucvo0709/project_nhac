<?php
/* Smarty version 3.1.30, created on 2017-11-05 22:54:11
  from "/home/wikicach/public_html/views/v_quan_ly_bai_hat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff9693077798_54240143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b1e1486e5f1eef1c2975e3868bbabc3dfbc8ce' => 
    array (
      0 => '/home/wikicach/public_html/views/v_quan_ly_bai_hat.tpl',
      1 => 1509793212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff9693077798_54240143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3-container" id="container">
	<div class="w3-container">
    <div class="w3-responsive">
    <h2 class="w3-text-teal h2">Quản lý bài hát</h2>
      <table class="w3-table-all" id="table_loai_sua">
        <thead>
          <tr class="w3-red">
              <th>Tên bài hát</th>
              <th>Ca sĩ</th>
              <th>Thể loại</th>
              <th>Lượt nghe</th>
              <th>Đăng bởi</th>
              <th>Hành động</th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_bai_hat']->value, 'dbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dbh']->value) {
?>
          <tr class="item">
              <td><a href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenBaiHat;?>
</a></td>
              <td><a href="casi.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->caSi;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenCaSi;?>
</a></td>
              <td><a href="theloai.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->theLoai;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->tenTheLoai;?>
</a></td>
              <td><i class="fa fa-headphones fa-1"> <?php echo $_smarty_tpl->tpl_vars['dbh']->value->luotNghe;?>
</i></td>
              <td><a href="thanhvien.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->dangBoi;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dbh']->value->ten;?>
</a></td>
              <td>
                  <form action="sua.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
" method="post" style="float:left">
                      <button class="w3-button w3-green" type="submit" name="btn_duyet">Sửa</button>
                  </form>
                  <form action="xoa_bai_hat.php?id=<?php echo $_smarty_tpl->tpl_vars['dbh']->value->id;?>
" method="post" >
                      <button class="w3-button w3-red" name="btn_xoa" style="width:64.65px">Xóa</button>
                  </form>
              </td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>
    </div>
	</div>
    <div class="w3-bar w3-center">
        <a href="#" class="w3-large"><?php echo $_smarty_tpl->tpl_vars['pt_doc_bai_hat']->value;?>
</a>
    </div>  
</div><?php }
}
