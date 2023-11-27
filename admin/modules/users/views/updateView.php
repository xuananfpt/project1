<?php
get_header();
?>
<style>
    svg {
        width: 50px;
        height: 50px;
    }
</style>
<div id="main-content-wp" class="info-account-page">
    <div class="wrap clearfix">
        <?php
        get_sidebar('users');
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
        <div class="clearfix ">
            <h3 id="index" class="">Cập nhật tài khoản</h3>
        </div>
    </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="display-name">Tên hiển thị</label>
                        <input type="text" name="fullname" id="display-name"
                            value="<?php echo $info_user['fullname'] ?>">
                                <p class="error">
                                    <?php echo form_error('fullname') ?>
                                </p>
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" placeholder="<?php echo user_login() ?>" readonly="readonly">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $info_user['email'] ?>">
                                <label for="tel">Số điện thoại</label>
                                <input type="tel" name="phone_number" id="tel" value="<?php echo $info_user['phone_number'] ?>">
                                <p class="error">
                                    <?php echo form_error('phone_number') ?>
                                </p>
                                <label for="address">Địa chỉ</label>
                                <textarea class="w-100" height="80px" name="address" id="address"><?php echo $info_user['address'] ?></textarea>
                                <p class="error">
                                    <?php echo form_error('address') ?>
                                </p>
                              
                            </div>
                            <div class="col-md-6">
                                 <!-- Ảnh danh mục nè -->
                                
                                <label for="" class="form-label fw-semibold fs-5 mt-1">Ảnh của user</label>
                                <?php if (isset($info_user['user_image'])) ?>
                                <img class="w-50" src="public/images/<?php echo $info_user['user_image'] ?>" alt="">
                                <?php ?>
                                <label for="imagemain" class="p-4 w-50 text-center bg-dark text-light image rounded-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-1 h-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                
                                </label>
                                <input type="file" class="form-control-file d-none" name="image" id="imagemain">
                                <!-- <p class="text-danger fs-6 mt-1 fw-bolder">Có ảnh rồi nè</p> -->
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="btn-update" class="btn btn-danger" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>