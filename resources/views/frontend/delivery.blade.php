@extends('frontend.layouts.app')

@section('header_css')
	<link href="{{ URL::to('custom/formerrorcolor.css') }}" rel="stylesheet" />
@stop
@section('content')
	<section id="delivery">
		@include('frontend.inc.navbar');
		<div class="container">
			<div class="row text-center home_header">
				<div class="col-md-12">
					<!-- <h3 class="header_header">Your Pick Details</h3> -->
				</div>
			</div>
	</section>

	<section>
		<div class="container">
			<div class="row mt-4 mb-4">
				<div class="col-md-6">
					<h5>Register your shipping details</h5>
					<p><b style="color: red;">N/B</b> Cities that are not available in the select box can be include in the <b style="color: red;">address</b> field.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					@include('messages.flash')
					<form id="TypeValidation" method="POST" action="{{ route('homeStore') }}">
						{{ csrf_field() }}

						<div class="form-row mt-3 mb-4">
							<div class="col form-group">
								<input type="text" name="shipper_firstN" value="{{ old('shipper_firstN') ?? $users->first_name }}" class="form-control" placeholder="Enter First Name" required="true">
							</div>
							<div class="col form-group">
								<input type="text" name="shipper_lastN" value="{{ old('shipper_lastN') ?? $users->last_name }}" class="form-control" placeholder="Enter Last Name" required="true">
							</div>
						</div>
						<div class="form-row mb-4">
							<div class="col form-group">
								<input type="email" name="shipper_email" value="{{ old('shipper_email') ?? $users->email }}" class="form-control" placeholder="Enter E-mail Address" email="true">
							</div>
							<div class="col form-group">
								<input type="number" name="shipper_phone" value="{{ old('shipper_phone') ?? $users->phone_number }}" class="form-control" placeholder="Enter Phone Number" required="true">
							</div>
						</div>
						<section>
							<div class="form-row mb-4">
								<div class="col form-group">
									<select name="shipper_country" value="{{ old('shipper_country') }}" class="country custom-select" required="true">
										<option value="" selected disabled>Select Country</option>
										@foreach($countries as $key => $country)
											<option value="{{$key}}"> {{$country}}</option>
										@endforeach
									</select>
								</div>
								<div class="col form-group">
									<select name="shipper_state" value="{{ old('shipper_state') }}" class="state custom-select" required="true">
										<option value="" selected disabled>State</option>
									</select>
								</div>
								<div class="col form-group">
									<select name="shipper_city" value="{{ old('shipper_city') }}" class="city custom-select">
										<option value="">City</option>
									</select>
								</div>
							</div>
						</section>
						<div class="form-row mb-4">
							<div class="col form-group">
								<input type="text" name="shipper_address" value="{{ old('shipper_address') ?? $users->address }}" class="form-control" placeholder="Enter Address" required="true">
							</div>
							<div class="col form-group">
								<input type="number" name="shipper_postal" value="{{ old('shipper_postal') ?? $users->postal_code }}" class="form-control" placeholder="Enter Postal Code" required="true">
							</div>
						</div>

						<h5 class="mt-2 mb-2"> Delivery Address</h5>
						<div class="form-row mt-3 mb-4">
							<div class="col form-group">
								<input type="text" name="receiver_firstN" value="{{ old('receiver_firstN') }}" class="form-control" placeholder="Enter First Name" required="true">
							</div>
							<div class="col form-group">
								<input type="text" name="receiver_lastN" value="{{ old('receiver_lastN') }}" class="form-control" placeholder="Enter Last Name" required="true">
							</div>
						</div>
						<div class="form-row mb-4">

							<div class="col form-group">
								<input type="number" name="receiver_phone" value="{{ old('receiver_phone') }}" class="form-control" placeholder="Enter Phone Number" required="true">
							</div>
						</div>
						<section>
							<div class="form-row mb-4">
								<div class="col form-group">
									<select name="receiver_country" value="{{ old('receiver_country') }}" class="country custom-select" required="true">
										<option value="" selected disabled>Country</option>
										@foreach($countries as $key => $country)
											<option value="{{$key}}"> {{$country}}</option>
										@endforeach
									</select>
								</div>
								<div class="col form-group">
									<select name="receiver_state" value="{{ old('receiver_state') }}" class="state custom-select" required="true">
										<option value="" selected disabled>State</option>
									</select>
								</div>
								<div class="col">
									<select name="receiver_city" id="" class="city custom-select">
										<option value="">City</option>
									</select>
								</div>
							</div>
						</section>
						<div class="form-row mb-4">
							<div class="col form-group">
								<input type="text" name="receiver_address" value="{{ old('receiver_address') }}" class="form-control" placeholder="Enter Address" required="true">
							</div>
							<div class="col form-group">
								<input type="number" name="receiver_postal" value="{{ old('receiver_postal') }}" class="form-control" placeholder="Enter Postal Code" required="true">
							</div>
						</div>


						<h5 class="mt-4 mb-4">Parcel Details</h5>
						<div class="form-row mt-2 mb-4">
							<div class="col form-group">
								<select name="type_id" value="{{ old('type_id') }}" class="custom-select" required="true">
									<option value="" selected disabled>Select Shipping Type</option>
									@foreach($types as $type)
										<option value="{{ $type->id }}">{{ $type->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="col form-group">
								<select name="transport_id" value="{{ old('transport_id') }}" class="custom-select" required="true">
									<option value="" selected disabled>Select Transport Mode</option>
									@foreach($transfers as $transfer)
										<option value="{{ $transfer->id }}">{{ $transfer->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-row mb-4">
							<div class="col form-group">
								<input type="text" name="weight" value="{{ old('weight') }}" class="form-control" placeholder="Weight e.g 12kg" required="true">
							</div>
							<div class="col form-group">
								<input type="text" name="qty" value="{{ old('qty') }}" class="form-control" placeholder="Quantity" required="true">
							</div>
						</div>
						<div class="form-row mb-4">
							<div class="col form-group">
								<input type="text" name="status"  value="In Transit" readonly class="form-control" placeholder="In Transit">
							</div>
						</div>

						<div class="form-row">
							<div class="col form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox">Agree to the <a href="">Tearms and conditions</a>
									</label>
								</div>
							</div>

							<div  class="col">
								<button class="btn btn-primary">Register Now</button>
							</div>
					</form>
					<br>
					<br>
				</div>
			</div>
			<div class="col-md-4">
				<ul class="list-group text-center ">
					<li class="list-group-item pt-4 pb-4 bg-light">

						<img src="{{ URL::to('images/user/logo-courier-ideal.png')}}" class="img-fluid" alt="">
						{{-- <h6> <b>Courier delivery Time</b> </h6> --}}

					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<p>Service : <b>Dart Delivery</b> </p>

					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<h6>Service Info</h6>
						<p>Same-day pick up: parcels will be collected today from 1pm to 6pm.</p>

					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<p>Next-day pick up: Parcels will be collected on the next working day from 1pm to 6pm.</p>
					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<p>For outskirt areas, 2-3 standard delivery days may apply..</p>
					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<p>All rates quoted are net rate inclusive of all surcharges.</p>
					</li>
					<li class="list-group-item pt-4 pb-4 bg-light">
						<p>Parcel weight will be determined by either actual or volumetric weight (VW) or whichever is higher..</p>
					</li>

				</ul>
			</div>
		</div>

	</section>
@stop

@section('footer_js')
	<script src="http://demo.expertphp.in/js/jquery.js"></script>
	<script src="{{ URL::to('admin/js/plugins/jquery.validate.min.js') }}"></script>
	<script src="{{ URL::to('custom/formvalidator.js') }}"></script>
	<script src="{{ URL::to('allcountries/js/intlTelInput.js') }}"></script>

	<script type="text/javascript">
		$('.country').change(function(){
			let countryID = $(this).val();
			let section = $(this).parent().parent()[0];
			let state = $(section.querySelector('.state'));
			let city = $(section.querySelector('.city'));
			// debugger;
			if(countryID){
				$.ajax({
					type:"GET",
					url:"{{url('get-state-list')}}?country_id="+countryID,
					success:function(res){
						if(res){
							state.empty();
							state.append('<option>Select</option>');
							$.each(res,function(key,value){
								state.append('<option value="'+key+'">'+value+'</option>');
							});

							state.on('change',function(){
								let stateID = $(this).val();
								if(stateID){
									$.ajax({
										type:"GET",
										url:"{{url('get-city-list')}}?state_id="+stateID,
										success:function(res){
											if(res){
												city.empty();
												$.each(res,function(key,value){
													city.append('<option value="'+key+'">'+value+'</option>');
												});

											}else{
												city.empty();
											}
										}
									});
								}else{
									city.empty();
								}

							});
						}else{
							state.empty();
						}
					}
				});
			}else{
				state.empty();
				city.empty();
			}
		});

	</script>
@stop