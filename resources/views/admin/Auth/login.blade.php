<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- css -->
        <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="/assets/admin/css/styles.css" rel="stylesheet">
        <!--Icons-->
        <script src="/assets/admin/js/lumino.glyphs.js"></script>
        <link rel="stylesheet" href="/assets/admin/Awesome/css/all.css">
    </head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="/admin/login" method="POST">
						@csrf
						<fieldset>
							@if ( $errors->any())
								<div class="alert alert-danger" role="alert">
									{{ $errors->first()}}
								</div>
							
							@endif
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email')}}" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
<script src="/assets/admin/js/jquery-1.11.1.min.js"></script>
    <script src="/assets/admin/js/bootstrap.min.js"></script>
    <script src="/assets/admin/js/chart.min.js"></script>
    <script src="/assets/admin/js/chart-data.js"></script>