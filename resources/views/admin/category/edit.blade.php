@extends('admin.layouts.main')
@section('title', 'Edit Category')
@section('content')

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
				@if (session()->has('success'))
					<div class="alert alert-success" role="alert">
						{{ session()->get('success') }}
					</div>
				@endif
				
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">

								    
								<form action="{{ route('admin.categories.update', $category->id) }}" method="POST"  >
									@csrf
									@method('PUT')
									@if ($errors->any())
										<div class="alert bg-danger" role="alert">
												<svg class="glyph stroked cancel">
													<use xlink:href="#stroked-cancel"></use>
												</svg>{{ $errors->first() }}!<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
											</div>
									@endif
									<div class="form-group">
										<label for="">Danh mục cha:</label>
										<select class="form-control" name="parent_id" >
											<option value="0">----ROOT----</option>
											@forelse ($categories as $categoryValue)
												@include('admin.partials.categories_option',  ['level' => 0]);
											@empty
												
											@endforelse
										</select>
									</div>
									<div class="form-group">
										<label for="">Tên Danh mục</label>
										<input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="{{ old('name') ?? $category->name}}">
	
									</div>
									<button type="submit" class="btn btn-primary">Sửa danh mục</button>
								</form>
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

@endsection