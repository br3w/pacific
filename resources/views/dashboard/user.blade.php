@extends('layouts.dashboard')

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
				<h1>{{Session('profile.full_name')}}</h1>
				<span class="text-muted">{{Session('profile.office')}}</span>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
				</p>
			</div>
			<div class="profile-statistics">
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
	<header class="panel-heading ">
		<ul class="nav nav-tabs">
			<li class="{{ $account or '' }}">
				<a href="{{url('/dashboard/user-account')}}">Account</a>
			</li>
			<li class="{{ $profile or '' }}">
				<a href="{{url('/dashboard/user-profile')}}">Profile</a>
			</li>
			<li class="{{ $social or '' }}">
				<a href="{{url('/dashboard/user-social')}}">Social</a>
			</li>
			<li class="{{ $address or '' }}">
				<a href="{{url('/dashboard/user-address')}}">Address</a>
			</li>			
			<li class="{{ $phone or '' }}">
				<a href="{{url('/dashboard/user-phone')}}">Phone</a>
			</li>						
			<li class="{{ $team or '' }}">
				<a href="{{url('/dashboard/user-team')}}">Team</a>
			</li>
			<li class="{{ $report or '' }}">
				<a href="{{url('/dashboard/user-report')}}">report</a>
			</li>
		</ul>
	</header>
	<div class="panel-body">
		<div class="tab-content">
			<div class="tab-pane {{ $account or '' }}">	
				@if (isset($account)) 
					@include('dashboard.partial.user-account')
				@endif
			</div>	
			<div class="tab-pane {{ $profile or '' }}">
				@if (isset($profile)) 
					@include('dashboard.partial.user-profile')
				@endif
			</div>
			<div class="tab-pane {{ $social or '' }}">
				@if (isset($social)) 
					@include('dashboard.partial.user-social')
				@endif
			</div>
			<div class="tab-pane {{ $address or '' }}">
				@if (isset($address)) 
					@include('dashboard.partial.user-address')
				@endif
			</div>
			<div class="tab-pane {{ $phone or '' }}">
				@if (isset($phone)) 
					@include('dashboard.partial.user-phone')
				@endif
			</div>							
			<div class="tab-pane {{ $team or '' }}">
				@if (isset($team)) 
					@include('dashboard.partial.user-team')
				@endif
			</div>
			<div class="tab-pane {{ $report or '' }}">
				@if (isset($report)) 
					@include('dashboard.partial.user-report')
				@endif
			</div>

		</div>
	</div>
</section>
@endsection


@section('right-aside')
<p>This is my right-aside.</p>
@endsection 


@section('scripts')
<script src="{{asset('/js/jquery.maskedinput.js')}}"></script>
@endsection 

