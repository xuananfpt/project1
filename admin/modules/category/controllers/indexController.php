<?php
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
    $list_cat = get_list_cat($keyw);
    $data['list_cat'] = $list_cat;
    load_view('index', $data);
}
function addCatAction()
{
    //Đầu tiên trên database xuất hiện một tường dl là parent_id
    //Lấy toàn bộ parent_id có chỉ số là 0 vì là danh mục to nhất 
    $cat_parent = select_cat_parent();
    $data['cat_parent'] = $cat_parent;
    //Rồi đẩy dữ liệu sảng bên op select để lấy dữ liệu
    global $error;
    if (isset($_POST['btn-submit'])) {
        if (empty($_POST['title'])) {
            $error['title'] = "Vui lòng nhập";
        } else {
            $cat_name = $_POST['title'];
        }
        if (empty($_POST['create_time'])) {
            $error['create_time'] = "Vui lòng nhập";
        } else {
            $create_time = $_POST['create_time'];
        }
        $parent_id = $_POST['parent_id'];
        $cat_image = $_FILES['cat_image']['name'];
        //Đẩy file ảnh lên phần thêm dữ liệu lên trên database
        $tardir = "public/images/";
        $tardir_file = $tardir . basename($_FILES['cat_image']['name']);
        move_uploaded_file($_FILES['cat_image']['tmp_name'], $tardir_file);
        if (empty($error)) {
            $data = array(
                'cat_name' => $cat_name,
                'cat_image' => $cat_image,
                'parent_id' => $parent_id,
                'create_time' => $create_time
            );
            //Cập nhật dữ liệu dữ liệu
            insert_cat($data);
            //Chuyển hướng sang phần index
            redirect('?mod=category&action=index');
        }
    }
    load_view('addCat', $data);
}
function editCatAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $id = $_GET['id'];
    $get_cat = get_cat_by_id($id);
    $list_cat = get_list_cat($keyw);
    $data['list_cat'] = $list_cat;
    $data['get_cat'] = $get_cat;
    if (isset($_POST['btn-submit'])) {

        $cat_name = $_POST['title'];
        $parent_id = $_POST['parent_id'];
        $create_time = $_POST['create_time'];

        $tardir = "public/images/";
        $tardir_file = $tardir . basename($_FILES['cat_image']['name']);
        if ($_FILES['cat_image']['name'] == "") {
            $cat_image = $get_cat['cat_image'];
        } else {
            $cat_image = $_FILES['cat_image']['name'];
            move_uploaded_file($_FILES['cat_image']['tmp'], $tardir_file);
        }
        $data = array(
            'cat_name' => $cat_name,
            'cat_image' => $cat_image,
            'parent_id' => $parent_id,
            'create_time' => $create_time
        );
        update_cat($id, $data);
        redirect('?mod=category&action=index');
    }

    load_view('editCat', $data);
}
function delCatsoftAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_cat = get_list_cat($keyw);
    $id = $_GET['id'];
    $data['list_cat'] = $list_cat;
    $update = array(
        'cat_status' => 0
    );
    $delsoft = del_soft_cat($id, $update);
    redirect('?mod=category&action=index');
    load_view('delCatsoft', $data);
}
function resCatAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_cat = get_list_cat($keyw);
    $id = $_GET['id'];
    $data['list_cat'] = $list_cat;
    $update = array(
        'cat_status' => 0
    );
    $restore = restore_cat($id, $update);

    load_view('resCat', $data);
    redirect('?mod=category&action=index');
}
function delCatAction()
{
    $id = $_GET['id'];
    delete_cat($id);
    load_view('delCat');
    redirect('?mod=category&actin=index');
}
function trashCatAction()
{
    $list_cat_trash = get_list_cat_trash();
    $data['list_cat_trash'] = $list_cat_trash;
    load_view('trashCat', $data);
}
