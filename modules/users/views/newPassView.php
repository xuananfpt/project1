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
        <h1>    THIẾT LẬP MẬT KHẨU MỚI</h1>

        <form action="" id="form-login" method="POST">

             <input type="password" name="password" id="password" placeholder="Passowrd" value="">
            <p class="error">
                <?php echo form_error('password') ?>
            </p>
            <input type="submit" name="btn-new-pass" id="btn-reg" value="LƯU"">
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