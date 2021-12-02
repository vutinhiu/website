<!-- ========================= HEADER ========================= -->
<?php 
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        $sql = "SELECT * FROM category WHERE cat_id = $cat_id ";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
    }
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    ?>
<!-- ========================= HEADER END // ========================= -->


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page"><?php echo $row['cat_name']; ?></h2>
        <nav>
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['cat_name']; ?></li>
            </ol>
        </nav>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Loại sản phẩm</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                <form class="pb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="button"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="list-menu">
                                    <li><a href="#">Quần</a></li>
                                    <li><a href="#">Áo</a></li>
                                    <li><a href="#">Giày</a></li>
                                    <li><a href="#">Áo thun </a></li>
                                    <li><a href="#">Áo len </a></li>
                                    <li><a href="#">Kính mắt</a></li>
                                    <li><a href="#">Đồng hồ</a></li>
                                </ul>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Thương hiệu</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_2" style="">
                            <div class="card-body">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Adidas
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Nike
                                        <b class="badge badge-pill badge-light float-right">15</b>
                                    </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Puma
                                        <b class="badge badge-pill badge-light float-right">35</b>
                                    </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Louis Vuitton
                                        <b class="badge badge-pill badge-light float-right">89</b>
                                    </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <div class="custom-control-label">DIOR
                                        <b class="badge badge-pill badge-light float-right">30</b>
                                    </div>
                                </label>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Mức giá</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3" style="">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Thấp nhất</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Cao nhất</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div> <!-- form-row.// -->
                                <button class="btn btn-block btn-primary">Áp dụng</button>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Sizes </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_4" style="">
                            <div class="card-body">
                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> S </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> M </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> L </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> XL </span>
                                </label>

                                <label class="checkbox-btn">
                                    <input type="checkbox">
                                    <span class="btn btn-light"> XXL </span>
                                </label>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Khác </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse in" id="collapse_5" style="">
                            <div class="card-body">
                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Thương hiệu mới</div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Bán chạy</div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Đã qua sử dụng</div>
                                </label>

                                <label class="custom-control custom-radio">
                                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                                    <div class="custom-control-label">Giảm giá</div>
                                </label>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
            
            <main class="col-md-9">
                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                    <h3><?php echo $row['cat_name']; ?> (hiện có <?php echo $count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM product WHERE cat_id = $cat_id"));?> sản phẩm)</h3>
                        <select class="mr-2 form-control">
                            <option>Mới nhất</option>
                            <option>Xu hướng</option>
                            <option>Phổ biến</option>
                            <option>Rẻ nhất</option>
                        </select>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                                <i class="fa fa-bars"></i></a>
                            <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip"
                                title="Grid view">
                                <i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </header><!-- sect-heading -->

                <div class="row">
                <?php
            $sql_prd = "SELECT * FROM product WHERE cat_id = $cat_id ORDER BY prd_id DESC LIMIT 9";
            $query_prd = mysqli_query($conn,$sql_prd);
            while($row_prd = mysqli_fetch_array($query_prd)){
        ?>
                    <div class="col-md-4" >
                  
            <div class="product-item card text-center">
            <span class="badge badge-danger"> NEW </span>
                <a href="index.php?page_layout=product&&prd_id=<?php echo $row_prd['prd_id']; ?>"><img src="admin/images/<?php echo $row_prd['prd_image']; ?>" width="150" height="200"></a>
                <h4><a href="index.php?page_layout=product&&prd_id=<?php echo $row_prd['prd_id']; ?>"><?php echo $row_prd['prd_name']; ?></a></h4>
                <p>Giá bán: <span><?php echo $row_prd['prd_price']; ?>đ</span></p>
            </div>
        <a href="#" class="btn btn-block btn-primary">Add to cart </a>
                    </div> <!-- col.// -->

                <?php
                }
                ?>
                </div> <!-- row end.// -->


                <nav class="mt-4" aria-label="Page navigation sample">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Trước</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Kế tiếp</a></li>
                    </ul>
                </nav>

            </main> <!-- col.// -->

        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->

<!-- ========================= FOOTER END // ========================= -->



</body>

</html>