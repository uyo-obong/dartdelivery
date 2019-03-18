@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ URL::to('admin/img/bg/damir-bosnjak.jpg') }}" alt="...">
                    </div>
                    <div style="min-height: 24px;" class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ URL::to('admin/img/default-avatar.png') }}" alt="...">
                                <h5 class="title">{{ $admins->name }}</h5>
                                {{--<p>E-mail: {{ $admins->email }}</p>--}}
                            </a>

                        </div>

                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class=" col-md-5 col-5 ml-auto">
                                    Role:
                                </div>
                                <div class=" col-md-7 col-7 ml-auto mr-auto">

                                    @foreach( $admins->role as $role )
                                        {{ $role->name }}
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('messages.flash')

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form id="RangeValidation" action="{{ route('updateprofile', $admins->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Dart Delivery Inc.">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" type="text"  name="name" value="{{ old('name') ?? $admins->name }}"  placeholder="Enter Name" required="true" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>E-mail Address</label>
                                        <input id="email" type="email" value="{{ old('email') ?? $admins->email }}"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter E-mail Address"  email="true">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" pattern=".{6,}"   title="6 characters minimum" >

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                        <small>Leave password empty if you don't want to chnage</small>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Re-type Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Retype Password">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('footer_css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script>
        function setFormValidation(id) {
            $(id).validate({
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                    $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
                },
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
                },
                errorPlacement: function(error, element) {
                    $(element).closest('.form-group').append(error);
                },
            });
        }

        $(document).ready(function() {
            setFormValidation('#RegisterValidation');
            setFormValidation('#TypeValidation');
            setFormValidation('#LoginValidation');
            setFormValidation('#RangeValidation');
        });
    </script>
    <script type="text/javascript">
        setTimeout(
            function() { $(':password').val(""); },
            1  //1,000 milliseconds = 1 second
        );
    </script>
@stop