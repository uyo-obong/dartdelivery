@extends('admin.layouts.root')

@section('content')

    <div class="content">
        @include('messages.flash')
        <div class="card">
            <form id="TypeValidation" class="form-horizontal" action="{{ route('store.shipment') }}" method="POST">
                {{ csrf_field() }}

                <div class="card-body">

                    @include('admin.shippment._form', [
                    'shipment' => new App\Shipping,
                    'typeEmpty' => '',
                    'transportEmpty' => '',
                    ])

                </div>
            </form>
        </div>
    </div>

@endsection

@section('footer_css')
    <script src="{{ URL::to('custom/formvalidator.js') }}"></script>
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
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

@endsection