<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css" type="text/css" />

    <title>Hệ thống điều hướng cơ bản</title>
</head>

<body>
    <div id="wp-form-login">
        <h1>LẤY LẠI MẬT KHẨU</h1>

        <form action="" id="form-login" method="POST">

           <input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
        <p class="error">
            <?php echo form_error('email') ?>
        </p>
            <input type="submit" name="btn-reset" id="btn-reg" value="ĐĂNG KÝ"">
                <p class=" error">
            <?php echo form_error('account') ?>
            </p>

        </form>
        <div class="ft-form">
            <a href=" ?mod=users&action=login" id="login">Đăng nhập</a> |
            <a href=" ?mod=users&action=reg" id="reg">Đăng kí</a>
        </div>
    </div>
</body>

</html>