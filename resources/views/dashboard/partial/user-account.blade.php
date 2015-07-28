<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-lock"></i></span>Change password</h2>
	    <form class="cmxform form-horizontal"  method="POST" action="{{ url('/dashboard/user-account') }}">
	    	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	    	<input type="hidden" name="_method" value="PUT">
	    	
	    	<div class="form-group mt40">
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

			@if (isset($update))
	    	<div class="form-group mt40">
				<div class="alert alert-success ">
				    <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
				    <div class="notification-info">
				        <ul class="clearfix notification-meta">
				            <li class="pull-left notification-sender">Account updated successfully</li>
				        </ul>
				        <p>
				            <a href="#">Thank you for updating your data</a>
				        </p>
				    </div>
				</div>
			</div>
	    	@endif 

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Company :</label>
	                <input class="form-control"  value="{{ Auth::user()->company }}" disabled/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Email :</label>
	                <input class="form-control"  value="{{ Auth::user()->email }}" disabled/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Old password :</label>
	                <input class="form-control " id="old_password" name="old_password" type="password" />
	            </div>
	        </div>	                                                                   
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">New password :</label>
	                <input class="form-control " id="new_password" name="new_password" type="password" />
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label class="control-label" for="confirm_password">Confirm Password :</label>
	                <input class="form-control " id="conf_password" name="conf_password" type="password" />
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
