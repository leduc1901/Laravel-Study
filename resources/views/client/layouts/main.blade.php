<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	<link rel="stylesheet" href="/assets/client/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/assets/client/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/assets/client/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/assets/client/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/assets/client/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/assets/client/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/client/css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="/assets/client/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/assets/client/css/style.css">
	<link rel="stylesheet" href="/assets/client/css/custome.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>
	<!--header -->
        @include('client.layouts.header')
		<!-- End header -->
		<!-- main -->
            @yield('content')
		<!-- end main -->

		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Giới thiệu</h4>
						<p>VIETPRO SHOP cửa hàng kinh doanh quần áo luôn mang tới sự hài lòng cho khách hàng về chất lượng sản phẩm, quần
							áo đều mang thương hiệu made in Việt Nam đẹp cả về kiểu cách lẫn chất lượng, nên sẽ giúp cho bạn trở nên xinh
							đẹp hơn..</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Chăm sóc khách hàng</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Liên hệ </a></li>
								<li><a href="#">Giao hàng/ Đổi hàng</a></li>
								<li><a href="#">Mã giảm giá</a></li>
								<li><a href="#">Sản phẩm yêu thích</a></li>
								<li><a href="#">Đặc biệt</a></li>
								<li><a href="#">Chăm sóc khách hàng</a></li>
								<li><a href="#">Google map</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Thông tin</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Về chúng tôi</a></li>
								<li><a href="#">Thông tin vận chuyển</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Hỗ trợ</a></li>

							</ul>
						</p>
					</div>
					<div class="col-md-4">
						<h4>Thông tin liên hệ</h4>
						<ul class="colorlib-footer-links">
							<li>Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa - Hà Nội</li>
							<li><a href="tel://1234567920">0988 550 553</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">http://vietpro.edu.vn</a></li>
						</ul>
					</div>
				</div>
			</div>

		</footer>
		<!--end  footer -->
	</div>


	<!-- jQuery -->
	<script src="/assets/client/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/assets/client/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/client/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/assets/client/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/assets/client/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/assets/client/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/assets/client/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/client/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="/assets/client/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="/assets/client/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="/assets/client/js/main.js"></script>
@stack('js')
</body>

</html>
