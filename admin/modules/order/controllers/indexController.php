<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct() {
  

}
// //Đặt tên đúng cách
function indexAction() {
    load_view('index');
}
// //Đi vào bên trong ACT


function listOrderAction() {
    load_view('listOrder');
}
function listCustomerAction()
{
    load_view('listCustomer');
}