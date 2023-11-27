<?php

use Aws\S3\Model\MultipartUpload\UploadId;

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
    ob_start();
}

function indexAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_product = get_list_product($keyw);
    $data['list_product'] = $list_product;
    load_view('index', $data);
}
function listProductAction()
{

    $list_products = get_list_products();
    $data['list_products'] = $list_products;
    load_view('listProduct', $data);
}
function addProductAction()
{
    global $error;
    $getCat = get_cat_product();
    $data['getCat'] = $getCat;
    // show_array($getCat);
    if (isset($_POST['btn-submit'])) {
        if (empty($_POST['product_code'])) {
            $error['product_code'] = "Vui lòng nhập";
        } else {
            $product_code = $_POST['product_code'];
        }
        if (empty($_POST['product_name'])) {
            $error['product_name'] = "Vui lòng nhập";
        } else {
            $product_name = $_POST['product_name'];
        }
        if (empty($_POST['product_price'])) {
            $error['product_price'] = "Vui lòng nhập";
        } else {
            $product_price = $_POST['product_price'];
        }
        if (empty($_POST['product_desc'])) {
            $error['product_desc'] = "Vui lòng nhập";
        } else {
            $product_desc = $_POST['product_desc'];
        }
        if (empty($_POST['product_detail'])) {
            $error['product_detail'] = "Vui lòng nhập";
        } else {
            $product_detail = $_POST['product_detail'];
        }
        if (empty($_POST['product_quantity'])) {
            $error['product_quantity'] = "Vui lòng nhập";
        } else {
            $product_quantity = $_POST['product_quantity'];
        }
        if (empty($_POST['create_time'])) {
            $error['create_time'] = "Vui lòng nhập";
        } else {
            $create_time = $_POST['create_time'];
        }


        $product_cat = $_POST['parent_id'];
        $product_image = $_FILES['product_image']['name'];
        $tardir = "public/images/";
        $tardir_file = $tardir . basename($_FILES['product_image']['name']);
        move_uploaded_file($_FILES['product_image']['tmp_name'], $tardir_file);


        //Lấy dữ liệu
        // $get_image = get_list_products();
        // // show_array($get_image);
        // //kiểu dữ liệu trả về mảng 2 chiều, lấy phần tử đầu tiên là 0
        // $id_pros = $get_image[0]['product_id'];

        // $id_pro = $id_pros + 1;
        // $images = $_FILES['images']['name'];

        if (empty($error)) {
            $data = array(
                'product_code' => $product_code,
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_desc' => $product_desc,
                'product_detail' => $product_detail,
                'product_cat' => $product_cat,
                'product_quantity' => $product_quantity,
                'create_time' => $create_time,
                'product_image' => $product_image

            );
            insertProduct($data);
            // foreach ($images as $key => $value) {
            //     $tardir_files = $tardir . $value;


            //     move_uploaded_file($_FILES['images']['tmp_name'][$key], $tardir_files);
            //     $image = array(
            //         'product_id' => $id_pro,
            //         'image_name' => $value
            //     );
            //     insertProduct_image($image);
            // }



            redirect('?mod=product&action=index');
        }
    }
    load_view('addProduct', $data);
}
function editProductAction()
{
    $id = $_GET['id'];
    $getCat = get_cat_product();
    $data['getCat'] = $getCat;
    $get_product = get_product_by_id($id);
    $data['get_product'] = $get_product;
    if (isset($_POST['btn-submit'])) {
        $product_code = $_POST['product_code'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_detail = $_POST['product_detail'];
        $product_cat = $_POST['parent_id'];
        $product_quantity = $_POST['product_quantity'];
        $create_time = $_POST['create_time'];
        // $product_image = $_FILES['product_image']['name'];
        $tardir = "public/images/";
        $tardir_file = $tardir . basename($_FILES['product_image']['name']);
        if ($_FILES['product_image']['name'] == "") {
            $product_image = $get_product['product_image'];
        } else {
            $product_image = $_FILES['product_image']['name'];
            move_uploaded_file($_FILES['product_image']['tmp_name'], $tardir_file);
        }
        // if (move_uploaded_file($_FILES['product_image']['tmp_name'], $tardir_file)) {
        // }
        $data = array(
            'product_code' => $product_code,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_desc' => $product_desc,
            'product_detail' => $product_detail,
            'product_cat' => $product_cat,
            'product_quantity' => $product_quantity,
            'create_time' => $create_time,
            'product_image' => $product_image

        );
        // show_array($data);
        updateProduct($id, $data);
        redirect('?mod=product&action=index');
    }
    load_view('editProduct', $data);
}
function delProductAction()
{
    $id = $_GET['id'];
    $del_product = deleteProduct($id);
    redirect('?mod=product&action=trashProduct');
}
function delProductsoftAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_product = get_list_product($keyw);

    $id = $_GET['id'];
    $data['list_product'] = $list_product;
    $update = array(
        'product_status' => 0
    );
    $delsoft = del_soft_product($id, $update);
    redirect('?mod=product&action=index');
    // load_view('delProductsoft', $data);
}
function resProductAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_product = get_list_product($keyw);
    $id = $_GET['id'];
    $data['list_product'] = $list_product;
    $update = array(
        'product_status' => 1
    );
    $restore = restore_product($id, $update);

    load_view('resProduct', $data);
    redirect('?mod=product&action=index');
}
function trashProductAction()
{
    $list_product_trash = get_list_product_trash();
    $data['list_product_trash'] = $list_product_trash;
    load_view('trashProduct', $data);
}
function manaProductAction()
{
    $list_product_sta = show_category_all_product();

    $data['list_product_sta'] = $list_product_sta;
    load_view('manaProduct', $data);
}

function detailCatAction()
{
    // echo "Xin chào mọi người nha";
    if (isset($_GET['product_cat'])) {
        $product_cat = $_GET['product_cat'];
        $list_product_by_cat = get_all_product_by_cat($product_cat);
        // show_array($list_product_by_cat);
        $data['list_product_by_cat'] = $list_product_by_cat;
        load_view('detailCat',$data);
    }
}