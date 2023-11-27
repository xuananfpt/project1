<?php

//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    // echo "load được vào bên trong rồi nè";
    //Auto load phần lib
    load('lib', 'email');
    //load modal phần index ra
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
}
//Tạo ra một file đăng kí như này
function regAction()
{
    global $error, $username, $password, $email, $fullname;
    //Đi validata nhưng trước khi val thì phải có phần regView.phhp để load lên đây
    if (isset($_POST['btn-reg'])) {
        $error = array();
        //Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            $fullname = $_POST['fullname'];
        }
        #kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường username";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra Email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống trường email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        #Kiểm tra Password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Pass không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }

        #kết luận
        if (empty($error)) {
            //Kiểm tra user và email này có tồn tại trên hệ thống hay chưa
            if (!user_exists($username, $email)) {
                //Tạo ra mã kích md5 mã hoá 
                //Phần thứ 2 kích hoạt tài khoản thông qua email()
                //Bước đầu tạo trường trên database rồi nén các $active_token này lên data_base
                $active_token = md5($username . time());
                //Đi thêm dữ liệu vào bảng tbl_users_byan
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'active_token' => $active_token
                );
                //Thêm dữ liệu data lên trên database
                add_user($data);
                //Gửi email cho người dùng rồi lấy mã $active_token xuống rồi thực hiện
                $link_active = "http://localhost/unitop/back-end/lession/section-28/projectmvc.vn/?mod=users&action=active&active_token=$active_token";
                $content = "<p>Chào bạn A</p>
<p>Bạn vui lòng click vào đường link này để kích hoạt tài khoản: {$link_active}</p>
<p>Nếu khoong phải đăng ký tài khoản thì hãy bỏ qua email này</p>
<p>Team Support Unitop.vn</p>";
                send_mail('nguyenxuanann08@gmail.com', "Nguyen Xuan An", "Kich hoat tai khoan PHP MASTER", $content);
                //Thông báo 
                redirect("?mod=users&action=login");
            } else {
                $error['account'] = "Email hoặc username đã tồn tại trên hệ thống";
            }
        }
    }

    load_view('reg');
}
function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn-login'])) {
        $error = array();
        #kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường username";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Pass không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        #Kết luận
        if (empty($error)) { {

                if (check_login($username, $password)) {
                    // Lưu trữ phiên đăng nhập
                    $_SESSION['is_login'] = true;
                    $_SESSION['user_login'] = $username;
                    //Chuỷen hướng vào trong hệ thống
                    redirect("?");

                } else {
                    $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
                }
            }
        }
    }
    load_view('login');
}
// //Đi vào bên trong ACT
function activeAction()
{
    //Sau khi lấy được active_token xuống thì đi check xem nó có từ trước hay chưa (giống active_token hiện tại) và đi kiểm tra
    //Và active_token của mã này được có is_active = 0 hay không rồi đi vào active_users...
    $active_token = $_GET['active_token'];
    //Check xem active này nó bằng 0 và có mã giống với $active_token của mình rồi => rồi đi vào
    if (check_active_token($active_token)) {
        //Update vào is_active = 1
        active_users($active_token);
        $link_login = base_url("?mod=users&action=login");
        echo "Bạn đã kích hoạt thành công, vui lòng đăng nhập: <a href='$link_login'>Đăng nhập</a> ";
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ hoặc tài khoản đã được kích hoạt từ trước đó";
    }
}
function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}
function resetAction()
{
    global $error, $email;
    $reset_token = $_GET['reset_token'];
    //Nếu như nó tồn tại cái $reset_token thì 
    if (!empty($reset_token)) {
        if(check_reset_token($reset_token)) {
            //Tạo ra một cái form mới cho người dùng nhập mật khẩu mới
            global $errorm, $password;
            
            if(isset($_POST['btn-new-pass'])) {
                $error = array();
                #Kiểm tra password
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống trường password";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Pass không đúng định dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                if(empty($error)) {
                    $data = array(
                        'password' => $password
                    );
                    //Update cho pass thông qua điều kiện nó giống nhau giữa trên url email vào database;
                    update_pass($data, $reset_token);
                    //Chuyểnn người dùng tới phần mới thay đổi mật khẩu thành công
                    redirect("?mod=users&action=resetOk");
                }
            }
            load_view('newPass');
        } else {
            echo "Yêu cầu lấy lại không hợp lệ";
        }
    } else {
        //Khi chưa có thì yêu cầu thực hiện xác thực tài khoản qua một cái form
        #Kiểm tra Email                           
        if (isset($_POST['btn-reset'])) {
            $error = array();

            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống trường email";
            } else {
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }

            }
            if (empty($error)) {
                if (check_email($email)) {
                    //Tạo ra mã cho người dùng kích hoạt
                    $reset_token = md5($email . time());
                    //Mảng dữ liệu để update dữ liệu
                    $data = array(
                        'reset_token' => $reset_token
                    );
                    //update dữ liệu thông qua điều kiện $email nhập vào giống trên database
                    update_reset_token($data, $email);
                    $link_reset = base_url("?mod=users&action=reset&reset_token=$reset_token");
                    //Cập nhật mã reset pass cho user cần khôi phục mật khẩu
                    //Gửi link cho email của người dùng
                    $content = "<p>Bạn vui lòng click vào link sau để khôi phục mật khẩu: {$link_reset}</p>
                <p>Nếu không phải yêu cầu của bạn vui lòng bỏ qua email này</p>
                <p>Nguyễn Xuân Ancd</p>";
                    send_mail($email, "Người dùng php Admin", "Khôi phúc mật khẩu PHP MASTER", $content);

                } else {
                    $error['account'] = "Email không tồn tại trên hệ thống";
                }
            }
        }
        load_view('reset');
    }

}
function resetOkAction() {
    load_view('resetOK');
}