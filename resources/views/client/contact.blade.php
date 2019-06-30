@extends('client.layouts.main');
@section('content')
		<!-- main -->
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Thôn tin liên hệ</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa - Hà
									Nội</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://123456789">+ 123 456 789</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">http://vietpro.edu.vn</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
							<h3>Liên hệ</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-12 padding-bottom">
										<label for="fname">Họ & Tên</label>
										<input type="text" id="fname" class="form-control" placeholder="Your firstname">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" class="form-control" placeholder="Your email address">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Chủ đề</label>
										<input type="text" id="subject" class="form-control" placeholder="Nhập chủ đề">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Lời nhắn</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Nói gì đó cho chúng tôi"></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Gửi liên hệ" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<!-- end main -->
@endsection