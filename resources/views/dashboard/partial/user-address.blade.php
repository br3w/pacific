<div class="content-form">
	<div class="tab-content  mt40  mb60">
		<h2 class="title-icon "><span><i class="fa fa-book"></i></span>Address</h2>
		<form class="cmxform  form-horizontal"  method="POST" action="{{ url('/dashboard/user-address')}}">
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
					<label for="type" class="control-label">Address type :</label>
					<input class="form-control"  name="ype" id="ype" value="{{ $ype or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="street" class="control-label">Street and number :</label>
					<input class="form-control"  name="street" id="street" value="{{ $street or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="complement" class="control-label">Complement :</label>
					<input class="form-control"  name="complement" id="complement" value="{{ $complement or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="postal_code" class="control-label">Postal code :</label>
					<input class="form-control"  name="postal_code" id="postal_code" value="{{ $postal_code or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="city" class="control-label">City :</label>
					<input class="form-control"  name="city" id="city" value="{{ $city or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="district" class="control-label">District :</label>
					<input class="form-control"  name="district" id="district" value="{{ $district or '' }}" />
				</div>
			</div>
			<div class="form-group">                                    
				<div class=" ">
					<label for="country" class="control-label">Country :</label>
					<input class="form-control"  name="country" id="country" value="{{ $country or '' }}" />
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

