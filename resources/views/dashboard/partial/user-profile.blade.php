<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-user"></i></span>Set Profile </h2>
	    <form class="cmxform form-horizontal mt20"  method="POST" action="{{ url('/painel/user/profile') }}">
	    	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	    	<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
	            	<label for="password" class="control-label">First name</label>
	                <input type="text" class="form-control" id="first_name" name="first_name" value="{{isset($first_name) ? $first_name : ''}}"/>                                  
	            </div>
	        </div>
	    		<div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Last name</label>
	                <input type="text" class="form-control" id="last_name" name="last_name" value="{{isset($last_name) ? $last_name : ''}}" />
	            </div>
	        </div>                                
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Birth date</label>
	                <input type="text" class="form-control" id="birth_date" name="birth_date" data-mask="99/99/9999"  value="{{isset($birth_date) ? $birth_date : ''}}"/>
	            </div>
	        </div>                                                            
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">City birth</label>
	                <input type="text" class="form-control" id="city_birth" name="city_birth" value="{{ isset($city_birth) ? $city_birth : ''}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">City live</label>
	                <input type="text" class="form-control " id="city_live" name="city_live" value="{{ isset($city_live) ? $city_live : '' }}"/>
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
