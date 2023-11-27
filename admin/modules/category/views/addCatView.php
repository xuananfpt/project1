
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
                            <input class="w-100 form-control" type="text" name="title" id="title">
                            <span><?php echo form_error('title') ?></span>
                        </div>
                        <div class="col-md-4">
                            <label>Danh mục cha</label>
                            <select class="w-100 form-control" name="parent_id">
                             <option value="0" selected>-- Chọn danh mục --</option>
                             <?php 
                                if(is_array($cat_parent)) {
                                    foreach($cat_parent as $item) {
                                        ?>
                                        <option value="<?php echo $item['cat_id'] ?>" ><?php echo $item['cat_name'] ?></option>
                                        <?php
                                    }
                                }
                              ?>
                                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="create_time">Thời gian</label>
                            <input class="w-100 form-control" type="date" name="create_time" id="create_time">
                            <span><?php echo form_error('create_time') ?></span>
                        </div>
                        <div class="col-md-12"><label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/noimage.jpg" id="img" height="300px" class="w-25">
                                <input class="d-none" type="file" name="cat_image" id="upload">
                                <label for="upload" class="w-25 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label>
                            </div>
                        </div>

                        <div class="ml-3 mt-2">
                            <button class="btn btn-danger" type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let img = document.getElementById("img");
    let upload = document.getElementById("upload");

    upload.onchange = (e) => {
        if (upload.files[0]) {
            img.src = URL.createObjectURL(upload.files[0]);
        }
    };
</script>
<?php get_footer() ?>