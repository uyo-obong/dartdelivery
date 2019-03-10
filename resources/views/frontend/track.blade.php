@extends('frontend.layouts.app')

@section('content')
    <section id="track">
        @include('frontend.inc.navbar')
        <div class="container">
            <div class="row text-center home_header">
                <div class="col-md-12">
                    <h3 class="header_header">TRACK DARTDELIVERY SHIPMENTS</h3>
                    <p class="header_para">Automatically detect courier based on tracking number format.</p>
                    <div class="col-lg-7 offset-lg-3">
                        <div class="input-group pt-3">
                            <input type="text" class="form-control border border-right-0" placeholder="Tracking Number">
                            <span class="input-group-btn">
                              <a href="invalid.html"><button class="btn btn-primary track" type="button">TRACK</button></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home_third">
        <div class="container">
            <div class="row text-center pt-5 pb-5">
                <div class="col-md-12">
                    <h1 class="home_secondHead">HOW CAN WE <span class="text-primary">HELP YOU</span>TODAY</h1>
                    <p class="home_secondPara">TRACK AND GET UPDATES ON YOUR PARCEL THROUGH THIS PAGE.</p>
                </div>
            </div>
            <div class="row pb-5 mx-auto">
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto text-center" style="width: auto;height:21.8rem;">
                        <div class="card-body mt-4">
                            <i class="fas fa-truck"></i>
                            <h4 class="card-title card_head pt-2 pb-2">Premium Support</h4>
                            <p class="card-text card_para">Our team of dedicated experts are available 24/7 to attend to
                                your each and every need. Need assistance? We got you.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto text-center" style="width: auto;height:20rem;">
                        <div class="card-body mt-4">
                            <i class="fas fa-truck"></i>
                            <h4 class="card-title card_head pt-2 pb-2">COURIER EXPRESS</h4>
                            <p class="card-text card_para">Pay a little more, get your parcel delivered a little faster with
                                our premium resources at your mercy..</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto text-center" style="width: auto;height:19rem;">
                        <div class="card-body mt-4">
                            <i class="fas fa-truck"></i>
                            <h4 class="card-title card_head pt-2 pb-2">COURIER NORMAL</h4>
                            <p class="card-text card_para">Pay the standard fee, get your parcel delivered as fast as we can
                                get it across giving our resources..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop