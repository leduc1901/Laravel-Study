@extends('admin.layouts.main')
@section('title', 'Products')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách sản phẩm</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if (session()->has('success'))
									<div class="alert alert-success" role="alert">
										 {{ session()->get('success') }}
									</div>
								 @endif
								{{-- <div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div> --}}
								<a href="{{route('admin.products.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Tình trạng</th>
											<th>Danh mục</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($products as $product)
										<tr>
											<td>{{$product->id}}</td>
											<td>
												<div class="row">
												<div class="col-md-3"><img src="/media/product/{{$product->avatar}}" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">Mã SP: {{$product->product_code}}</strong></p>
														<p>Tên SP : {{$product->name}}</p>
														
														
													</div>
												</div>
											</td>
											<td>{{ $product->price}}</td>
											<td>
												<a class="btn btn-success" href="#" role="button">Còn hàng</a>
											</td>
											<td>{{ $product->category->name}}</td>
											<td>
												<a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Are you sure about that ??')" href="{{route('admin.products.delete', $product->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@empty 
											Không có data 
										@endforelse
								</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->
@endsection
