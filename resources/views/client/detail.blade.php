@extends('client.layouts.main');
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(/assets/client/images/item-6.jpg);">

										</div>

									</div>
								</div>
								<div class="col-md-7">
									<form action="product/AddCart" method="post">

										<div class="desc">
										<h3>{{ $products['name']}}</h3>
											<p class="price">
											<span>{{ number_format($products->price)}}</span>
											</p>
											<p>thông tin</p>
											<div class="size-wrap">
												<p class="size-desc">
													size:
													<a class="size">M</a>
													<a class="size">L</a>

												</p>
											</div>
											<div class="size-wrap">
												<p class="size-desc">
													Màu sắc:
													<a class="size">đen</a>

												</p>
											</div>
											<h4>Lựa chọn</h4>
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>size:</label>
														<select class="form-control " name="attr[size]" id="">
															<option value="M"> M</option>
															<option value="L"> L</option>

														</select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Màu sắc:</label>
														<select class="form-control " name="attr[Màu sắc]" id="">
															<option value="đen"> đen</option>

														</select>
													</div>
												</div>


											</div>
											<div class="row row-pb-sm">
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
																<i class="icon-minus2"></i>
															</button>
														</span>
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
																<i class="icon-plus2"></i>
															</button>
														</span>
													</div>
												</div>
											</div>
											<input type="hidden" name="id_product" value="1">
											<p><button class="btn btn-primary btn-addtocart" type="submit"> Thêm vào giỏ hàng</button></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										Đây là sản phẩm đẹp
									</div>
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
						<h2><span>Sản phẩm Mới</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-7.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product/detail/3"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Áo nữ vàng</a></h3>
								<p class="price"><span>150,000 VNĐ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-8.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product/detail/2"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Áo khoác nữ đẹp</a></h3>
								<p class="price"><span>50,000 VNĐ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-6.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product/detail/1"><i class="icon-eye"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Áo khoác nam đẹp</a></h3>
								<p class="price"><span>150,000 VNĐ</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end main -->
@endsection