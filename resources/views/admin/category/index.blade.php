@extends('admin.layouts.main')

@section('content1')

	<!--/. end sidebar left-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
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
							@if (session()->has('success1'))
								<div class="alert alert-success">
									{{ session()->get('success1')}}
								</div>
							@endif
							<div class="col-md-5">
								<form action="{{ route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
									@csrf 
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới">
									
								</div>
								<button type="submit" class="btn btn-primary">Thêm danh mục</button>
								</form>
							</div>
							<div class="col-md-7">

								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									@forelse ($categories as $category)
										<div class="item-menu"><span>{{$category->name}}</span>
											<div class="category-fix">
												<a class="btn-category btn-primary" href="category/{{$category->id}}/edit"><i class="fa fa-edit"></i></a>
												<a class="btn-category btn-danger" onclick="return confirmz();" href="{{ route('admin.category.delete', $category->id)   }}"><i class="fas fa-times"></i></i></a>

											</div>
										</div>
									@empty
										đéo có gì
									@endforelse



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

