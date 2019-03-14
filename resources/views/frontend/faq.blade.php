@extends('frontend.layouts.app')

@section('content')
<section id="faq_section">
    @include('frontend.inc.navbar')
    <div class="container">
        <div class="row text-center home_header">
            <div class="col-md-12">
                <h3 class="header_header">WHO WE ARE</h3>
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
            <div class="col-md-4">
                <ul class="list-group text-center ">
                    <li class="list-group-item pt-4 pb-4 bg-light">
                        <span class="fas fa-mobile contact_icon"></span>
                        <h4>PHONE</h4>
                        <p>+12252383220</p>
                    </li>
                    <li class="list-group-item pt-4 pb-4 bg-light">
                        <span class="fas fa-map-marker-alt contact_icon"></span>
                        <h4>ADDRESS</h4>
                        <p>Bob Erlicious, 123 Bobby Drive Victoria, BC V9A 8P8, US</p>
                    </li>
                    <li class="list-group-item pt-4 pb-4 bg-light">
                        <span class="far fa-envelope contact_icon"></span>
                        <h4>EMAIL</h4>
                        <p><a  href="mailto:dartcourierservice@outlook.com">dartcourierservice @outlook.com</a></p>
                    </li>
                </ul>
            </div>
            <div class="max-auto col-md-8">
                <div class="card  mt-5 mx-auto">
                    <h5 class="card-header">WHAT DOES DD DELIVER? <span class="fas fa-times float-right" id="icon"></span></h5>
                    <div class="card-body" id="faq">
                        <p class="card-text">Dartdelivery is designed to suit all your courier needs. We deliver packages of all shapes and sizes – from small items (lipstick) to gift coupons, foodstuff and large items (fridges), we have agents in 100+ countries.</p>
                    </div>
                </div>
                <div class="card  mx-auto">
                    <h5 class="card-header">HOW DO I GET MY PACKAGES TO DARTDelivery?<span class="fas fa-times float-right" id="icon2"></span></h5>
                    <div class="card-body" id="faq2">
                        <p class="card-text">Our licensed and professional drivers make shipping super easy by picking up packages from your place of business, with guaranteed next-day (within the locality) delivery to the customer.</p>
                    </div>
                </div>
                <div class="card  mx-auto">
                    <h5 class="card-header">WHAT IF THE CUSTOMER IS UNAVAILABLE ON DELIVERY DAY?<span class="fas fa-times float-right" id="icon3"></span></h5>
                    <div class="card-body" id="faq3">
                        <p class="card-text">Don’t worry! Our drivers will reschedule the delivery as early as the next working day or the next available date convenient for the customer.</p>
                    </div>
                </div>
                <div class="card mx-auto">
                    <h5 class="card-header">HOW CAN I MAKE PAYMENT? <span class="fas fa-times float-right" id="icon4"></span></h5>
                    <div class="card-body" id="faq4">
                        <p class="card-text">With our user friendly website, it is very easy to process your payment. Just register your shipping details, one of our customer service will send you an billing inovice on how to make payment through your e-mail address within 3mins.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
@stop