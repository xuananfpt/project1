<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm sản phẩm</h3>
                </div>
            </div>
            <div class="section " id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" class="row">
                        <div class="col-md-4">
                            <label for="product-name">Tên sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_name" id="product-name">
                            <span><?php echo form_error('product_name') ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="product-code">Mã sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_code" id="product-code">
                            <span><?php echo form_error('product_code') ?></span>
                        </div>
                        <div class="col-md-4"><label for="price">Giá sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_price" id="price">
                            <span><?php echo form_error('product_price') ?></span>
                        </div>

                        <div class="col-md-4"><label>Danh mục sản phẩm</label>
                            <select class="w-100 form-control" name="parent_id">
                                <option value="0">-- Chọn danh mục --</option>
                                <?php
                                show_array($getCat);
                                foreach ($getCat as $cat) { ?>
                                    <option value="<?= $cat['cat_id'] ?>"><?= $cat['cat_name'] ?></option>
                                <?php } ?>
                            </select>
                            <!-- <label>Danh mục sản phẩm</label>
                            <select class="w-100 form-control" name="parent_id">
                                <option value="">-- Chọn danh mục --</option>
                                <option value="Điện thoại">Điện thoại</option>
                                <option value="LapTop">LapTop</option>
                                <option value="Máy Tính Bảng">Máy Tính Bảng</option>
                            </select> -->
                        </div>
                        <div class="col-md-4">
                            <label>Số lượng</label>
                            <input class="w-100 form-control" type="number" min=0 name="product_quantity" id="quantity">
                            <span><?php echo form_error('product_quantity') ?></span>
                        </div>
                        <div class="col-md-4"><label for="create_time">Thời gian</label>
                            <input class="w-100 form-control" type="date" name="create_time" id="create_time">
                            <span><?php echo form_error('create_time') ?></span>
                        </div>


                        <div class="col-md-6"><label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/noimage.jpg" id="img" height="300px" class="w-50">
                                <input class="d-none" type="file" name="product_image" id="upload">
                                <label for="upload" class="w-50 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6"><label>Hình ảnh Phụ</label>
                            <div id="uploadFile">
                                <img src="public/images/noimage.jpg" id="img" height="300px" class="w-50">
                                <input multiple="multiple" type="file" name="images[]" id="upload">
                                <!-- <label for="upload" class="w-50 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label> -->
                            </div>
                        </div>


                        <div class="col-md-12"><label for="desc">Mô tả ngắn</label>
                            <textarea name="product_desc" id="desc" class="form-control w-100"></textarea>
                            <span><?php echo form_error('product_desc') ?></span>
                        </div>

                        <div class="col-md-12"><label for="detail">Chi tiết</label>
                            <textarea name="product_detail" id="desc" class="form-control w-100"></textarea>
                            <span><?php echo form_error('product_detail') ?></span>
                        </div>

                        <div class="mt-2">
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
<?php
get_footer()
?>