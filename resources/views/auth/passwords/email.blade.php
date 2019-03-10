@extends('frontend.layouts.app')

@section('content')
<section  id="reset">
   @include('frontend.inc.navbar')
   <div class="container">
    <div  class="row mt-5 mx-auto justify-content-center">
        <div class="col-md-6 card p-5 login" id="form_body">
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h3 class="text-primary">Reset Password</h3>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="form-group pt-4">
                    <input type="email" name="email" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail Address" value="{{ old('email') }}" required autofocus>


                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary pl-4 pr-4">Send Password Reset Link</button>
            </form>
        </div>
    </div>
</div>
<br>
</section>
@endsection
@section('footer')
@stop
