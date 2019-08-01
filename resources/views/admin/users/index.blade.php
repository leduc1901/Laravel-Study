@extends('admin.layouts.main')
@section('title', 'Users')
@section('content')

	<script> 
		function confirmz(){
			var conf = confirm("Bạn có muốn xóa ko ? ");
			return conf;
		}
    </script>
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách thành viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách thành viên</h1>
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
								<a href="{{route('admin.users.create')}}" class="btn btn-primary">Thêm Thành viên</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Full</th>
											<th>Address</th>
                                            <th>Phone</th>
                                            <th>Level</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($users as $user)
										<tr>
											<td>{{ $user->id}}</td>
											<td>{{ $user->email}}</td>
											<td>{{ $user->name}}</td>
											<td>{{ $user->address}}</td>
											<td>{{ $user->phone}}</td>
                                            <td></td>
											<td>
												<a href="{{route('admin.users.edit' , $user->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="confirmz();" href="{{route('admin.users.delete', $user->id)}}"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
										@endforeach
										
                                        
								
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