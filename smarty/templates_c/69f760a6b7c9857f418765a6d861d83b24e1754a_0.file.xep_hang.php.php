<?php
/* Smarty version 3.1.30, created on 2017-11-03 10:24:02
  from "C:\wamp64\www\project_nhac\xep_hang.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc43c26af900_15424558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69f760a6b7c9857f418765a6d861d83b24e1754a' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\xep_hang.php',
      1 => 1509704572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc43c26af900_15424558 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include("controllers/c_xep_hang.php");
$c_xep_hang = new C_xep_hang();
$c_xep_hang->trang_xep_hang();
<?php echo '?>';
}
}
