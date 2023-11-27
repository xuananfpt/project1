<?php get_header() ?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thùng rác</h3>
                    <!-- <a href="?mod=product&action=addProduct" title="" id="add-new" class="fl-left">Thêm mới</a> -->
                </div>
            </div>
            <?php if (!empty($list_product_trash)) { ?>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <div class="filter-wp clearfix">

                            <form method="POST" class="form-s fl-right mb-2 ">
                                <input type="text" name="keyw" id="s">
                                <input type="submit" name="btn-submit" value="Tìm kiếm">
                            </form>
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
                                        <th>Mô tả</th>
                                        <th>Chi tiết</th>
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
                                        foreach ($list_product_trash as $item) {
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
                                                    <a href="" title="">
                                                        <?= $item['product_code'] ?>
                                                    </a>
                                                </div>
                                                <ul class="list-operation fl-right ">
                                                    <li><a href="?mod=product&action=resProduct&id=<?= $item['product_id'] ?>"
                                                            title="Khôi phục" class="delete"><i class="fa fa-refresh"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="?mod=product&action=delProduct&id=<?= $item['product_id'] ?>"
                                                            title="Xóa" class="delete"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></a></li>

                                                </ul>
                                            </td>
                                            <td>
                                                <span class="tbody-thumb mt-1  text-center ">

                                                    <img class="" width="100px" height="auto"
                                                        src="public/images/<?= $item['product_image'] ?>" alt="">
                                                </span>
                                            </td>
                                            <td>
                                                <div class="tbody-text  text-center">
                                                    <?= $item['product_name'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <?= $item['product_price'] ?>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="tbody-text text-center">
                                                    <?= $item['product_desc'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text text-center">
                                                    <?= $item['product_detail'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text text-center">
                                                    <?= $item['product_cat'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text text-center">
                                                    <?= $item['product_quantity'] ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tbody-text text-center">
                                                    <?= $item['create_time'] ?>
                                                </div>
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
                            <li class="all"><a href="">Tất cả <span class="count">(
                                        <?= $stt ?>)
                                    </span></a> |</li>
                            <!-- <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                        <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li> -->
                            <li class="pending"><a href="?mod=product&action=index">Trang trước<span
                                        class="count"></span></a></li>
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
                <?php
            } else { ?>
                <div class=" col-md-12 text-center ">
                    <img src="public/images/trash.jpg" alt="" class="w-50 h-50 m-auto">
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer() ?>