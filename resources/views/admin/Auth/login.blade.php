<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="96x96" href="{{ URL::to('images/icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::to('images/icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DartDelivery Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="../../../fonts.googleapis.com/css1a80.css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ URL::to('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/paper-dashboard.min790f.css?v=2.0.1') }}" rel="stylesheet" />
    {{--<!-- CSS Just for demo purpose, don't include it in your project -->--}}
    {{--<link href="admin/demo/demo.css" rel="stylesheet" />--}}
</head>

<body class="login-page">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo">Dartdelivery Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="register.html" class="nav-link">
                            <i class="nc-icon nc-book-bookmark"></i> Register
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="{{ route('adminView') }}" class="nav-link">
                            <i class="nc-icon nc-tap-01"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page ">
        <div class="full-page section-image" filter-color="black" data-image="{{ URL::to('images/image3.jpg') }}">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">

                        <form class="form" method="POST" action="{{ route('adminLogin') }}">
                            {{ csrf_field() }}
                            <div class="card card-login">
                                <div class="card-header ">
                                    <div class="card-header ">
                                        <h3 class="header text-center">Login</h3>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i class="nc-icon nc-key-25"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button href="#pablo" class="btn btn-primary btn-round btn-block mb-3">Get Started</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            Dartdelivery
                        </li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                  <span class="copyright">
                    ©
                    <script>
                      document.write(new Date().getFullYear())
                  </script>, made with <i class="fa fa-heart heart"></i> by Creative Legendary
              </span>
          </div>
      </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{ URL::to('admin/js/core/jquery.min.js') }}"></script>
<script src="{{ URL::to('admin/js/core/popper.min.js') }}"></script>
<script src="{{ URL::to('admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ URL::to('admin/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ URL::to('admin/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ URL::to('admin/js/plugins/sweetalert2.min.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ URL::to('admin/js/plugins/jquery.validate.min.js') }}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ URL::to('admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ URL::to('admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ URL::to('admin/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ URL::to('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ URL::to('admin/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ URL::to('admin/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ URL::to('admin/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ URL::to('admin/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Bootstrap Table -->
<script src="{{ URL::to('admin/js/plugins/nouislider.min.js') }}"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../../buttons.github.io/buttons.js"></script>
<!-- Chart JS -->
<script src="{{ URL::to('admin/js/plugins/chartjs.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::to('admin/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ URL::to('admin/js/paper-dashboard.min790f.js?v=2.0.1') }}" type="text/javascript"></script>
{{--<!-- Paper Dashboard DEMO methods, don't include it in your project! -->--}}
<script src="{{ URL::to('admin/demo/demo.js') }}"></script>
<!-- Sharrre libray -->
{{--<script src="../assets/demo/jquery.sharrre.js"></script>--}}

<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
</body>


<!-- Mirrored from demos.creative-tim.com/paper-dashboard-2-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Dec 2018 21:07:32 GMT -->
</html>