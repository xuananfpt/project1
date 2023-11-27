<?php
get_header();
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm trang</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="post_title">Tiêu đề</label>
                        <input type="text" name="post_title" id="post_title">
                        <div class="error">
                            <?php echo form_error('post_title') ?>
                        </div>
                        <label for="post_status">Trạng thái</label>
                        <input type="text" name="post_status" id="post_status">
                        <div class="error">
                            <?php echo form_error('post_status') ?>
                        </div>
                        <label for="post_creator">Người tạo</label>
                        <input type="text" name="post_creator" id="post_creator">
                        <div class="error">
                            <?php echo form_error('post_creator') ?>
                        </div>
                        <label for="create_time">Thời gian tạo</label>
                        <input type="text" name="create_time" id="create_time">
                        <div class="error">
                            <?php echo form_error('create_time') ?>
                        </div>
                        <!-- <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea> -->
                        <label for="cat_id">Danh mục </label>
                        <select name="cat_post" id="">
                            <option value="0">Chọn danh mục</option>
                            <option value="Danh mục 1">Danh mục 1</option>
                            <option value="Danh mục 2">Danh mục 2</option>
                        </select>
                        <div class="error">
                            <?php echo form_error('cat_post') ?>
                        </div>
                        <!-- <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div> -->
                        <button type="submit" name="btn-add-post" class="btn btn-danger" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>