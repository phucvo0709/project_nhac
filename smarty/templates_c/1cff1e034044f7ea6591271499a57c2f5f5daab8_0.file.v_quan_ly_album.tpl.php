<?php
/* Smarty version 3.1.30, created on 2017-11-03 07:03:39
  from "C:\wamp64\www\project_nhac\views\v_quan_ly_album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc14cb15d1e1_26709106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cff1e034044f7ea6591271499a57c2f5f5daab8' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\views\\v_quan_ly_album.tpl',
      1 => 1509691507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc14cb15d1e1_26709106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="w3-container" id="container">
	<div class="w3-container">
        <div class="w3-responsive">
        <h2 class="w3-text-teal h2">Quản lý bài hát</h2>
            <table class="w3-table-all" id="table_loai_sua">
                <thead>
                    <tr class="w3-red">
                        <th>Tên Album</th>
                        <th>Số bài hát</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <div id="table-div">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_so_bai_hat']->value, 'dsbh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dsbh']->value) {
?>
                    <h3 class="title-item">
                        <span><a href="song.php?id=<?php echo $_smarty_tpl->tpl_vars['dsbh']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dsbh']->value->tenBaiHat;?>
</a></span>
                    </h3>
                    <h4 class="singer-name">
                        <span><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['dsbh']->value->tenCaSi;?>
"><?php echo $_smarty_tpl->tpl_vars['dsbh']->value->tenCaSi;?>
</a></span>
                    </h4> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_album']->value, 'dab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dab']->value) {
?>
                <tr class="item">
                    <td><a href="album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dab']->value->tenAlbum;?>
</a></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" id="idAlbum" name="idAlbum" value="<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
">
                            <button class="w3-button w3-teal" type="submit" id="btn_xem" name="btn_xem">Xem bài hát</button>
                        </form>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['dab']->value->hienThi == 0 ? "Chưa duyệt" : "Đã duyệt";?>

                    </td>
                    <td>
                        <form action="quan_ly_album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
" method="post" style="float:left">
                            <button class="w3-button w3-green" type="submit" name="btn_duyet">Duyệt</button>
                        </form>
                        <form action="quan_ly_album.php?id=<?php echo $_smarty_tpl->tpl_vars['dab']->value->id;?>
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
</div><?php }
}
