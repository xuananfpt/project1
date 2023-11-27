<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct() {
    load_model('index');

}
// //Đặt tên đúng cách
function indexAction() {
    load_view('index');
}
// //Đi vào bên trong ACT

function listPageAction()

{
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search'];
        // echo "Bạn đang muốn tìm kiếm gì ư?";
        $list_page = load_all_key_word_same($search);
        $data['list_page'] = $list_page;
        load_view('listPage', $data);
    } else {
        $list_page = get_list_page();
        // show_array($list_page);
        $data['list_page'] = $list_page;
        load_view('listPage', $data);
    }
    
    
}
function addPageAction()
{
    if(isset($_POST['btn-submit']) ){
        $error = array();
        if(empty($_POST['page_title'])) {
            $error['page_title'] = "Không được để trông trường này";
        } else {
            $page_title = $_POST['page_title'];
        }
        //title
        if (empty($_POST['page_title'])) {
            $error['page_title'] = "Không được để trông trường này";
        } else {
            $page_title = $_POST['page_title'];
        }
        //status
        if (empty($_POST['page_status'])) {
            $error['page_status'] = "Không được để trông trường này";
        } else {
            $page_status = $_POST['page_status'];
        }
        //page_creator
        if (empty($_POST['page_creator'])) {
            $error['page_creator'] = "Không được để trông trường này";
        } else {
            $page_creator = $_POST['page_creator'];
        }
        //cat_id
        if (empty($_POST['cat_id'])) {
            $error['cat_id'] = "Không được để trông trường này";
        } else {
            $cat_id = $_POST['cat_id'];
        }
        //create_time
        if (empty($_POST['create_time'])) {
            $error['create_time'] = "Không được để trông trường này";
        } else {
            $create_time = $_POST['create_time'];
        }

        // $page_status = $_POST['page_status'];
        // $page_creator = $_POST['page_creator'];
        // $cat_id = $_POST['cat_id'];
        // $create_time = $_POST['create_time'];
        if(empty($error)) {
            $data = array(
                'page_title' => $page_title,
                'page_status' => $page_status,
                'page_creator' => $page_creator,
                'cat_id' => $cat_id,
                'create_time' => $create_time,
            );
            insert_list_page($data);
            redirect("?mod=page&action=listPage");
        }

    }
    load_view('addPage');
}
function deletePageAction() {
    $id = $_GET['id'];
    // echo $idPage;
    delete_page($id);
}
function editPageAction() {

    $id = $_GET['id'];

    if (isset($_POST['btn-edit'])) {
       
        $page_title = $_POST['page_title'];
        
        $page_title = $_POST['page_title'];
       
        $page_status = $_POST['page_status'];
       
        $page_creator = $_POST['page_creator'];
       
        $cat_id = $_POST['cat_id'];
       
        $create_time = $_POST['create_time'];
     
        show_array($_POST);
        $data = array(
            'page_title' => $page_title,
            'page_status' => $page_status,
            'page_creator' => $page_creator,
            'cat_id' => $cat_id,
            'create_time' => $create_time,
        );
        update_item_page($id, $data);
        redirect("?mod=page&action=listPage");
    }
  
        $page_item = get_page_by_id($id);
        $data1['page_item'] = $page_item;
        load_view('editPage', $data1);
}