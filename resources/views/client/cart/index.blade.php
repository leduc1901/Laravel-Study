@extends('client.layouts.main')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Chi tiết sản phẩm</span>
							</div>
							<div class="one-eight text-center">
								<span>Giá</span>
							</div>
							<div class="one-eight text-center">
								<span>Số lượng</span>
							</div>
							<div class="one-eight text-center">
								<span>Tổng</span>
							</div>
							<div class="one-eight text-center">
								<span>Xóa</span>
							</div>
						</div>
						@forelse (Cart::getContent() as $item)
						<div class="product-cart">
								<div class="one-forth">
									<div class="product-img">
										<img class="img-thumbnail cart-img" src="{{ env('PRODUCT_IMAGE').'/'.$item->attributes['avatar'] }}">
									</div>
									<div class="detail-buy">
										<h4>Mã : {{ $item->id}}</h4>
										<h5> {{ $item->name}}</h5>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price "> {{ number_format($item->price)}}đ</span>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<input type="number" id="quantity" data-id="{{ $item->id }}" name="quantity" class="form-control input-quantity input-number text-center" value="{{ $item->quantity }}">
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price summed-price"> {{number_format($item->price*$item->quantity)}}đ</span>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<a href="#" o class="closed btn-remove-product" data-id="{{ $item->id }}"></a>
									</div>
								</div>
						</div>
						@empty
							<p>Giỏ Hàng Trống ! </p>
						@endforelse
						
						{{-- <div class="product-cart">
							<div class="one-forth">
								<div class="product-img">
									<img class="img-thumbnail cart-img" src="/assets/client/images/item-6.jpg">
								</div>
								<div class="detail-buy">
									<h4>Mã : SP01</h4>
									<h5>Áo Khoác Nam Đẹp</h5>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">₫ 680.000</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="number" id="quantity" name="quantity" class="form-control input-number text-center" value="1">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">₫ 1.200.000</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="#" class="closed"></a>
								</div>
							</div>
						</div>
					 --}}
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">

								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Tổng:</span> <span  class="sub-total">{{ number_format(Cart::getSubTotal()) }} đ</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Tổng cộng:</strong></span> <span class="getTotal">{{ number_format(Cart::getTotal())}} đ</span></p>
											<a href="{{route('client.cart.checkout')}}" class="btn btn-primary">Thanh toán <i class="icon-arrow-right-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@push('js')
		<script>
			$(document).ready(function () {
				$.ajaxSetup({
    			headers: {
        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
				});

				$('.btn-remove-product').on('click' , function(e){
					let id = $(this).attr('data-id');
					let _this = $(this);
					if(confirm('Are you sure ? ')){
						e.preventDefault();
						$.ajax({
							url : '/cart/destroy',
							method : 'POST',
							data : {
								id : id

							},
							success : function(){
								_this.parents('.product-cart').remove();
							},
							error : function(){

							}
						});
					}
					
				});


				$('.input-quantity').change(function(){
					let data = {
						id : $(this).attr('data-id'),
						quantity : $(this).val()
					}
					let _this = $(this);

					$.ajax({
						url : '/cart/update',
						data : data ,
						method : "POST" ,
						success : function(scs){
							_this.parents('.product-cart').find('.summed-price').text(scs.summedPrice + 'đ');
							$('.sub-total').text(scs.subTotal + 'đ');
							$('.getTotal').text(scs.getTotal + 'đ');
						},
						error : function(){

						}
					});
				});
				var quantity = 0;
				$('.quantity-right-plus').click(function (e) {

					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());

					// If is not undefined

					$('#quantity').val(quantity + 1);


					// Increment

				});

				$('.quantity-left-minus').click(function (e) {
					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());

					if (quantity > 0) {
						$('#quantity').val(quantity - 1);
					}
				});

			});
		</script>
@endpush
		<!-- end main -->
@endsection
		