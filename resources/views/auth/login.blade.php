@extends('frontend.layouts.app')


@section('content')
<section  id="login1">
   @include('frontend.inc.navbar')
   <div class="container">
    <div  class="row mt-5 mx-auto justify-content-center">
        <div class="col-md-6 card p-5 login" id="form_body">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h3 class="text-primary">Login</h3>
                <div class="form-group pt-4">
                    <input type="email" name="email" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail Address" value="{{ old('email') }}" required autofocus>


                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <input type="password" name="password" class="form-control  border border-top-0 rounded-0 border-left-0 border-right-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password">

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="exampleRadios2">
                        Remember Me
                    </label>
                </div>
                <div class="form-group pt-4 pb-3">
                    <p>Not Registered? 
                        <a href="{{ route('register')}}">Sign Up</a> | @if (Route::has('password.request'))<a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif | <a href="/">Home</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary pl-4 pr-4">Login</button>
                </form>
            </div>
        </div>
    </div>
    <br>
</section>
@endsection
@section('footer')
@stop