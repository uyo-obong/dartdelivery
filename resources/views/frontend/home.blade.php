@extends('frontend.layouts.app')

@section('content')

<section id="header">
    @include('frontend.inc.navbar')

    <div class="container">
        <div class="row text-center home_header">
            <div class="col-md-12">
                <h3 class="header_header">WELCOME TO</h3>
                <p class="header_para">24/7 Dart Delivery Trip</p>
                <div class="col-lg-7 offset-lg-3">
                    <form action="{{ route('homeconfirm')}}" method="post" >
                        {{ csrf_field() }}
                        {{ method_field('get')}}

                        <div class="input-group">
                            <input type="text" name="track" class="form-control border border-right-0" placeholder="Tracking Number">

                            <span class="input-group-btn">
                             <button class="btn btn-primary track" type="submit">TRACK</button>
                         </span>
                     </div>
                 </form>


             </div>
         </div>
     </div>
 </div>
</section>
{{-- The new add content --}}
<section class="home_second">
    <div class="container">
        <div class="row text-center pt-5 pb-5">
            <div class="col-md-12">
                <h2 class="home_secondHead">Say <span class="text-primary">Goodbye</span>
                to the Stress of Shipping!</h2>
                <p class="home_secondPara">
                Wherever you want your package delivered to, we'll deliver it for you.</p>
            </div>
        </div>
        <div class="row justify-content-center">
           
               <div class="col-md-4 mb-3">
                <div class="justify-content-center max-auto" style="width: auto;">
                    <img src="{{ URL::to('images/user/pos.png')}}" class="card-img-top" alt="Services">
                    <h3 style="color: #00a6c1;"><strong>Get Paid To Pick Your Packages </strong></h3>
                    <p>Our shipments is world-wide, you can ship your packages to any way you like, with over 600 thounsand agents waiting to deliver your packages. <a href="{{ route('register') }}">Register To Ship Now</a></p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="justify-content-center max-auto" style="width: auto;">
                    <img src="{{ URL::to('images/user/timer.png') }}" class="card-img-top" alt="Real Time Tracking">
                    <h3  style="color: #00a6c1;">Have Peace of Mind with <strong>Real-time Tracking</strong></h3>
                    <p>Get transparency on all your packages. You, your friends, loved ones or customers you are shipping to can track your package on real-time.<a href="{{ route('register') }}">Register To Ship Now</a></p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="justify-content-center max-auto" style="width: auto;">
                    <img  src="{{ URL::to('images/user/dropoff.png') }}" class="card-img-top" alt="Pick-Up and Drop-off Services">
                    <h3 style="color: #00a6c1;">Save Time in Traffic with Pick Up and Drop-off Services</h3>
                    <p>Dartdelivery is happy to pick-up packages from you by sending one of our agent to your door step. <a href="{{ route('register') }}">Register To Ship Now</a></p>
                </div>
            </div>
        
    </div>
</div>
</section>
{{-- End of the section --}}
<section id="home_third">
   <div class="container">
       <div class="row  text-center pt-5 pb-5">
           <div class="col-md-12">
               <h1 class="home_secondHead">Why You <span class="text-primary">Choose Us</span></h1>
               <p class="home_secondPara">WE MAKE MILLIONS OF DELIVERIES EVERY DAY. BUT WE DELIVER MORE THAN JUST PACKAGES. WE DELIVER HAPPINESS, GROWTH, HOPE OR
               SIMPLY, PEACE OF MIND.</p>
           </div>
       </div>
       <div class="row pb-5 mx-auto">
            <div class="col-md-4 mb-3 max-auto">
            <div class="card max-auto text-center" style="width: auto;height:17rem;">
                <div class="card-body mt-4 max-auto">
                    <i class="fab fa-typo3 service_icon text-danger"></i>
                    <h4 class="card-title card_head pt-2 pb-2">Premium Support</h4>
                    <p class="card-text card_para">Our team of dedicated experts are available 24/7 to attend to your each and every need. Need assistance? We got you.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card max-auto text-center" style="width: auto;height:17rem;">
                <div class="card-body mt-4">
                    <i class="fas fa-bolt service_icon text-primary"></i>
                    <h4 class="card-title card_head pt-2 pb-2">COURIER EXPRESS</h4>
                    <p class="card-text card_para">Pay a little more, get your parcel delivered a little faster with our premium resources at your mercy..</p>

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card max-auto text-center" style="width: auto;height:17rem;">
                <div class="card-body mt-4">
                    <i class="fas fa-bookmark service_icon text-secondary "></i>
                    <h4 class="card-title card_head pt-2 pb-2">COURIER NORMAL</h4>
                    <p class="card-text card_para">Pay the standard fee, get your parcel delivered as fast as we can get it across giving our resources..</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop

