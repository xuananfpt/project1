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
                        <label for="old-pass">Email của bạn</label>
                        <input type="email" class="input_email" style="display:block;  "   name="email" id="pass-old" placeholder="Hãy nhập email để kiểm tra tài khoản">
                       <div class="error">
                        <?php echo form_error('email'); ?>
                       </div>
                        <button type="submit" name="btn_reset" class="btn btn-danger" id="btn-submit">Xác thực</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>