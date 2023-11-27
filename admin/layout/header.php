<!DOCTYPE html>
<html>

<head>
    <title>Quản lý ISMART</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>


   

</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp" class="bg-danger">
                <div class="wp-inner clearfix">
                    <a href="?page=home" title="" id="logo" class="fl-left">DASTORE</a>
                    <ul id="main-menu" class="fl-left">
                        <li>
                            <a href="?page=list_post" title="">Trang chủ</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=home" title="">Quản lý trang chủ</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=list_customer" title="">Tài khoản</a>
                            <ul class="sub-menu">
                              
                                <li>
                                    <a href="?page=list_customer" title="">Danh sách khách hàng</a>
                                </li>
                           
                            </ul>
                        </li>
                         <li>
                            <a href="?page=list_cat" title="">Danh mục</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=add_cat" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?page=list_cat" title="">Danh sách danh mục</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=list_product" title="">Sản phẩm</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=add_product" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?page=list_product" title="">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="?page=list_cat" title="">Danh mục sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Bài viết</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=add_post" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?page=list_post" title="">Danh sách bài viết</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Bình luận</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=list_order" title="">Quản lý bình luận</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Đơn hàng</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=list_order" title="">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                    <a href="?page=list" title="">Danh sách khách hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=menu" title="">Menu</a>
                        </li>
                    </ul>
                    <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                        <button class="dropdown-toggle clearfix" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                            <div id=""  class="fl-left">
                                <img width="50px" class="rounded-circle" height="auto" src="public/images/<?php if (!empty($_SESSION['image_user']))
                                    echo $_SESSION['image_user'] ?>">
                            </div>
                            <h3 id="account" class="fl-right"><?php     if(!empty($_SESSION['user_login'])) echo $_SESSION['user_login'] ?></h3>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="?mod=users&action=update" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                            <li><a href="?mod=users&action=logout" title="Thoát">Thoát</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            