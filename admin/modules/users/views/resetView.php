<?php get_header(); ?>
<div id="main-content-wp" class="change-pass-page">
   
    <div class="wrap clearfix">
        <?php get_sidebar('users') ?>
            <div id="content" class="fl-right">      
                 <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left">Đổi mật khẩu</h3>
        </div>
    </div>                 
                <div class="section" id="detail-page">
                    <div class="section-detail">
                    <form method="POST">
                        <label for="new-pass">Mật khẩu mới</label>
                        <input type="password" name="password" id="pass-new">
                         <p class="error">
                        <?php echo form_error('password'); ?>
                        </p>
                        <label for="confirm-pass">Xác nhận mật khẩu</label>
                        <input type="password" name="confirm_pass" id="confirm-pass">
                         <p class="error">
                        <?php echo form_error('confirm_pass'); ?>
                        </p>
                        <button type="submit" name="btn-change-pass" class="btn btn-danger" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
