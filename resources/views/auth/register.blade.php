@extends('frontend.layouts.app')

@section('header_css')
    <link href="{{ URL::to('custom/formerrorcolor.css') }}" rel="stylesheet" />
@stop
@section('content')
    <section id="register">
        @include('frontend.inc.navbar')
        <div class="container">
            <div class="row mt-5 mx-auto justify-content-center">
                <div class="col-md-8 card p-5" id="form_body">
                    <form id="TypeValidation"  method="POST" action="{{ route('register') }}" >
                        {{ csrf_field() }}
                        <h3 class="text-primary">Sign Up</h3>
                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-6 mb-3 form-group">
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0" placeholder="First name" required="true">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0" placeholder="Last name" required="true">
                            </div>
                        </div>


                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-6 mb-4 form-group">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0" id="validationCustom01" placeholder="Email" required email="true">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <input type="tel" name="phone_number" value="{{ old('phone_number') }}" class="form-control  border border-top-0 rounded-0 border-left-0 border-right-0"  placeholder="Phone Number" required="true">
                            </div>
                        </div>

                        <section>
                            <div class="form-row pt-3 pb-3">
                                <div class="col-md-6 mb-3 form-group">
                                    <select type="text" name="country" class="country  custom-select border border-top-0 rounded-0 border-left-0 border-right-0"" id="countryId" required="true" >
                                    <option value="" selected disabled>Select Country</option>
                                    @foreach($countries as $key => $country)
                                        <option value="{{old('country') ?? $key}}"> {{$country}}</option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="col-md-3 mb-3 form-group">
                                    <select type="text" name="state" value="{{ old('state') }}"  class="state order-alpha custom-select border border-top-0 rounded-0 border-left-0 border-right-0"   required="true">
                                        <option value=''>Select State</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3 form-group">
                                    <div class="input-group">
                                        <select type="text" name="city" value="{{ old('city') }}" class="city order-alpha custom-select border border-top-0 rounded-0 border-left-0 border-right-0" required="true">
                                            <option value=''>Select City</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-6 mb-3 form-group">
                                <input type="text" name="address" value="{{ old('address') }}"class="form-control border border-top-0 rounded-0 border-left-0 border-right-0"  placeholder="Address" required="true">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <input type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0"  placeholder="Enter Postal Code" required="true">
                            </div>
                        </div>

                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-6 mb-3 form-group">
                                <input type="password" name="password" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required="true">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <input type="password" name="password_confirmation" class="form-control border border-top-0 rounded-0 border-left-0 border-right-0" placeholder="Re-enter Password" required="true">
                            </div>
                        </div>

                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
                                    <input type="checkbox" name="terms" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">By clicking Register, you agree to the <a href=""> Terms and Condition</a> set out by this site, including our Cookie Use.</label>


                                    @if ($errors->has('terms'))
                                        <span class="help-block">
                                            <strong class="terms">{{ $errors->first('terms') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <p>Already Registered? <a href="{{ route('login') }}">Login</a> | <a href="/">Home</a></p>
                            </div>
                        </div>

                        <button class="btn btn-primary pl-4 pr-4">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </section>
@endsection

@section('footer')
@stop

@section('footer_js')
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="{{ URL::to('admin/js/plugins/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::to('custom/formvalidator.js') }}"></script>
    <script src="{{ URL::to('allcountries/js/intlTelInput.js') }}"></script>


    <script type="text/javascript">

        $('.country').change(function(){
            let countryID = $(this).val();
            let section = $(this).parent().parent()[0];
            let state = $(section.querySelector('.state'));
            let city = $(section.querySelector('.city'));
            // debugger;  
            if(countryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-state-list')}}?country_id="+countryID,
                    success:function(res){
                        if(res){
                            state.empty();
                            state.append('<option>Select</option>');
                            $.each(res,function(key,value){
                                state.append('<option value="'+key+'">'+value+'</option>');
                            });

                            state.on('change',function(){
                                let stateID = $(this).val();
                                if(stateID){
                                    $.ajax({
                                        type:"GET",
                                        url:"{{url('get-city-list')}}?state_id="+stateID,
                                        success:function(res){
                                            if(res){
                                                city.empty();
                                                $.each(res,function(key,value){
                                                    city.append('<option value="'+key+'">'+value+'</option>');
                                                });

                                            }else{
                                                city.empty();
                                            }
                                        }
                                    });
                                }else{
                                    city.empty();
                                }

                            });
                        }else{
                            state.empty();
                        }
                    }
                });
            }else{
                state.empty();
                city.empty();
            }
        });

    </script>


@stop