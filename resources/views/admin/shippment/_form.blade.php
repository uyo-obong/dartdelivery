<div class="row">
    <div class="col-md-6">
        <div class="card-header ">

            <h4 class="card-title">Shipper Information</h4>
        </div>


        <div class="form-group">
            <input class="form-control" type="text" name="shipper_name" value="{{ old('shipper_name') ?? $shipment->shipper_name }}" placeholder="Shipper Name" required="true" />
        </div>


        {{--<div class="form-group">--}}
            {{--<input class="form-control" type="text" name="email" placeholder="email" email="true" />--}}
        {{--</div>--}}


        <div class="form-group">
            <input class="form-control" type="text" name="shipper_phone_number" value="{{ old('shipper_phone_number') ?? $shipment->shipper_phone_number }}" placeholder="phone number e.g +222" required="true" />
        </div>

        <div class="form-group">
            <input class="form-control" type="email" name="sender_email" value="{{ old('sender_email') ?? $shipment-> sender_email }}" placeholder="Enter Email Address e.g dart@gmail.com" email="true" />
        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="shipper_country" class="countries order-alpha presel-byip form-control" id="countryId" required="true" >

                        <option value=''>Select Country</option>

                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="shipper_state"  class="states order-alpha form-control" id="stateId"  required="true" >
                        <option value=''>Select State</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="shipper_city"  class="cities order-alpha form-control"  id="cityId" >
                        <option value=''>Select City</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="shipper_address" value="{{ old('shipper_address') ?? $shipment->shipper_address }}" placeholder="Address" required="true" />
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-header ">
            <h4 class="card-title">Receiver Information</h4>
        </div>


        <div class="form-group">
            <input class="form-control" type="text" value="{{ old('receiver_name') ?? $shipment->receiver_name }}" name="receiver_name" placeholder="Receiver Name" required="true" />
        </div>

        {{--<div class="form-group">--}}
            {{--<input class="form-control" type="text" name="email" placeholder="receiver email"  email="true" required />--}}
        {{--</div>--}}


        <div class="form-group">
            <input class="form-control" type="text" name="receiver_phone_number" value="{{ old('receiver_phone_number') ?? $shipment->receiver_phone_number }}" placeholder="phone number e.g +222" required="true" />
        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="receiver_country"  class="ownCountry form-control" id="ownCountry" required="true" >
                        <option value=''>Select Country</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="receiver_state"  class="ownState form-control" id="ownState" required="true">
                        <option value=''>Select State</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <select type="text" name="receiver_city"  class="ownCity form-control" id="ownCity">
                        <option value=''>Select City</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="receiver_address" value="{{ old('receiver_address') ?? $shipment->receiver_address }}" placeholder="Address" required="true" />
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