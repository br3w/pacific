<div class="content-form">
	<div class="tab-content  mt40  mb60">						
		<h2 class="title-icon "><span><i class="fa fa-book"></i></span>Contacts</h2>
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
			    	<label for="twitter" class="control-label">Address type :</label>
			        <input class="form-control"  name="twitter" id="twitter" value="{{ $twitter or '' }}" />
			    </div>
			</div>
			<div class="form-group">                                    
			    <div class=" ">
			    	<label for="twitter" class="control-label">Street and number :</label>
			        <input class="form-control"  name="twitter" id="twitter" value="{{ $twitter or '' }}" />
			    </div>
			</div>
			<div class="form-group">                                    
			    <div class=" ">
			    	<label for="linkdin" class="control-label">Postal code :</label>
			        <input class="form-control"  name="linkdin" id="linkdin" value="{{ $linkdin or '' }}" />
			    </div>
			</div>
			<div class="form-group">                                    
			    <div class=" ">
			    	<label for="instagram" class="control-label">City :</label>
			        <input class="form-control"  name="instagram" id="instagram" value="{{ $instagram or '' }}" />
			    </div>
			</div>
			<div class="form-group">                                    
			    <div class=" ">
			    	<label for="google_plus" class="control-label">District :</label>
			        <input class="form-control"  name="google_plus" id="google_plus" value="{{ $google_plus or '' }}" />
			    </div>
			</div>
			<div class="form-group">                                    
			    <div class=" ">
			    	<label for="whats_app" class="control-label">Country :</label>
			        <input class="form-control"  name="whats_app" id="whats_app" value="{{ $whats_app or '' }}" />
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

