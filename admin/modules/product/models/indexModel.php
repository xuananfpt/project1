<?php

// Lấy dữ liệu từ bảng tbl_product với trạng thái bằng 0
function get_list_product($keyw)
{

    if ($keyw != "") {
        $list_product = db_fetch_array("select * from tbl_product where product_code like '%" . $keyw . "%' or product_name like '%" . $keyw . "%'");
    } else {
        $list_product = db_fetch_array("select * from tbl_product where product_status=1");
    }
    return $list_product;
}

//Lấy dữ liệu từ bảng tbl_product và sắp xếp theo id tăng dần 
function get_list_products()
{
    $list_products = db_fetch_array("select * from tbl_product order by product_id desc");
    return $list_products;
}

//Thêm dữ liệu vào db
function insertProduct($data)
{
    db_insert("tbl_product", $data);
}
//Thêm dữ liệu ảnh vào db
function insertProduct_image($image)
{
    db_insert("product_image", $image);
}

//lấy ra sản phẩm theo id sản phẩm
function get_product_by_id($id)
{
    $product = db_fetch_row("select * from tbl_product where product_id=" . $id);
    return $product;
}

//lấy ra toàn bộ sản phẩm có trạng thái bằng 1
function get_list_product_trash()
{
    $list_product = db_fetch_array("Select * from tbl_product where product_status=0");
    return $list_product;
}

//Cập nhật dữ liệu db
function updateProduct($id, $data)
{
    db_update("tbl_product", $data, "product_id='$id'");
}

function updateProduct_image($id, $image)
{
    db_update("product_image", $image, "product_id='$id'");
}

//Xóa dữ liệu db
function deleteProduct($id)
{
    db_delete("tbl_product", "product_id='$id'");
}

//Cập nhật trạng thái dữ liệu lên 1 để làm phần xóa mềm
function del_soft_product($id, $update)
{
    db_update('tbl_product', $update, "product_id='$id'");
}

// Cập nhật trạng thái lại bằng 0 
function restore_product($id, $update)
{
    db_update('tbl_product', $update, "product_id='$id'");
}

function get_cat_product()
{
    $get_cat_product = db_fetch_array('Select * from tbl_category');
    return $get_cat_product;
}


function show_category_all_product()
{
    //Lấy ra trường dữ liệu cat_id, cat_name, cat_image và Số lượng của tất cả sp bên trong, tiếp join hay bảng tbl cat với tbl product => trạng thái hoạt động lên
    $show_cat = db_fetch_array("SELECT tbl_category.cat_id,tbl_category.cat_name, tbl_category.cat_image, COUNT(*) AS soSanPham 
    FROM tbl_category JOIN tbl_product ON tbl_category.cat_id=tbl_product.product_cat where product_status=1 GROUP BY tbl_category.cat_id 
    ORDER BY soSanPham DESC");
    return $show_cat;
}

function list_product_by_cat($id)
{
    $list_product_by_cat = db_fetch_array("select * from tbl_product where product_cat=" . $id);
    return $list_product_by_cat;
}
function get_all_product_by_cat($product_cat) {
    $list_product = db_fetch_array("Select * from tbl_product where product_cat='{$product_cat}'");
    return $list_product;
}