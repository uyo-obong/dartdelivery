<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"  type="image/png" href="{{ URL::to('images/icon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dartdelivery') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('user/test.css') }}">
    <link rel="stylesheet" href="{{ URL::to('user/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('user/fonts/css/all.css') }}">
</head>
<body>

    <div class="container-fluid invoice-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color:#F0F2FF">
                    <div class="card-header" style="background:linear-gradient(#6D65CF, #7562E3)">
                        <h3 class="card-title"><strong style="color:#fff">SHIPPING DETAILS</strong></h3>
                    </div>
                    {{-- @foreach($trackings as $tracking) --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td width="40%"><strong style="color:#03C">SENDER'S DETAILS:</strong></td>
                                        <td width="20%">&nbsp;</td>
                                        <td width="40%"><strong style="color:#03C">RECEIVER'S DETAILS:</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid">
                                        <td height="30">
                                            <p class="style3"><strong>Name:</strong> {{ $details->shipping->shipper_firstN }}</p>
                                            <p class="style3"><strong>Phone:</strong> {{ $details->shipping->shipper_phone }}</p>
                                            <p><span class="style3"><strong>Address:</strong> {{ $details->shipping->shipper_address }}</span></p>
                                        </td>
                                        <td></td>
                                        <td height="30">
                                            <p class="style3"><strong>Name:</strong> {{ $details->shipping->receiver_firstN }} </p>
                                            <p class="style3"><strong>Phone:</strong> {{ $details->shipping->receiver_phone }}</p>
                                            <p class="style3"><strong>Address:</strong> {{ $details->shipping->receiver_address}} </p>
                                        </td>
                                    </tr>
                                </tbody>
                                <h3 class="text-center text-primary mt-3 mb-4">Tracking No: {{ $details->shipping->tracking_no }}</h3>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12 col-sm-9">
             <h3 class="text-center text-primary mt-3 mb-4">TRACKING HISTORY</h3> 

             <div class="middle-right-grid">
                <div class="bs-example">
                    <div id="tracking-accordion">
                        <div class="card">
                            <div class="card-body">
                                <ul class="delivered-grid-box">
                                    @foreach($trackings as $tracking)
                                    <li>
                                        <div class="delivered-left"> <span>{{ $tracking->pick_time}}</span></div>
                                        <span class="d-bulte"><i class="current"></i></span>
                                        <div  class="delivered-right"> <strong style="text-transform: uppercase;">{{ $tracking->status}}</strong>
                                            {{ $tracking->comment}}<br>{{$tracking->new_location}}</div>
                                        </li><br><br>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right btn-group btn-group-sm hidden-print">
                    <a href="javascript:window.print()" class="btn btn-primary mt-4"><i class="fa fa-print"></i> Print</a>
                </div>
                <p class="text-center hidden-print"><a href="{{ route('homeDetails')}}">«Logout</a></p>
            </div>
        </div>
    </div>  
</div>




<script src="{{ URL::to('user/progress.js') }}"></script>
<script src="{{ URL::to('user/bootstrap/js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>
</html>