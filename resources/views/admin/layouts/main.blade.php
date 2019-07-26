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
	<!-- header -->
	@include('admin.layouts.header')
	<!-- header -->
	<!-- sidebar left-->
	
	@include('admin.layouts.sidebar')
        @yield('content')

    <script src="/assets/admin/js/jquery-1.11.1.min.js"></script>
    <script src="/assets/admin/js/bootstrap.min.js"></script>
    <script src="/assets/admin/js/chart.min.js"></script>
    <script src="/assets/admin/js/chart-data.js"></script>
    <script> 
		function confirmz(){
			var conf = confirm("Bạn có muốn xóa ko ? ");
			return conf;
		}
	</script>
</body>

</html>