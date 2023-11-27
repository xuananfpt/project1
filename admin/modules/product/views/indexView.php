<?php get_header() ?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?mod=product&action=addProduct" title="" id="add-new" class="fl-left btn btn-danger">Thêm mới</a>
                    <form method="POST" class="form-s fl-right mt-4 ">
                            <input type="text" name="keyw" id="s">
                            <input type="submit" name="btn-submit" value="Tìm kiếm">
                        </form>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">

                        
                    </div>
                    <!-- <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <!-- <th>Mô tả</th>
                                    <th>Chi tiết</th> -->
                                    <th>Danh mục cha</th>
                                    <th>Số lượng</th>
                                    <!-- <th>Người tạo</th> -->
                                    <th>Thời gian</th>
                                    <!-- <th>Access</th> -->

                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <?php
                                    $stt = 0;
                                    foreach ($list_product as $item) {
                                        $stt++; ?>

                                        <td>
                                            <div class="text-center">
                                                <input type="checkbox" name="checkItem" class="checkItem">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tbody-text  text-center">
                                                <?= $stt ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tb-title fl-left  text-center ">
                                                <a href="" title=""><?= $item['product_code'] ?></a>
                                            </div>
                                            <ul class="list-operation fl-right ">
                                                <li><a href="?mod=product&action=editProduct&id=<?= $item['product_id'] ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                <li><a href="?mod=product&action=delProductsoft&id=<?= $item['product_id'] ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <span class="tbody-thumb  text-center">

                                                <img class="" width="150px" height="auto" src="public/images/<?= $item['product_image'] ?>" alt="">
                                            </span>
                                        </td>
                                        <td>
                                            <div class="tbody-text  text-center"><?= $item['product_name'] ?></div>
                                        </td>
                                        <td>
                                            <div class="text-center"><?= $item['product_price'] ?></div>
                                        </td>

                                        <!-- <td>
                                            <div class="tbody-text text-center"></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text text-center"></div>  
                                        </td> -->
                                        <td>
                                            <div class="tbody-text text-center"><?= $item['product_cat'] ?></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text text-center"><?= $item['product_quantity'] ?></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text text-center"><?= $item['create_time'] ?></div>
                                        </td>

                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">
                    <ul class="post-status fl-left">
                        <li class="all"><a href="">Tất cả <span class="count">(<?= $stt ?>)</span></a> |</li>
                        <!-- <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                        <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li> -->
                        <li class="pending"><a href="?mod=product&action=trashProduct">Thùng rác<span class="count"></span></a></li>
                    </ul>
                    </p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title="">
                                < /a>
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
        </div>
    </div>
</div>
<?php get_footer() ?>