<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users_byan`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users_byan` WHERE `user_id` = {$id}");
    return $item;
}
