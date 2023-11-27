<style>
    table tr td div {
        margin-top: 30px;
    }

    span {
        display: inline-block;
    }
</style>

<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix text-center">
                    <h3 id="index" class="fl-left">Danh sách danh mục</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th>Thứ tự</th>
                                    <th>Trạng thái</th>
                                    <th>Người tạo</th>
                                    <th>Thời gian tạo</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" name="checkItem" class="checkItem">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">1</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">Bóng đá</a>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <span class="tbody-thumb mt-1">

                                            <img class="" width="100px" height="auto"
                                                src="public/images/adminxuanan.jpg" alt="">
                                        </span>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">0</div>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">Hoạt động</div>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">Admin</div>
                                    </td>
                                    <td>
                                        <div class="tbody-text ">12-07-2016</div>
                                    </td>
                                    <td>
                                        <div><ul class="list-operation fl-right mt-4">
                                            <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></li>
                                        </ul></div>
                                    </td>
                                
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
        </div>
    </div>
</div>