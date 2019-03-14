<div class="row">
    <div class="col-md-6">
        <div class="card-header ">

            <h4 class="card-title">Shipper Information</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="shipper_firstN" value="{{ old('shipper_firstN') ?? $shipment->shipper_firstN }}" class="form-control" placeholder="Enter First Name" required="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="shipper_lastN" value="{{ old('shipper_firstN') ?? $shipment->shipper_lastN }}" class="form-control" placeholder="Enter First Name" required="true">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="shipper_phone" value="{{ old('shipper_phone') ?? $shipment->shipper_phone }}" placeholder="phone number e.g +222" required="true" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="email" name="shipper_email" value="{{ old('shipper_email') ?? $shipment-> shipper_email }}" placeholder="Enter Email Address" email="true" />
                </div>
            </div>
        </div>

        <section>
            <div class="row">
                <div class="col-md-4 form-group">
                    <select name="shipper_country" value="{{ old('shipper_country') }}" class="country custom-select" required="true">
                        <option value="" selected disabled>Select Country</option>
                        @foreach($countries as $key => $country)
                            <option value="{{$key}}"> {{$country}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <select name="shipper_state" value="{{ old('shipper_state') }}" class="state custom-select" required="true">
                        <option value="" selected disabled>State</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <select name="shipper_city" value="{{ old('shipper_city') }}" class="city custom-select">
                        <option value="">City</option>
                    </select>
                </div>
            </div>
        </section>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="shipper_address" value="{{ old('shipper_address') ?? $shipment->shipper_address }}" placeholder="Address" required="true" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="shipper_postal" value="{{ old('shipper_postal') ?? $shipment->shipper_postal }}" placeholder="shipper_postal" required="true" />
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-header ">
            <h4 class="card-title">Receiver Information</h4>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" value="{{ old('receiver_firstN') ?? $shipment->receiver_firstN }}" name="receiver_firstN" placeholder="First Name" required="true" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" value="{{ old('receiver_lastN') ?? $shipment->receiver_lastN }}" name="receiver_lastN" placeholder="Last Name" required="true" />
                </div>
            </div>
        </div>


        <div class="form-group">
            <input class="form-control" type="text" name="receiver_phone" value="{{ old('receiver_phone') ?? $shipment->receiver_phone }}" placeholder="phone number e.g +222" required="true" />
        </div>


        <section>
            <div class="row">
                <div class="col-md-4 form-group">
                    <select name="receiver_country" value="{{ old('receiver_country') }}" class="country custom-select" required="true">
                        <option value="" selected disabled>Select Country</option>
                        @foreach($countries as $key => $country)
                            <option value="{{$key}}"> {{$country}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <select name="receiver_state" value="{{ old('receiver_state') }}" class="state custom-select" required="true">
                        <option value="" selected disabled>State</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <select name="receiver_city" value="{{ old('receiver_city') }}" class="city custom-select">
                        <option value="">City</option>
                    </select>
                </div>
            </div>
        </section>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="receiver_address" value="{{ old('receiver_address') ?? $shipment->receiver_address }}" placeholder="Address" required="true" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="receiver_postal" value="{{ old('receiver_postal') ?? $shipment->receiver_postal }}" placeholder="postal Code" required="true" />
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-header ">
            <h4 class="card-title">Parcel Information</h4>
        </div>


        <div class="form-group">
            <select class="form-control" type="text" name="type_id"  required="true">
                <option value>Select Type Of Shipping</option>

                @foreach($types as $type)
                    <option value="{{ old('type_id') ?? $type->id }}"
                            {{$typeEmpty ?? $shipment->type->id == $type->id ? 'selected' : ''}}
                    >{{ $type->name }}</option>
                @endforeach

            </select>

        </div>


        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="weight" value="{{ old('weight') ?? $shipment->weight }}" class="form-control" placeholder="weight e.g 12kg" required="true" >

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="qty" value="{{ old('qty') ?? $shipment->qty }}" class="form-control" placeholder="Quantity" required="true" >

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <select type="text" name="transport_id" class="form-control" placeholder="transport mode" required="true" >
                        <option value>Select Transport Mode</option>
                        @foreach($transfers as $transfer)
                            <option value="{{$transfer->id }}"
                                    {{ $transportEmpty ?? $shipment->transport->id  == $transfer->id ? 'selected' : '' }}
                            >{{ $transfer->name }}</option>
                        @endforeach

                    </select>

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="status" class="form-control" placeholder="in transit" value="In Transit" readonly>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-center">
    <button type="submit" class="btn btn-primary">{{ $updateform ?? 'Submit' }}</button>
</div>
