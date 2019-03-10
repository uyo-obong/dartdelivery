@extends('admin.layouts.root')

@section('content')

    <div class="content">
        @include('messages.flash')
        <div class="card">
            <form id="TypeValidation" class="form-horizontal" action="{{ route('update', $shipment->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">

                    @include('admin.shippment._form', [

                    'updateform' => 'Update'

                    ])

                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer_css')
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



    <script src="{{ URL::to('admin/js/core/countrystatecities2.js') }}"></script>
    {{--<script src="{{ URL::to('admin/js/countrystatecities1.js') }}"></script>--}}
@endsection