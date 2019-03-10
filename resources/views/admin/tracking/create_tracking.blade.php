@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Update Tracking</h4>
                {{ $tracking->shipper_name }}
            </div>
            @include('messages.flash')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">

                        <form id="RangeValidation" class="form-horizontal" action="{{ route('create_tracking') }}" method="POST">
                            {{ csrf_field() }}
                            <input class="form-control" type="hidden" name="tracking_no" value="{{ $tracking->tracking_no }}"/>
                            <input class="form-control" type="hidden" name="shipping_id" value="{{ $tracking->id }}"/>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="location"  placeholder="New Location" required="true" />
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control datetimepicker" name="parcel_date" value="" placeholder="Pick Date" required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="parcel_status" placeholder="Enter New Status" required="true" />

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="write your comment here.." required="true"></textarea>
                            </div>

                            <div class="card-footer text-center">
                                <a href="{{ route('view.tracking') }}"
                                    <button class="btn btn-primary">Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-primary">Submit</button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
@stop