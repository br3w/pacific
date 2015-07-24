<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-user"></i></span>Set Profile </h2>
	    <form class="cmxform form-horizontal mt20"  method="POST" action="{{ url('/painel/user/user-profile') }}">
	    	<input type="hidden" name="_token" value="{!! csrf_token()!!}">	    	
	    	<input type="hidden" name="_method" value="PUT">	    	
	    	<div class="form-group">
				@if (count($errors) > 0)
					<div class="mt40">
						@foreach ($errors->all() as $error)					
		                	<div class="alert alert-block alert-danger fade in">
		                        <button data-dismiss="alert" class="close close-sm" type="button">
		                            <i class="fa fa-times"></i>
		                        </button>
		                        <strong><i class="fa fa-exclamation-circle"></i> </strong> {{ $error }}
		                    </div>	                
						@endforeach
					</div>
				@endif
				@if (isset($update)) 
                	<div class="alert alert-block alert-success fade in mt40">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong><i class="fa fa-exclamation-circle"></i> </strong>Password update!
                    </div>
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
	            	<label for="password" class="control-label">Live place</label>
	                <input type="text" class="form-control " id="live_place" name="live_place" value="{{ isset($live_place) ? $live_place : '' }}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Company infornation:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Company</label>
	                <input type="text" class="form-control " id="company" name="company" value="{{ isset($company) ? $company : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Office</label>
	                <input type="text" class="form-control " id="office" name="office" value="{{ isset($office) ? $office : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Admission date </label>
	                <input type="text" class="form-control " id="admission_date" name="admission_date" value="{{ isset($admission_date) ? $admission_date : '' }}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Academy Education:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Education</label>
	                <input type="text" class="form-control " id="education" name="education" value="{{ isset($education) ? $education : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Institution</label>
	                <input type="text" class="form-control " id="institution" name="institution" value="{{ isset($institution) ? $institution : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Conclusion</label>
	                <input type="text" class="form-control " id="conclusion" name="conclusion" value="{{ isset($conclusion) ? $conclusion : '' }}"/>
	            </div>
	        </div> 

	        <div class="form-group mt30">                                    
	            <label><strong>Your favorites:<strong></label>
	        </div>

	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite hobby</label>
	                <input type="text" class="form-control " id="favorite_hobby" name="favorite_hobby" value="{{ isset($favorite_hobby) ? $favorite_hobby : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite issue</label>
	                <input type="text" class="form-control " id="favorite_issue" name="favorite_issue" value="{{ isset($favorite_issue) ? $favorite_issue : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite color</label>
	                <input type="text" class="form-control " id="favorite_color" name="favorite_color" value="{{ isset($favorite_color) ? $favorite_color : '' }}"/>
	            </div>
	        </div> 
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite place</label>
	                <input type="text" class="form-control " id="favorite_place" name="favorite_place" value="{{ isset($favorite_place) ? $favorite_place : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite book</label>
	                <input type="text" class="form-control " id="favorite_book" name="favorite_book" value="{{ isset($favorite_book) ? $favorite_book : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite music</label>
	                <input type="text" class="form-control " id="favorite_music" name="favorite_music" value="{{ isset($favorite_music) ? $favorite_music : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite movie</label>
	                <input type="text" class="form-control " id="favorite_movie" name="favorite_movie" value="{{ isset($favorite_movie) ? $favorite_movie : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite theater</label>
	                <input type="text" class="form-control " id="favorite_theater" name="favorite_theater" value="{{ isset($favorite_theater) ? $favorite_theater : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite sport</label>
	                <input type="text" class="form-control " id="favorite_sport" name="favorite_sport" value="{{ isset($favorite_sport) ? $favorite_sport : '' }}"/>
	            </div>
	        </div>
	        <div class="form-group">                                    
	            <div class=" ">
	            	<label for="password" class="control-label">Favorite thinker</label>
	                <input type="text" class="form-control " id="favorite_thinker" name="favorite_thinker" value="{{ isset($favorite_thinker) ? $favorite_thinker : '' }}"/>
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
