<?php
/* Smarty version 3.1.30, created on 2017-10-23 11:29:49
  from "C:\wamp64\www\project_nhac\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edd2ad244086_51111205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dceaf0d4b927388df13701d87938b2e71a8692f7' => 
    array (
      0 => 'C:\\wamp64\\www\\project_nhac\\smarty\\templates\\header.tpl',
      1 => 1508757792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edd2ad244086_51111205 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background: coral;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="#">Logo</a>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="nav-content">   
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
                </li>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Nhập nội dung cần tìm kiếm">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Tìm</button>
                </form>
            </ul>
        </nav>
    </header><?php }
}
