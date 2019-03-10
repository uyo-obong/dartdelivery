@extends('frontend.layouts.app')

@section('header_css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.min.css" />
 <link href="{{ URL::to('custom/formerrorcolor.css') }}" rel="stylesheet" />

@endsection
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
					<a  class="btn btn-success" href="{{ route('homeDelivery')}}"> Send New Parcel</a>
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
							@foreach($details as $detail)
							<tr>
								<th scope="row">
									<img style="width: 50px" src="{{ URL::to('images/user/logo-courier-ideal.png')}}" class="img-fluid" alt=""></th>
									<td>Dart Delivery</td>
									<td>4-7 days</td>
									<td>{{ $detail->weight }}</td>
									<td>{{ $detail->qty }}</td>
									<td><button disabled class="btn bg-danger text-light">Booked</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-4">
						<ul id="delete" class="list-group">
							@foreach($details as $detail)
							<li class="list-group-item pt-4 pb-4 bg-light">
								<h6>Parcel: {{ $loop->index + 1}}</h6>
								<h6>From: <b>{{ $detail->shipper_firstN}}</b> </h6>
								<h6>To : <b>{{ $detail->receiver_firstN}}</b></h6>

								<form id="form-data" class="remove swal2" action='{{ route('homeDestroy', $detail->id) }}' method='post' style="display: none;">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									<a type="button" href="#">Delete</a>
								</form>
								<a style="color: red;" rel="tooltip" class="float-right remove" href="#"><i class="fas fa-trash-alt"></i></a>
							</li>
							@endforeach
							{{-- <li class="list-group-item pt-4 pb-4 bg-light">
								<img src="{{ URL::to('images/user/details.png')}}"  class="img-fluid" alt="">
								<h6>Weight : <b>223</b> </h6>
							</li> --}}
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

		@section('footer_js')
		<script>
			$(document).ready(function() {
				
				let ul = $('#delete');
            // Edit record
            
            // Delete a record
            ul.on('click', '.remove', function(e) {
                // alert('You clicked on Like button');
                const swalWithBootstrapButtons = Swal.mixin({
                	confirmButtonClass: 'btn btn-success',
                	cancelButtonClass: 'btn btn-danger',
                	buttonsStyling: false,
                });

                swalWithBootstrapButtons.fire({
                	title: 'Are you sure?',
                	text: "You won't be able to revert this!",
                	type: 'error',
                	Height: 200,
                	showCancelButton: true,
                	confirmButtonText: 'Yes, delete it!',
                	cancelButtonText: 'No, cancel!',
                	reverseButtons: true
                }).then((result) => {

                	if (result.value) {
                		swalWithBootstrapButtons.fire({
                			title: 'Deleted!',
                			text: 'Your file has been deleted.',
                			type: 'success',
                			timer: 9000,

                		});
                		document.getElementById('form-data').submit();
                	}

                });
                e.preventDefault();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    @endsection