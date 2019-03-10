@extends('frontend.layouts.app')

@section('content')
<section id="invalid">
       @include('frontend.inc.navbar')
        <div class="container">
            <div class="row text-center home_header">
                <div class="col-md-12">
                    <h3 class="header_header">Your Shipping History</h3>
                    <p class="header_para">EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA
                        DESERUNT.</p>
                    <div class="col-lg-7 offset-lg-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
            <div class="col-md-8"> 
                <div class="d-flex">
                    <img src="{{ URL::to('images/user/tracking-search.png')}}" class="img-fluid" alt="">
                     <h3 class="mt-3">Parcel Tracking</h3>
                </div>
                <hr>
                <div class="text-center mt-5 mb-5">
                    <img src="{{ URL::to('images/user/no_courier.png')}}" class="img-fluid" alt="">
                    <h4>Tracking Number Not found</h4>
                    <p><span class="text-danger"> {{ $q }}</span> check the number or Contact Us.</p>
                    <a href="/" class="text-dark">Back to home</a>
                </div>
                  </div>
                <div class="col-md-4">
                    <ul class="list-group text-center ">
                        <li class="list-group-item pt-4 pb-4 bg-light">
                            <span class="fas fa-barcode display-3 contact_icon"></span>
                            <h4>Bar Code</h4>
                            <p>Not Found</p>
                        </li>
                        <li class="list-group-item pt-4 pb-4 bg-light">
                            <span class="fas fa-map-marker-alt contact_icon"></span>
                            <h6>Current State</h6>
                          
                        </li>
                        <li class="list-group-item pt-4 pb-4 bg-light">
                            <span class="far fa-envelope contact_icon"></span>
                            <h6>Weight KG</h5>
                        </li>
                    </ul>
                
                </div>
               
            </div>
        </div>
    </section>
@stop