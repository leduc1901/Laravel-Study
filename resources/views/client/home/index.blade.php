@extends('client.layouts.main')
@section('title', 'Trang Chủ')
@section('content')
<div id="colorlib-featured-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="san-pham" class="f-product-1" style="background-image: url(/assets/client/images/item-1.jpg);">
					<div class="desc">
						<h2>Mẫu <br>cho <br>Nam</h2>
					</div>
				</a>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<a href="" class="f-product-2" style="background-image: url(/assets/client/images/item-2.jpg);">
							<div class="desc">
								<h2> <br>Váy <br> Mới</h2>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="f-product-2" style="background-image: url(/assets/client/images/item-4.jpg);">
							<div class="desc">
								<h2>Sale <br>20% <br>off</h2>
							</div>
						</a>
					</div>
					<div class="col-md-12">
						<a href="" class="f-product-2" style="background-image: url(/assets/client/images/item-3.jpg);">
							<div class="desc">
								<h2>Giầy <br>cho <br>Nam</h2>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(/assets/client/images/cover-img-1.jpg);"
 data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="intro-desc">
					<div class="text-salebox">
						<div class="text-lefts">
							<div class="sale-box">
								<div class="sale-box-top">
									<h2 class="number">45</h2>
									<span class="sup-1">%</span>
									<span class="sup-2">Off</span>
								</div>
								<h2 class="text-sale">Sale</h2>
							</div>
						</div>
						<div class="text-rights">
							<h3 class="title">Dặt hàng hôm nay,nhận ngay khuyến mãi!</h3>
							<p>Đã có hơn 1000 đơn hàng được gửi đi ở khắp quốc gia.</p>
							<p><a href="san-pham" class="btn btn-primary">Mua ngay</a> <a href="#" class="btn btn-primary btn-outline">Đọc
									thêm</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="colorlib-shop">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2><span>Sản phẩm Nổi bật</span></h2>
				<p>Đây là những sản phẩm được ưa chuộng nhất năm 2019</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-9.jpg);">

						<div class="cart">
							<p>
								<span class="addtocart"><a href="gio-hang"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="san-pham"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>đ 3.000.000</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-10.jpg);">
					
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-11.jpg);">
						
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-12.jpg);">
						
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="colorlib-shop">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2><span>Sản phẩm mới</span></h2>
				<p>Đây là những sản phẩm mới của năm năm 2019</p>
			</div>
		</div>
		<div class="row">
			{{-- @php
				// print_r($products);die;
			@endphp
			@foreach ( $products as $product )
				<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(/assets/client/images/item-9.jpg);">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p>
									<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
									<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
	
	
								</p>
							</div>
						</div>
						<div class="desc">
						<h3><a href="shop.html">{{ $product->name}}</a></h3>
							<p class="price"><span>{{ number_format($product->price)}}</span> </p>
						</div>
					</div>
				</div>
			@endforeach --}}

			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-10.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-11.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-12.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-13.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-14.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-15.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(/assets/client/images/item-16.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span>
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>


							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>3.000.000 đ</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
