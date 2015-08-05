<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-thumbs-o-up"></i></span>Social Network</h2>
		<form class="cmxform form-horizontal"  method="POST" action="{{ url('/dashboard/user-social') }}">
			<input type="hidden" name="_token" value="{{ csrf_token()}}">
			@if ($method == 'PUT')
			<input type="hidden" name="_method" value="PUT">
			@endif
			@if ($method == 'POST')
			<div class="form-group mt40">
				<div class="alert alert-warning ">
					<span class="alert-icon"><i class="fa fa-bell-o"></i></span>
					<div class="notification-info">
						<ul class="clearfix notification-meta">
							<li class="pull-left notification-sender">Please complete your Profile </li>
						</ul>
						<p>
							Your information is important for our communication
						</p>
					</div>
				</div>
			</div>
			@endif 
			@if (isset($sucess))
			<div class="form-group mt40">
				<div class="alert alert-success ">
					<span class="alert-icon"><i class="fa fa-comments-o"></i></span>
					<div class="notification-info">
						<ul class="clearfix notification-meta">
							<li class="pull-left notification-sender">Profile updated successfully</li>
						</ul>
						<p>
							<a href="#">Thank you for updating your data</a>
						</p>
					</div>
				</div>
			</div>
			@endif
			<div class="form-group">
				@if (count($errors) > 0)
				<div class="alert alert-block alert-danger fade in">
					@foreach ($errors->all() as $error)	
					<div class="form-group">				
						<strong class="ml20"><i class="fa fa-exclamation-circle"></i> </strong> {{ $error }}
					</div>	                
					@endforeach
				</div>
				@endif
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="facebook" class="control-label">Facebook :</label>
					<input class="form-control"  name="facebook" id="facebook" value="{{ $facebook or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="twitter" class="control-label">Twitter :</label>
					<input class="form-control"  name="twitter" id="twitter" value="{{ $twitter or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="linkdin" class="control-label">Linkdin :</label>
					<input class="form-control"  name="linkdin" id="linkdin" value="{{ $linkdin or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="instagram" class="control-label">Instagram :</label>
					<input class="form-control"  name="instagram" id="instagram" value="{{ $instagram or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="google_plus" class="control-label">Google Plus :</label>
					<input class="form-control"  name="google_plus" id="google_plus" value="{{ $google_plus or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="whats_app" class="control-label">Whats App :</label>
					<input class="form-control"  name="whats_app" id="whats_app" value="{{ $whats_app or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="waze" class="control-label">Waze :</label>
					<input class="form-control"  name="waze" id="waze" value="{{ $waze or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="viber" class="control-label">Viber :</label>
					<input class="form-control"  name="viber" id="viber" value="{{ $viber or '' }}" />
				</div>
			</div>
			
			<div class="form-group">
				<div class=" ">
					<button class="btn btn-primary" type="submit">Save</button>
					<button class="btn btn-default" type="button">Cancel</button>
				</div>
			</div>
		</form>                                
	</div>
</div>
