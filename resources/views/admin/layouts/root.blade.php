<html>
<head>
    <meta charset="utf-8" />
    {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('images/icon.png') }}"> --}}
    <link rel="icon"  type="image/png" href="{{ URL::to('images/icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DartDelivery Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="../../../fonts.googleapis.com/css1a80.css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ URL::to('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/paper-dashboard.min790f.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.min.css" />
    {{--<!-- CSS Just for demo purpose, don't include it in your project -->--}}
    {{--<link href="admin/demo/demo.css" rel="stylesheet" />--}}
</head>
<body>

<div class="wrapper ">
    @include('admin.inc.sidebar')
    <div class="main-panel">
        @include('admin.inc.navbar')
        @yield('content')
        @include('admin.footer')
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
{{--<script src="{{ URL::to('admin/js/plugins/sweetalert2.min.js') }}"></script>--}}
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
        $sidebar = $('.sidebar');
        $sidebar_img_container = $sidebar.find('.sidebar-background');
        $full_page = $('.full-page');
        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        window_width = $(window).width();
        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
        // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
        //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
        //         $('.fixed-plugin .dropdown').addClass('show');
        //     }
        //
        // }
        $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
            }
        });
        $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var new_color = $(this).data('color');
            if ($sidebar.length != 0) {
                $sidebar.attr('data-active-color', new_color);
            }
            if ($full_page.length != 0) {
                $full_page.attr('data-active-color', new_color);
            }
            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-active-color', new_color);
            }
        });
        $('.fixed-plugin .background-color span').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var new_color = $(this).data('color');
            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }
            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }
            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
        });
        $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');
            var new_image = $(this).find("img").attr('src');
            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                });
            }
            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                $full_page_background.fadeOut('fast', function() {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                });
            }
            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }
            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
        });
        $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
            $full_page_background = $('.full-page-background');
            $input = $(this);
            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                }
                if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                }
                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }
                if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                }
                background_image = false;
            }
        });
        $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
            $body = $('body');
            $input = $(this);
            if (paperDashboard.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                paperDashboard.misc.sidebar_mini_active = false;
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
            } else {
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
                setTimeout(function() {
                    $('body').addClass('sidebar-mini');
                    paperDashboard.misc.sidebar_mini_active = true;
                }, 300);
            }
            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);
            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);
        });
    });
</script>
@yield('footer_css')

</body>
</html>