@extends('admin.layouts.main');

@section('content1')

	<!--/. end sidebar left-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->


		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">

								<div class="form-group">
									<label for="">Danh mục cha:</label>
									<select class="form-control" name="parent" >
										<option>Nam</option>
										<option selected>Nữ</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="Áo khoác nữ">
									<div class="alert bg-danger" role="alert">
										<svg class="glyph stroked cancel">
											<use xlink:href="#stroked-cancel"></use>
										</svg>Tên danh mục đã tồn tại!<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Sửa danh mục</button>
							</div>
							<div class="col-md-7">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> Đã sửa danh mục thành công! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									<div class="item-menu"><span>Nam</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="#"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fa fa-close"></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|Áo khoác Nam</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="#"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fa fa-close"></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|---|Áo khoác Nam (Dành cho việc mở rộng)</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="#"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fa fa-close"></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Nữ</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="#"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fa fa-close"></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|Áo khoác Nữ</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="#"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fa fa-close"></i></a>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->


	<script>
		$('#calendar').datepicker({});

		! function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
