<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"  type="image/png" href="{{ URL::to('images/icon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dartdelivery - Say Goodbye to the Stress of Shipping!</title>
    {{-- <script src="http://www.codermen.com/js/jquery.js"></script> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('user/test.css') }}">
    <link rel="stylesheet" href="{{ URL::to('user/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('user/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('user/fonts/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::to('allcountries/css/intlTelInput.css') }}">
    @section('header_css')
    @show
</head>
<body>
    <div >
        
        @yield('content')

        @section('footer')
        @include('frontend.footer')
        @show
    </div>


    {{-- <script src="{{ URL::to('user/progress.js') }}"></script> --}}
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
    @section('footer_js')
    @show
</body>
</html>
