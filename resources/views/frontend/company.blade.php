@extends('frontend.layouts.app')

@section('content')

    <section id="company">
        @include('frontend.inc.navbar')
        <div class="container">
            <div class="row text-center home_header">
                <div class="col-md-12">
                    <h3 class="header_header">WHO WE ARE</h3>
                    <p class="header_para">EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT.</p>
                    <div class="col-lg-7 offset-lg-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-5 text-left">
                    <h5 class="company_head">GOOD COMPANY</h5>
                    <p class="company_para">Vestibulum dapibus ac ex sit amet accumsan. Suspendisse blandit, nunc nec finibus finibus, mauris dui volutpat ex, quis
                        ultricies lorem erat ac diam. Aliquam eget est at tellus tempor iaculis sit amet vel enim.</p>
                    <a href="#">View Our Services  <span class="fas fa-arrow-right"></span></a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 text-left">
                    <h5 class="company_head">GOOD COMPANY</h5>
                    <p class="company_para">Vestibulum dapibus ac ex sit amet accumsan. Suspendisse blandit, nunc nec finibus finibus, mauris dui volutpat
                        ex, quis
                        ultricies lorem erat ac diam. Aliquam eget est at tellus tempor iaculis sit amet vel enim.</p>
                    <a href="#">View Our Services <span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto">
            <div class="row mt-5 mb-5 mx-auto center">
                <div class="col-md-4">
                    <div class="card mx-auto shadow shadow-regular" style="width: auto">
                        <img src="{{ URL::to('images/user/team1.png') }}" class="card-img-top" alt="...">
                        <div class="middle">
                            <div class="text">
                                <a href=""><span class="fab fa-facebook icon mr-3"></span></a>
                                <a href=""><span class="fab fa-twitter icon"></span></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Stanford Jame</h4>
                            <p class="card-text">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mx-auto shadow shadow-regular" style="width: auto">
                        <img src="{{ URL::to('images/user/team2.png') }}" class="card-img-top" alt="...">
                        <div class="middle">
                            <div class="text">
                                <a href=""><span class="fab fa-facebook icon mr-3"></span></a>
                                <a href=""><span class="fab fa-twitter icon"></span></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Stanford Jame</h4>
                            <p class="card-text">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mx-auto shadow shadow-regular" style="width: auto;">
                        <img src="{{ URL::to('images/user/team3.png') }}" class="card-img-top" alt="...">
                        <div class="middle">
                            <div class="text">
                                <a href=""><span class="fab fa-facebook icon mr-3"></span></a>
                                <a href=""><span class="fab fa-twitter icon"></span></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Stanford Jame</h4>
                            <p class="card-text">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop