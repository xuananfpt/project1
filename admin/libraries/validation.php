<?php
function is_username($username) {
    //Biểu thức chính quy.
    //RegexUsername
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    //Biển có thể A-Z a-z 0-9 Và có dấu . dấu _ và ít nhất là {6-32} ký tự.
    //preg_match(Biểu thức chính quy, Giá trị nhập vào) => Đúng in tra true; sai in ra false
    if (!preg_match($partten, $_POST['username'], $matchs))
        return false;
    return true;
}


function is_password($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $_POST['password'], $matchs))
        return false;
    return true;
}
function is_pass_new($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $_POST['pass_new'], $matchs))
        return false;
    return true;
}
function is_pass_odd($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $_POST['pass_odd'], $matchs))
        return false;
    return true;
}

function is_email($email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}


function is_phone($phone)
{
    $partten = "/^(09|08|01|03)+([0-9]{8})$/";
    if (!preg_match($partten, $_POST['phone_number'], $matchs))
        return false;
    return true;
}
//Xuất lỗi cho người dùng
function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field])) 
    return $error[$label_field];
}
//Lưu giá trị khi đúng
function set_value($label_filed) {
    //Tên biến thôi bạn ơi
    global $$label_filed;
    if (!empty($$label_filed))
        echo $$label_filed;
}
function redirect_to($url) {
    if(!empty($url)) {
        header("Location: $url");
    }
}
function redirect($url)
{
    if (!empty($url)) {
        header("Location: $url");
    }
}
