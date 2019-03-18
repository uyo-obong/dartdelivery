@extends('frontend.layouts.app')

@section('content')
    <section  id="pasreset">
        @include('frontend.inc.navbar')
        <div class="container">
            <div  class="row mt-5 mx-auto justify-content-center">
                <div class="col-md-6 card p-5 login" id="form_body">
                    <form method="POST" action="{{ route('password.update') }}">
                        {{ csrf_field() }}
                        <h3 class="text-primary">Reset Password</h3>

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group pt-4">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="E-Mail Address" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group pt-4">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group pt-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="Confirm Password" required>
                        </div>


                        <button type="submit" class="btn btn-primary pl-4 pr-4">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@stop
