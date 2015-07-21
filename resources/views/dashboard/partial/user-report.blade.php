<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa  fa-list"></i></span>User Reports</h2>
	    <form class="cmxform form-horizontal"  method="POST" action="{{ url('/dashboard/user-account') }}">
	    	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	    	<input type="hidden" name="_method" value="PUT">
	    	<div class="form-group">
				@if (count($errors) > 0)
					@foreach ($errors->all() as $error)
	                	<div class=" ">
	                    	<div class="alert alert-block alert-danger fade in">
	                            <button data-dismiss="alert" class="close close-sm" type="button">
	                                <i class="fa fa-times"></i>
	                            </button>
	                            <strong><i class="fa fa-exclamation-circle"></i> </strong> {{ $error }}
	                        </div>
						</div>
					@endforeach
				@endif
			</div>
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
	                <input class="form-control " id="password_old" name="password_old" type="password" />
	            </div>
	        </div>	                                                                   
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">New password :</label>
	                <input class="form-control " id="password_new" name="password_new" type="password" />
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label class="control-label" for="confirm_password">Confirm Password :</label>
	                <input class="form-control " id="password_conf" name="password_conf" type="password" />
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
