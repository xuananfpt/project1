<?php
get_header()
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" class="row">
                        <div class="col-md-4">
                            <label for="product-name">Tên sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_name" id="product-name" value="<?= $get_product['product_name'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="product-code">Mã sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_code" id="product-code" value="<?= $get_product['product_code'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="price">Giá sản phẩm</label>
                            <input class="w-100 form-control" type="text" name="product_price" id="price" value="<?= $get_product['product_price'] ?>">
                        </div>
                        <!-- <div class="col-md-4">
                            <label>Danh mục sản phẩm</label>
                            <select class="w-100 form-control" name=" parent_id">
                                <option value="">-- Chọn danh mục --</option>
                                <option value="Điện thoại" <?php if ($get_product["product_cat"] == 'Điện thoại') echo 'selected' ?>>Điện thoại</option>
                                <option value="Laptop" <?php if ($get_product["product_cat"] == 'Laptop') echo 'selected' ?>>Laptop</option>
                                <option value="Máy tính bảng" <?php if ($get_product["product_cat"] == 'Máy tính bảng') echo 'selected' ?>>Máy tính bảng</option>
                            </select>
                        </div> -->
                        <div class="col-md-4"><label>Danh mục sản phẩm</label>
                            <select class="w-100 form-control" name="parent_id">
                                <option value="0">-- Chọn danh mục --</option>
                                <?php
                                foreach ($getCat as $cat) {
                                    if ($get_product['product_cat'] == $cat['cat_id']) {
                                        echo '<option value="' . $cat['cat_id'] . '" selected>' . $cat['cat_name'] . '</option>';
                                    } else {
                                        echo '<option value="' . $cat['cat_id'] . '" >' . $cat['cat_name'] . '</option>';
                                    }
                                }
                                ?>
                                <!-- <?php
                                        show_array($getCat);
                                        foreach ($getCat as $cat) { ?>
                                    <option value="<?= $cat['cat_id'] ?>"<?= ($getCat['parent_id'] == $cat['cat_id']) ? 'selected' : ''  ?>><?= $cat['cat_name'] ?></option>
                                <?php } ?> -->
                            </select>

                        </div>
                        <div class="col-md-4">
                            <label>Số Lượng</label>
                            <input class="w-100 form-control" type="number" min=0 name="product_quantity" value="<?= $get_product['product_quantity'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="create_time">Thời gian</label>
                            <input class="w-100 form-control" type="date" name="create_time" id="create_time" value="<?= $get_product['create_time'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/<?= $get_product['product_image'] ?>" id="img" height="300px" class="w-50">
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

                        <div class="col-md-12">
                            <label for=" desc">Mô tả ngắn</label>
                            <textarea class="w-100 form-control" name="product_desc" id="desc"><?= $get_product['product_desc'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="detail">Chi tiết</label>
                            <textarea class="w-100 form-control" name="product_detail" id="desc" class=""><?= $get_product['product_detail'] ?></textarea>
                        </div>


                        <div class="mt-2">
                            <button class="btn " type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
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