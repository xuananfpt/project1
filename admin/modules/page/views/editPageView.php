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
                        <label for="page_title">Tiêu đề</label>
                        <input type="text" name="page_title" id="page_title" value="<?php echo $page_item['page_title'] ?>">
                        <label for="page_status">Trạng thái</label>
                        <input type="text" name="page_status" id="page_status" value="<?php echo $page_item['page_status'] ?>">
                        <label for="page_creator">Người tạo</label>
                        <input type="text" name="page_creator" id="page_creator" value="<?php echo $page_item['page_creator'] ?>">
                        <label for="create_time">Thời gian tạo</label>
                        <input type="text" name="create_time" id="create_time" value="<?php echo $page_item['create_time'] ?>">
                        <!-- <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea> -->
                        <label for="cat_id">Danh mục </label>
                        <select name="cat_id" id="">
                            <option value="0">Chọn danh mục</option>
                            <option value="Danh mục 1" <?php if($page_item['cat_id'] == "Danh mục 1") echo "selected" ?>>Danh mục 1</option>
                            <option value="Danh mục 2" <?php if ($page_item['cat_id'] == "Danh mục 2")
                                echo "selected" ?>>Danh mục 2</option>
                        </select>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>
                        <button type="submit" name="btn-edit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>