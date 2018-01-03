<?php
/* Smarty version 3.1.30, created on 2017-10-25 11:40:17
  from "C:\wamp64\www\project_nhac\bang_xep_hang.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f078210adab3_80590959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c12b8d5c39d162722ef4ea7be239c9e3d446d6' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\bang_xep_hang.php',
      1 => 1508931558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f078210adab3_80590959 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include("controllers/c_bang_xep_hang.php");
$c_bang_xep_hang = new C_bang_xep_hang();
$c_bang_xep_hang->trang_xep_hang();
<?php echo '?>';
}
}
