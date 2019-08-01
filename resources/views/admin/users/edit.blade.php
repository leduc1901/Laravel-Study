@extends('admin.layouts.main')
@section('title', 'Edit User')
@section('content')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Thành viên</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên </div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <form action="{{ route('admin.users.update',$user->id)}}" method="POST"  >
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    <div class="alert bg-danger" role="alert">
                                            <svg class="glyph stroked cancel">
                                                <use xlink:href="#stroked-cancel"></use>
                                            </svg>{{ $errors->first() }}!<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                        </div>
                                @endif
                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                            
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="name" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" name="address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                  
                                    <button class="btn btn-success"  type="submit">Thêm thành viên</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                            </form>
                           

                        </div>
                    
                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    </div>

        <!--/.row-->
    </div>
@endsection