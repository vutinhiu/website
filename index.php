<?php 
    ob_start();
    session_start();
    define('SECURITY', True);
    include_once('admin/config/connect.php');
    
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Website bán quần áo</title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/success.css">
    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: slickslider -->
    <link href="plugins/slickslider/slick.css" rel="stylesheet" type="text/css" />
    <link href="plugins/slickslider/slick-theme.css" rel="stylesheet" type="text/css" />
    <script src="plugins/slickslider/slick.min.js"></script>

    <!-- plugin: owl carousel  -->
    <link href="plugins/owlcarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="css/ui.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function () {
            // jQuery code

        });
// jquery end
    </script>

</head>

<body>


    <header class="section-header">

        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-4">
                    <!-- Logo -->
                        <div class="brand-wrap">
                            <a href="index.php" class="brand-wrap"><img class="logo" src="images/logo.png"></a>
                        </div> <!-- brand-wrap.// -->
                    </div>
                    <!-- Search -->
                  <!-- col.// -->
                  <?php
                    include_once('modules/search/search_box.php');
                    
                  ?>
                    <div class="col-lg-4 col-sm-6 col-8">
                        <div class="widgets-wrap float-md-right">
                        <!-- Cart -->
                        <?php include_once('modules/cart/cartt.php');
                            include_once('modules/login/member.php');
					
                        ?>
                            <!--  login -->

                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->
    </header> <!-- section-header.// -->
<?php include_once('modules/menu/menu.php');?>



<!-- ========================= SECTION  ========================= -->
<!--Product  -->
    <?php 
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case "cart": include_once('modules/cart/cart.php'); break;
            case "product": include_once('modules/product/product.php'); break;
            case "category": include_once('modules/menu/category.php'); break;
            case "success": include_once('modules/cart/success.php'); break;
            case "search": include_once('modules/search/search.php'); break;
			case "login": include_once('modules/login/login.php'); break;
			case "register": include_once('modules/login/register.php'); break;
			case "logout": include_once('modules/login/logout.php'); break;
			case "ok": include_once('modules/login/ok.php'); break;
			case "search": include_once('modules/search/search.php'); break;
		}
    }else{
		include_once('modules/menu/menu2.php');
		include_once('modules/product/featured.php');
		include_once('modules/product/latest.php');
	}
    ?>
<!-- ========================= SECTION  END// ========================= -->
<!-- ============================ COMPONENT ================================= -->
<!-- Logo footer -->
<section class="section-content padding-y bg">
	<div class="container" style="width:100; height:150;">
		<div class="row">
			<div class="col-md-3 mb15">
				<article class="card card-body">
					<figure class="text-center">
						<span class="rounded-circle icon-md bg-primary"><i
								class="fa fa-money-bill-alt white"></i></span>
						<figcaption class="pt-4">
							<h5 class="title">Giá cả  phù hợp</h5>
							<p></p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div><!-- col // -->
			<div class="col-md-3 mb15">
				<article class="card card-body">
					<figure class="text-center">
						<span class="rounded-circle icon-md bg-danger"><i class="fa fa-truck white"></i></span>
						<figcaption class="pt-4">
							<h5 class="title">Chuyển phát nhanh</h5>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div> <!-- col // -->
			<div class="col-md-3 mb15">
				<article class="card card-body">
					<figure class="text-center">
						<span class="rounded-circle icon-md bg-success"><i class="fa fa-star white"></i></span>
						<figcaption class="pt-4">
							<h5 class="title">Chiến lược sáng tạo</h5>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div> <!-- col // -->
			<div class="col-md-3 mb15">
				<article class="card card-body">
					<figure class="text-center">
						<span class="rounded-circle icon-md bg-primary"><i class="fa fa-lock white"></i></span>
						<figcaption class="pt-4">
							<h5 class="title">Bảo mật thông tin </h5>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div> <!-- col // -->
		</div>
	</div> <!-- container .//  -->
</section>
<!-- ============================ COMPONENT END .// ================================= -->


<!-- ========================= SECTION  ========================= -->
<!-- Dowwnload app -->

<!-- ========================= SECTION  END// ======================= -->



<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md">
					<h6 class="title">Nhãn hiệu</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">LV</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Công ty</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Về chúng tôi</a></li>
						<li> <a href="#">Cửa hàng</a></li>
						<li> <a href="#">Quy tắc và điều khoản</a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Trợ giúp</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Liên hệ chúng tôi</a></li>
						<li> <a href="#">Hoàn tiền</a></li>
						<li> <a href="#">Tình trạng đơn hàng</a></li>
						<li> <a href="#">Thông tin vận chuyển</a></li>

					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Tài khoản</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Đăng nhập</a></li>
						<li> <a href="#">Đăng ký</a></li>
						<li> <a href="#"> Cài đặt tài khoản</a></li>
						<li> <a href="#">Đơn hàng của tôi</a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Mạng xã hội</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section> <!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-2">
				<p class="text-muted"> &copy 2021 By NXC </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span class="px-2">nguyencanh@.io</span>
				<span class="px-2">+123-456-789</span>
				<span class="px-2">175 Tây Sơn, Đống Đa, Hà Nội</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
</body>

</html>