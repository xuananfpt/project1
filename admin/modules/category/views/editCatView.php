<?php get_header() ?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới danh mục</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" class="row">
                        <div class="col-md-4">
                            <label for="title">Tên danh mục</label>
                            <input class="w-100 form-control" type="text" name="title" id="title" value="<?= $get_cat['cat_name'] ?>">

                        </div>
                        <div class="col-md-4">
                            <label>Danh mục cha</label>
                            <select class="w-100 form-control" name="parent_id">
                                <option value="0">-- Chọn danh mục --</option>
                                <?php foreach ($list_cat as $item_cat) {

                                ?>
                                    <option value="<?= $item_cat['cat_id'] ?>" <?= ($get_cat['parent_id'] == $item_cat['cat_id']) ? 'selected' : ''  ?>><?= $item_cat['cat_name'] ?></option>
                                    <!-- <option value="2">Máy tính bảng</option>
                            <option value="3">Laptop</option> -->
                                <?php } ?>
                            </select>

                        </div>

                        <div class="col-md-4">
                            <label for="create_time">Thời gian</label>
                            <input class="w-100 form-control" type="date" name="create_time" id="create_time" value="<?= $get_cat['create_time'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/<?= $get_cat['cat_image'] ?>" id="img" height="300px" class="w-25">
                                <input class="d-none" type="file" name="cat_image" id="upload">
                                <label for="upload" class="w-25 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-danger" type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php get_footer() ?>