@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Send Quote</h4>
            </div>
            @include('messages.flash')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">

                        <form id="RangeValidation" class="form-horizontal" action="{{ route('sendMail') }}" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="name" value="{{ $client->shipper_name }}">
                            <input type="hidden" name="email" value="{{ $client->sender_email }}">
                            <input type="hidden" name="address" value="{{ $client->receiver_address }}">
                            <input type="hidden" name="type" value="{{ $client->type->name }}">
                            {{--<div class="form-group">--}}
                                {{--<input class="form-control" type="text"  name="title"  placeholder="Enter Title" required="true" />--}}
                            {{--</div>--}}


                            <div class="form-group">
                                <input class="form-control" type="text"  name="price"  placeholder="Enter Price e.g 12.34" required="true" />
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="write your description here.." required="true"></textarea>
                            </div>

                            <div class="card-footer text-center">
                                <a  href="{{ route('client') }}"
                                    <button class="btn btn-primary">Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_css')
    <script>
        $(document).ready(function() {
            // initialise Datetimepicker and Sliders
            demo.initDateTimePicker();
            if ($('.slider').length != 0) {
                demo.initSliders();
            }
        });
    </script>
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
@stop