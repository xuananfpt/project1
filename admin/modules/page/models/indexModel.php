<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
    return $item;
}
function get_list_page() {
    $list_page = db_fetch_array("SELECT * FROM `tbl_page`");
    return $list_page;
    
}
        
function insert_list_page($data) {
    db_insert("tbl_page", $data);


}
function delete_page($id) {
    db_delete("tbl_page","`page_id` = ".$id."");
    redirect("?mod=page&action=listPage");
}
function get_page_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_page` WHERE `page_id` = {$id}");
    return $item;
}
function update_item_page($id, $data) {
    db_update('tbl_page', $data, "`page_id` ='{$id}'");
}
function load_all_key_word_same($keyW) {
    $result = db_fetch_array("SELECT * FROM `tbl_page` where `page_title` like '%{$keyW}%'");
    return $result;
}