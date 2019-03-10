@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Add Shipping Type</h4>
            </div>
            @include('messages.flash')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">

                        <form id="RangeValidation" class="form-horizontal" action="{{ route('createShipping') }}" method="POST">
                            {{ csrf_field() }}

                            @include('admin.categories.shipping_type._form', [
                                'shipping' => new App\Type
                            ])


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