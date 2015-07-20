@extends('layouts.company')

@section('title', 'User')


@section('left-aside')
<p>This is my left-aside.</p>
@endsection


@section('content')   

<section class="panel">
	<div class="panel-body profile-information">
		<div class="col-md-3">
			<div class="profile-pic text-center">
				<img src="{{ url('/images/lock_thumb.jpg')}}" alt="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="profile-desk">
				<h1>David Rojormillan</h1>
				<span class="text-muted">Product Manager</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
				</p>
				<a href="#" class="btn btn-primary">View Profile</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="profile-statistics">
				<h1>1240</h1>
				<p>This Week Sales</p>
				<h1>$5,61,240</h1>
				<p>This Week Earn</p>
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="panel">
	<header class="panel-heading tab-bg-dark-navy-blue ">
		<ul class="nav nav-tabs">
			<li class="active">
				<a data-toggle="tab" href="#home">Home</a>
			</li>
			<li class="">
				<a data-toggle="tab" href="#about">About</a>
			</li>
			<li class="">
				<a data-toggle="tab" href="#profile">Profile</a>
			</li>
			<li class="">
				<a data-toggle="tab" href="#contact">Contact</a>
			</li>
		</ul>
	</header>
	<div class="panel-body">
		<div class="tab-content">
			<div id="home" class="tab-pane active">
				Home
			</div>
			<div id="about" class="tab-pane">About</div>
			<div id="profile" class="tab-pane">Profile</div>
			<div id="contact" class="tab-pane">Contact</div>
		</div>
	</div>
</section>


@endsection


@section('right-aside')
<p>This is my right-aside.</p>
@endsection 