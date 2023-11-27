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
        <h1>ĐĂNG KÍ TÀI KHOẢN</h1>

        <form action="" id="form-login" method="POST">
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>"
                placeholder="Fullname">
            <p class="error">
                <?php echo form_error('fullname') ?>
            </p>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
            <p class="error">
                <?php echo form_error('email') ?>
            </p>
            <input type="text" name="username" id="username" placeholder="Username"
                value="<?php echo set_value('username') ?>">
            <p class="error">
                <?php echo form_error('username') ?>
            </p>
            <input type="password" name="password" id="password" placeholder="Passowrd" value="">
            <p class="error">
                <?php echo form_error('password') ?>
            </p>

            <input type="submit" name="btn-reg" id="btn-reg" value="ĐĂNG KÝ"">
                <p class=" error">
            <?php echo form_error('account') ?>
            </p>

        </form>
        <a href=" ?mod=users&action=login" id="login">Đăng nhập</a>
    </div>
</body>

</html>