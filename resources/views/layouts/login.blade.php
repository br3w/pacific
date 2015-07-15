<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="onSingle">
	<link rel="shortcut icon" href="{{url('favicon.png')}}">
	<title>OnSingle - All applications in one place</title>

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
<body class="login-body">
	<div class="container">
		<form class="form-signin"  role="form" method="POST" action="{{ url('/login') }}">
			<h2 class="form-signin-heading"><img src="{{url('images/logo-onsingle.jpg')}}" /></h2>
			<div class="login-wrap">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					<br>
				@endif	

				<div class="user-login-info">
					<input type="hidden"    name="_token" value="{!! csrf_token() !!}">					
					<input type="text" 		name="company" 	    value="{{old('company')}}"    class="form-control" placeholder="Company">
					<input type="text" 		name="email" 	    value="{{old('email')}}"  	  class="form-control" placeholder="Email">
					<input type="password"  name="password"     value=""    class="form-control" placeholder="Password">
				</div>
				<label class="checkbox">
					<input type="checkbox" value="remember-me"> Remember me
					<span class="pull-right">
						<a data-toggle="modal" href="#myModal"> Forgot Password?</a>
					</span>
				</label>
				<button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
			</div>
		</form>

		<form class="form-signin"  role="form" method="POST" action="{{ url('/login') }}">
			<!-- Modal -->
			<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Forgot Password ?</h4>
						</div>
						<div class="modal-body">
							<p>Enter your e-mail address below to reset your password.</p>
							<input type="text" name="_email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

						</div>
						<div class="modal-footer">
							<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
							<button class="btn btn-onsingle" type="button">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal -->
		</form>
	</div>
	<!-- Placed js at the end of the document so the pages load faster -->
	<!--Core js-->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('bs3/js/bootstrap.min.js')}}"></script>
</body>
</html>
