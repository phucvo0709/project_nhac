<!DOCTYPE html>
<html lang="vi">
    <head>
        <base href="http://localhost/project_nhac/" />
        <title>Project Nhac - By Phuc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="icon" type="image/png" href="public/images/nhac.png" />
        <!-- Font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link href="public/css/style.css" rel="stylesheet">
        <!-- Js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <!-- Ajax -->
        <script src="public/js/ajax_tim_kiem/tim_album_ajax.js"></script>
        <script src="public/js/ajax_tim_kiem/tim_baihat_ajax.js"></script>
        <script src="public/js/ajax_tim_kiem/tim_casi_ajax.js"></script>
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
                        {if isset($smarty.session.ten)}
                            {* <li class="d-inline">
                                <button class="w3-button">Xin chào {$smarty.session.ten} <span class="fa fa-caret-down"></span></button>
                            </li> *}
                            <li class="d-inline">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Xin chào {$smarty.session.ten}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {if isset($smarty.session.phanQuyen)}
                                    {if $smarty.session.phanQuyen =='1'}
                                        <a class="dropdown-item" href="thanh_vien.php?id={$smarty.session.dangBoi}">Trang cá nhân</a>
                                        <span class="w3-text-teal">Bài hát</span>
                                        <a class="dropdown-item" href="them.php">Thêm bài hát</a>
                                        <a class="dropdown-item" href="them_album.php">Thêm album</a>
                                        <a class="dropdown-item" href="them_ca_si.php">Thêm ca sĩ</a>
                                        <span class="w3-text-teal">Album</span>
                                        <a class="dropdown-item" href="quan_ly_bai_hat.php">Quản lý bài hát</a>
                                        <a class="dropdown-item" href="quan_ly_album.php">Quản lý album</a>
                                        {else}
                                        <a class="dropdown-item" href="thanh_vien.php?id={$smarty.session.dangBoi}">Trang cá nhân</a>
                                        <a class="dropdown-item" href="them.php">Thêm bài hát</a>
                                        <a class="dropdown-item" href="them_album.php">Thêm album</a>
                                    {/if}
                                {/if}
                                </div>
                            </li>
                            <li class="d-inline">
                                <a href="thoat.php" role="button" class="btn btn-danger ml-1 mr-2" >Thoát</a> 
                            </li>
                        {else}
                            <li class="d-inline">
                                <a href="dang_nhap.php" role="button" class="btn btn-success ml-1 mr-2" >Đăng nhập</a> 
                            </li>
                            <li class="d-inline">
                                <a href="dang_ky.php" role="button" class="btn btn-primary ml-1 mr-2" >Đăng ký tài khoản mới</a> 
                            </li>
                        {/if}
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
    </header>