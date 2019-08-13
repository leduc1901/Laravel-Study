
@extends('admin.layouts.main')
@section('title', 'Dashboard')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Đơn hàng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách đơn đặt hàng đã xử lý</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{route('admin.orders.index')}}" class="btn btn-warning"><span class="glyphicon glyphicon-gift"></span>Đơn Chưa xử lý</a>
								<table class="table table-bordered" style="margin-top:20px;">				
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Nguyễn văn An</td>
                                            <td>Lu@gmail.com</td>
                                            <td>015232412</td>
                                            <td>Bắc ninh</td>
                                            <td>2018-12-06 12:17:17</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Nguyễn thế phúc</td>
                                            <td>admin@gmail.com</td>
                                            <td>0906013526</td>
                                            <td>Thường tín , hà nội</td>
                                            <td>2018-12-06 02:05:30</td>                                                                                
                                        </tr>
                                    </tbody>
                                </table>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->


	</div>
