<?php
/* Smarty version 3.1.30, created on 2017-11-06 19:06:08
  from "/home/wikicach/public_html/smarty/templates/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a00503097a7c6_00545942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ebee7b7821ce36f305b1502a50e7a98826b9e2' => 
    array (
      0 => '/home/wikicach/public_html/smarty/templates/head.tpl',
      1 => 1509969967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a00503097a7c6_00545942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://wikicach.com/" />
        <title>Project Nhac - By Phuc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="icon" type="image/png" href="http://wikicach.com/public/images/nhac.png" />
        <!-- Font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link href="public/css/style.css" rel="stylesheet">
        <!-- Js -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Ajax -->
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_album_ajax.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_baihat_ajax.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax_tim_kiem/tim_casi_ajax.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background: coral;">
            <div class="res-navbar row">
                <div class="row">
                    <div class="toggle-navbar col-4 hidden-lg-up">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    </div>
                    <!-- Brand -->
                    <div class="brand-navbar col-6 d-sm-none">
                        <a class="navbar-brand" href=".">Logo</a>
                    </div>
                </div>
                <div class="brand-navbar col-sm-1 col-lg-1 d-none d-sm-block">
                    <a class="navbar-brand" href=".">Logo</a>
                </div>
                <!-- Links -->

                <div class="collapse navbar-collapse col-sm-11 col-lg-11" id="nav-content">   
                    <ul class="navbar-nav row">
                        <div class="items-navbar d-none d-sm-block col-sm-6 col-lg-4">
                        <?php if (isset($_SESSION['ten'])) {?>
                            
                            <li class="d-inline">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Xin chào <?php echo $_SESSION['ten'];?>

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if (isset($_SESSION['phanQuyen'])) {?>
                                    <?php if ($_SESSION['phanQuyen'] == '1') {?>
                                        <a class="dropdown-item" href="thanh_vien.php?id=<?php echo $_SESSION['dangBoi'];?>
">Trang cá nhân</a>
                                        <span class="w3-text-teal">Bài hát</span>
                                        <a class="dropdown-item" href="them.php">Thêm bài hát</a>
                                        <a class="dropdown-item" href="them_album.php">Thêm album</a>
                                        <a class="dropdown-item" href="them_ca_si.php">Thêm ca sĩ</a>
                                        <span class="w3-text-teal">Album</span>
                                        <a class="dropdown-item" href="quan_ly_bai_hat.php">Quản lý bài hát</a>
                                        <a class="dropdown-item" href="quan_ly_album.php">Quản lý album</a>
                                        <?php } else { ?>
                                        <a class="dropdown-item" href="thanh_vien.php?id=<?php echo $_SESSION['dangBoi'];?>
">Trang cá nhân</a>
                                        <a class="dropdown-item" href="them.php">Thêm bài hát</a>
                                        <a class="dropdown-item" href="them_album.php">Thêm album</a>
                                    <?php }?>
                                <?php }?>
                                </div>
                            </li>
                            <li class="d-inline">
                                <a href="thoat.php" role="button" class="btn btn-danger ml-1 mr-2" >Thoát</a> 
                            </li>
                        <?php } else { ?>
                            <li class="d-inline">
                                <a href="dang_nhap.php" role="button" class="btn btn-success ml-1 mr-2" >Đăng nhập</a> 
                            </li>
                            <li class="d-inline">
                                <a href="dang_ky.php" role="button" class="btn btn-primary ml-1 mr-2" >Đăng ký tài khoản mới</a> 
                            </li>
                        <?php }?>
                        </div>
                        <div class="khung-tim-kiem col-12 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                            <form class="form-inline" action="#" method="post" autocomplete="off">
                                <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Nhập nội dung cần tìm kiếm">
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-album"></div>
                                <div id="result-tenBaihat"></div>
                                <div id="result-tenCaSi"></div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header><?php }
}
