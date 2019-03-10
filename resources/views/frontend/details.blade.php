@extends('frontend.layouts.app')

@section('content')
<section id="details">
	@include('frontend.inc.navbar')
	<div class="container">
		<div class="row text-center home_header">
			<div class="col-md-12">
				<h3 class="header_header">Your Pick Details</h3>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="col-md-7">
					<div class="d-flex">
						<img src="{{ URL::to('images/user/pickup.png')}}"  class="img-fluid" alt="">
						<h3 class="mt-3 ml-3">SCHEDULED PICKUP</h3>
					</div>

				</div>
			</div>
			<div class="row mt-3 mb-5">
				<div class="col-md-8">
					<a  class="btn btn-success" href=""> Send New Parcel</a>
					<table class="table table-responsive table-small">
						<thead>
							<tr>
								<th scope="col">Courier</th>
								<th scope="col">Services</th>
								<th scope="col">Delivery</th>
								<th scope="col">Weight</th>
								<th scope="col">Quantity(s)</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								@foreach($details as $detail)
								<th scope="row">
									<img style="width: 50px" src="{{ URL::to('images/user/logo-courier-ideal.png')}}" class="img-fluid" alt=""></th>
									<td>Dart Delivery</td>
									<td>4-7 days</td>
									<td>{{ $detail->weight }}</td>
									<td>{{ $detail->qty }}</td>
									<td><button disabled class="btn bg-danger text-light">Booked</button></td>
									@endforeach
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4">
						<ul class="list-group text-center ">
							<li class="list-group-item pt-4 pb-4 bg-light">
								@foreach($details as $detail)
								<h6>From: <b>{{ $detail->shipper_firstN}}</b> </h6>
								<h6>To : <b>{{ $detail->receiver_firstN}}</b></h6>
								@endforeach

							</li>
							<li class="list-group-item pt-4 pb-4 bg-light">
								<img src="{{ URL::to('images/user/details.png')}}"  class="img-fluid" alt="">
								<h6>Weight : <b>223</b> </h6>
							</li>
							{{-- <li class="list-group-item pt-4 pb-4 bg-light">
								<h6>Total volumentic Weight</h6>
								<p>273.4</p>

							</li>
							<li class="list-group-item pt-4 pb-4 bg-light">
								<h6> Weight</h6>
								<p>243</p>

							</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</section>
		@stop