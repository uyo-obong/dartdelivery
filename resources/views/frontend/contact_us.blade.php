@extends('frontend.layouts.app')

@section('content')
    <section id="contact">
        @include('frontend.inc.navbar')
        <div class="container">
            <div class="row text-center home_header">
                <div class="col-md-12">
                    <h3 class="header_header">Reach Out To Us</h3>
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
            <div class="row mt-5 mb-5">
                <div class="col-md-8">
                    <form action="">
                        <div class="form-group pb-2 pt-2">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group pt-2 pb-2">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group pt-2 pb-2">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your Message" required></textarea>
                        <button class="btn btn-primary pl-4 pr-4 rounded-0 mt-4">Send</button>
                    </form>
                </div>
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
            </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <iframe width='100%' height='500px' id='mapcanvas'
                            src='https://maps.google.com/maps?q=London,%20United%20Kingdom&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed'
                            frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
                        <div class="zxos8_gm"><a href="https://ukgaynews.org.uk">https://ukgaynews.org.uk</a></div>
                        <div style='overflow:hidden;'>
                            <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                        </div>
                        <div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@stop