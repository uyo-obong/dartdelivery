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
    
    
@endsection