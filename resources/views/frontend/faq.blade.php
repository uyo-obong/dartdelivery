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
                            <p>+14149732122</p>
                        </li>
                        <li class="list-group-item pt-4 pb-4 bg-light">
                            <span class="fas fa-map-marker-alt contact_icon"></span>
                            <h4>ADDRESS</h4>
                            <p>4/f, block d, New oriental choice
                                business centre 95 congyun road
                                Baiyun district Guangzhou China</p>
                        </li>
                        <li class="list-group-item pt-4 pb-4 bg-light">
                            <span class="far fa-envelope contact_icon"></span>
                            <h4>EMAIL</h4>
                            <p>Info@choiceexp.net</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="card mt-5">
                        <h5 class="card-header">Do memberships include the original PSD files? <span class="fas fa-times float-right" id="icon"></span></h5>
                        <div class="card-body" id="faq">
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">How can I purchase a single Template?<span class="fas fa-times float-right" id="icon2"></span></h5>
                        <div class="card-body" id="faq2">
                            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
                                from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,.</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">New to the Wordpress? Lets get started<span class="fas fa-times float-right" id="icon3"></span></h5>
                        <div class="card-body" id="faq3">
                            <p class="card-text">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                                Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">How to I modify the Footer copyright <span class="fas fa-times float-right" id="icon4"></span></h5>
                        <div class="card-body" id="faq4">
                            <p class="card-text">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                                by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance..</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">How do I create a child Template?<span class="fas fa-times float-right" id="icon5"></span></h5>
                        <div class="card-body" id="faq5">
                            <p class="card-text">The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Where do i post support query?<span class="fas fa-times float-right" id="icon6"></span></h5>
                        <div class="card-body" id="faq6">
                            <p class="card-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
                                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by
                                English versions from the 1914 translation by H. Rackham..</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">How Do I Install an Extension?<span class="fas fa-times float-right" id="icon7"></span></h5>
                        <div class="card-body" id="faq7">
                            <p class="card-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
                                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original</p>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Featured <span class="fas fa-times float-right" id="icon8"></span></h5>
                        <div class="card-body" id="faq8">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <h5 class="card-header">Payments Not Marked as Complete?<span class="fas fa-times float-right" id="icon9"></span></h5>
                        <div class="card-body" id="faq9">
                            <p class="card-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
                                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop