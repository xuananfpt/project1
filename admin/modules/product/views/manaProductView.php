<?php get_header() ?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Quản lý sản phẩm</h3>
                    <!-- <a href="?mod=product&action=addProduct" title="" id="add-new" class="fl-left btn">Thêm mới</a> -->
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered ">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Danh mục sản phẩm</th>
                                    <th>Số lượng sản phẩm</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <?php
                                    // show_array($list_product_sta);
                                    $stt = 0;
                                    foreach ($list_product_sta as $item) {
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
                                            <span class="tbody-thumb mt-1  text-center">

                                                <img class="" width="100px" height="auto" src="public/images/<?= $item['cat_image'] ?>" alt="">
                                            </span>
                                        </td>

                                        <td>
                                            <div class="tbody-text  text-center"><?= $item['cat_name'] ?></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text  text-center"><?= $item['soSanPham'] ?></div>
                                        </td>
                                        <td>
                                            <div class="tbody-text  text-center">

                                                <a href="?mod=product&action=detailCat&product_cat=<?= $item['cat_id'] ?>" class="btn">Xem chi tiết</a>
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