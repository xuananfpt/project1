<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="public/js/app.js"></script>
    <link rel="stylesheet" href="public/css/style.css">

    <title>Hệ thống điều hướng cơ bản</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
           
<div class="user_login">
                    <?php
                    if (is_login()) {
                        ?>
                        <div id="user_name_login">
                            <p>Xin chào <strong>
                                    <?php echo $_SESSION['user_login'] ?>
                                </strong>(<a href="?mod=users&action=logout">Đăng xuất</a>)</p>
                        </div>
                        <?php
                    }
                    ?>
</div>
           
            <ul id="main-menu">
                <li><a href="?">Trang chủ</a></li>
                <li><a href="?mod=page&controller=index&action=detail&id=1">Giới thiệu</a></li>
                <li><a href="?mod=users&controller=index">Thành viên</a></li>
                <li><a href="?mod=order&controller=index">Đơn hàng</a></li>
            </ul>
        </div>