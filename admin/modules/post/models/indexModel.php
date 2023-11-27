<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
    return $item;
}
function get_list_post() {
    $list_post = db_fetch_array("SELECT * FROM `tbl_post`");
    return $list_post;
    
}
        
function insert_list_post($data) {
    db_insert("tbl_post", $data);


}
function delete_post($id) {
    db_delete("tbl_post","`post_id` = ".$id."");
    redirect("?mod=post&action=listPost");
}
function get_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_post` WHERE `post_id` = {$id}");
    return $item;
}
function update_item_post($id, $data) {
    db_update('tbl_post', $data, "`post_id` ='{$id}'");
}
function load_all_key_word_same($keyW) {
    $result = db_fetch_array("SELECT * FROM `tbl_post` where `post_title` like '%{$keyW}%'");
    return $result;
}