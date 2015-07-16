<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ThemeBucket">
	<link rel="shortcut icon" href="{{url('/images/favicon.png')}}">

	<title>OnSingle - @yield('title')</title>

	<!--Core CSS -->
	<link href="{{asset('/bs3/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('/css/bootstrap-reset.css')}}" rel="stylesheet">
	<link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="{{asset('/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('/css/style-responsive.css')}}" rel="stylesheet" />

	<!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<section id="container">
		<header class="header fixed-top clearfix">
			
			<div class="brand">
				<a href="index.html" class="logo">
					{{ Auth::user()->company }}
				</a>
			</div>

			@include('company.partial.menu-principal')		    

			@include('company.partial.notification')

		</header>

		<aside>
			<div id="sidebar" class="nav-collapse hide-left-bar">
				@section('left-aside')

				@show
			</div>
		</aside>

		<section id="main-content" class="merge-left">
			<section class="wrapper">
				@yield('content')
			</section>
		</section>

		<div class="right-sidebar">
			@section('right-sidebar')

			@show
		</div>
	</section>


	<!--Core js-->
	<script src="{{asset('/js/jquery.js')}}"></script>
	<script src="{{asset('/bs3/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>
	<script src="{{asset('/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('/js/jquery.nicescroll.js')}}"></script>



	<!--common script init for all pages-->
	<script src="{{asset('/js/scripts.js')}}"></script>

</body>
</html>
