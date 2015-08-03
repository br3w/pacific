<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-user"></i></span>Set Profile </h2>
	    <form class="cmxform form-horizontal"  method="POST" action="{{ url('/dashboard/user-profile') }}">
	    	
	    	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	 
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

	    	@if (isset($update))
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
	            	<label for="password" class="control-label">First name</label>
	                <input type="text" class="form-control" id="first_name" name="first_name" value="{{isset($first_name) ? $first_name : ''}}{{ old('first_name') }}"/>                                  
	            </div>
	        </div>
	    		<div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Last name</label>
	                <input type="text" class="form-control" id="last_name" name="last_name" value="{{isset($last_name) ? $last_name : ''}}{{ old('last_name') }}" />
	            </div>
	        </div>                                
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Birth date</label>
	                <input type="text" class="form-control date-form-input" id="birth_date" name="birth_date"  value="{{isset($birth_date) ? $birth_date : ''}}{{ old('birth_date')}}"/>
	            </div>
	        </div>                                                            
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Birth place</label>
	                <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ isset($birth_place) ? $birth_place : ''}}{{ old('birth_place')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Live place</label>
	                <input type="text" class="form-control " id="live_place" name="live_place" value="{{ isset($live_place) ? $live_place : '' }}{{ old('live_place')}}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Company infornation:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Company</label>
	                <input type="text" class="form-control " id="company" name="company" value="{{ isset($company) ? $company : '' }}{{ old('company')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Office</label>
	                <input type="text" class="form-control " id="office" name="office" value="{{ isset($office) ? $office : '' }}{{ old('office')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Admission date </label>
	                <input type="text" class="form-control date-form-input" id="admission_date" name="admission_date" value="{{ isset($admission_date) ? $admission_date : '' }}{{ old('admission_date')}}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Academy Education:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Education</label>
	                <input type="text" class="form-control " id="education" name="education" value="{{ isset($education) ? $education : '' }}{{ old('education')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Institution</label>
	                <input type="text" class="form-control " id="institution" name="institution" value="{{ isset($institution) ? $institution : '' }}{{ old('institution')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Conclusion</label>
	                <input type="text" class="form-control date-form-input" id="conclusion" name="conclusion" value="{{ isset($conclusion) ? $conclusion : '' }}{{ old('conclusion')}}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Your favorites:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite hobby</label>
	                <input type="text" class="form-control " id="favorite_hobby" name="favorite_hobby" value="{{ isset($favorite_hobby) ? $favorite_hobby : '' }}{{ old('favorite_hobby')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite issue</label>
	                <input type="text" class="form-control " id="favorite_issue" name="favorite_issue" value="{{ isset($favorite_issue) ? $favorite_issue : '' }}{{ old('favorite_issue')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite color</label>
	                <input type="text" class="form-control " id="favorite_color" name="favorite_color" value="{{ isset($favorite_color) ? $favorite_color : '' }}{{ old('favorite_color')}}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite place</label>
	                <input type="text" class="form-control " id="favorite_place" name="favorite_place" value="{{ isset($favorite_place) ? $favorite_place : ''}}{{ old('favorite_place')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite book</label>
	                <input type="text" class="form-control " id="favorite_book" name="favorite_book" value="{{ isset($favorite_book) ? $favorite_book : '' }}{{ old('favorite_book')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite music</label>
	                <input type="text" class="form-control " id="favorite_music" name="favorite_music" value="{{ isset($favorite_music) ? $favorite_music : '' }}{{ old('favorite_music')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite movie</label>
	                <input type="text" class="form-control " id="favorite_movie" name="favorite_movie" value="{{ isset($favorite_movie) ? $favorite_movie : '' }}{{ old('favorite_movie')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite theater</label>
	                <input type="text" class="form-control " id="favorite_theater" name="favorite_theater" value="{{ isset($favorite_theater) ? $favorite_theater : '' }}{{ old('favorite_theater')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite sport</label>
	                <input type="text" class="form-control " id="favorite_sport" name="favorite_sport" value="{{ isset($favorite_sport) ? $favorite_sport : '' }}{{ old('favorite_sport')}}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite thinker</label>
	                <input type="text" class="form-control " id="favorite_thinker" name="favorite_thinker" value="{{ isset($favorite_thinker) ? $favorite_thinker : '' }}{{ old('favorite_thinker')}}"/>
	            </div>
	        </div><br>


	        <div class="form-group">
	            <div class=" ">
	                <button class="btn btn-primary" type="submit">Save</button>
	                <button class="btn btn-default" type="button">Cancel</button>
	            </div>
	        </div>
	    </form>                                  
	</div>
</div>
