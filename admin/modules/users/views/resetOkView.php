<?php get_header(); ?>
<div id="main-content-wp" class="change-pass-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left btn-danger">Thêm mới</a>
            <h3 id="index" class="fl-left">Đổi mật khẩu</h3>
            
        </div>
    </div>
    <div class="wrap clearfix">
        <?php get_sidebar('users') ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <p>Bạn đã thay đổi mật khẩu thành công vui lòng click vào <a href="?mod=users&action=login">link</a> sau để đăng nhập lại</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>