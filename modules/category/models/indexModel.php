<?php
function get_list_cat($keyw)
{
    
    if ($keyw != "") {
        $list_cat = db_fetch_array("Select * from tbl_category where cat_name like '%" . $keyw . "%' ");
    } else {
        $list_cat = db_fetch_array("Select * from tbl_category where cat_status=0");
    }
    return $list_cat;
}
function get_list_cat_trash()
{
    $list_cat = db_fetch_array("Select * from tbl_category where cat_status=1");
    return $list_cat;
}
function insert_cat($data)
{
    db_insert('tbl_category', $data);
}
function get_cat_by_id($id)
{
    $get_cat = db_fetch_row("Select * from tbl_category where cat_id='$id'");
    return $get_cat;
}
function update_cat($id, $data)
{
    db_update("tbl_category", $data, "cat_id='$id'");
}
function delete_cat($id)
{
    db_delete('tbl_category', "cat_id='$id'");
}
function del_soft_cat($id, $update)
{
    db_update('tbl_category', $update, "cat_id='$id'");
}
function restore_cat($id, $update)
{
    db_update('tbl_category', $update, "cat_id='$id'");
}
