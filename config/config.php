<?php
session_start();
ob_start();
/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://localhost/unitop/back-end/project/ismart.com/";
//Điều hướng trước kia mod act ....
//Điều hướng chuyên nghiệp hơn ... muốn đi vào mặc đi thì cần khai báo mặc định là được

$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';












