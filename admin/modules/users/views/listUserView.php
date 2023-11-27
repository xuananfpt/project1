<style>
    table tr td div {
        margin-top: 30px;
    }

    span {
        display: inline-block;
    }
</style>
<?php get_header(); ?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="text-center">Quản lý tài khoản

                    </h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">

                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Xóa</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <!-- <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Xóa</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Image</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Thời gian </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if (is_array($list_user)) {
                                    $count = 0;
                                    foreach ($list_user as $user) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="checkbox" name="checkItem" class="checkItem">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text "><?php echo $count ?></h3>
                                                </div>
                                            <td>
                                                <span class="tbody-thumb mt-1">

                                                    <img class="rounded-circle w-100 h-100" src="public/images/<?php echo $user['user_image'] ?>"
                                                        alt="">
                                                </span>
                                            </td>
                                            <td>
                                                <div class="tb-title fl-left text-left w-75">
                                                    <a href=""  title=""><?php echo $user['fullname'] ?></a>
                                                </div>
                                                <?php if($user['role'] != 1) {
                                                    ?>
                                                    <ul class="list-operation fl-right mt-4">
                                                    <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                                   <?php
                                                } else {
                                                    echo "";
                                                }  ?>
                                                
                                            </td>
                                            <td>
                                                <div class="tbody-text "><?php echo $user['username'] ?></div>
                                            </td>
                                            <td>
                                                <div class="tbody-text "><?php echo $user['email'] ?></div>
                                            </td>
                                            <td>
                                                <div class="tbody-text "><?php if( $user['role'] == 1){
                                                    echo "ADMIN";
                                                } else {
                                                    echo "USER";
                                                } ?></div>
                                            </td>
                                            <td>
                                                <div class="tbody-text ">
                                                    <?php
                                                            $timestamp = $user['created_date'];

                                                            // Sử dụng hàm date() để định dạng và hiển thị thời gian
                                                            $formatted_time = date("Y-m-d H:i:s", $timestamp);

                                                            echo $formatted_time;
                                                           
                                                  ?>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                } ?>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title="">
                                << /a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="post-status fl-left">
                <li class="all"><a href="">Tất cả <div class="count"><?php echo $count ?></div></a></li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>