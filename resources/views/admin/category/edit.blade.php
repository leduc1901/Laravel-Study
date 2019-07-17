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
					@if (session()->has('success1'))
                    <div class="alert alert-success">
                        {{ session()->get('success1')}}
                    </div>
                    @endif
				<div class="panel panel-default">
					<form action="{{ route('admin.category.update', $category->id)   }}" method="POST">
						@csrf
						@method('PUT')
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
                                    <label>Tên Cũ</label>
                                    <input  type="text" name="name" class="form-control" value="{{$category->name}}">
                                </div>
								
								<div class="form-group">
									<label for="">Tên Mới </label>
									<input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="">
									
								</div>
								<button type="submit" class="btn btn-primary">Sửa danh mục</button>
							</div>

						</div>
					</div>
					</form>
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
