<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Transport;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ShippingController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $types = Type::all();
        $shipments = Shipping::all();
        $transfers = Transport::all();
        $countries = DB::table("countries")->pluck("name","id");
        return view('admin.shippment.create_shippment', compact('shipments', 'types', 'transfers', 'countries'));
    }

    public function  store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qty'                   => 'required',
            'status'                => 'required',
            'weight'                => 'required',
            'type_id'               => 'required',
            'shipper_email'          => 'required',
            'transport_id'          => 'required',
            'shipper_firstN'        => 'required',
            'shipper_lastN'         => 'required',
            'shipper_city'          => 'required',
            'shipper_state'         => 'required',
            'receiver_firstN'       => 'required',
            'receiver_lastN'        => 'required',
            'receiver_postal'       =>  'required',
            'receiver_city'         => 'required',
            'receiver_state'        => 'required',
            'shipper_address'       => 'required',
            'shipper_country'       => 'required',
            'receiver_country'      => 'required',
            'receiver_address'      => 'required',
            'receiver_phone'        => 'required',
            'shipper_phone'         => 'required',
            'shipper_postal'        => 'required'


        ]);


        $addShipment = $request->only([
            'shipper_firstN', 'shipper_lastN', 'shipper_phone', 'shipper_address',
            'shipper_city', 'shipper_state', 'shipper_country', 'receiver_firstN', 'receiver_lastN',
            'receiver_phone', 'receiver_address', 'receiver_city', 'receiver_state',
            'receiver_country', 'slug', 'tracking_no', 'type_id', 'weight',
            'qty','transport_id','status', 'shipper_email', 'receiver_postal', 'shipper_postal'
        ]);

        // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 6 digits + a random character
        $pin = mt_rand(100000, 999999)
            . mt_rand(100000, 999999)
            . $characters[rand(0, strlen($characters) - 3)];

        // shuffle the result
        $string = str_shuffle($pin);

        $addShipment['tracking_no'] = $string;
        $addShipment['user_id'] = Auth::user()->id;

        // dd($addShipment);

        Shipping::create($addShipment);

        return redirect()->back()->with('Shipping', 'Your Shipping Has Been Added Successfully!.');
    }

    public function updateShipment($id)
    {

        $shipment = Shipping::with('transport', 'type')->where('id', $id)->first();
        $types = Type::all();
        $countries = DB::table("countries")->pluck("name","id");
        $transfers = Transport::all();

        return view('admin.shippment.edit_shippment', compact('shipment', 'types', 'transfers', 'countries'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'qty'                   => 'required',
            'status'                => 'required',
            'weight'                => 'required',
            'type_id'               => 'required',
            'shipper_email'          => 'required',
            'transport_id'          => 'required',
            'shipper_firstN'        => 'required',
            'shipper_lastN'         => 'required',
            'shipper_city'          => 'required',
            'shipper_state'         => 'required',
            'receiver_firstN'       => 'required',
            'receiver_lastN'        => 'required',
            'receiver_postal'       =>  'required',
            'receiver_city'         => 'required',
            'receiver_state'        => 'required',
            'shipper_address'       => 'required',
            'shipper_country'       => 'required',
            'receiver_country'      => 'required',
            'receiver_address'      => 'required',
            'receiver_phone'        => 'required',
            'shipper_phone'         => 'required',
            'shipper_postal'        => 'required'


        ]);


        $addShipment = $request->only([
            'shipper_firstN', 'shipper_lastN', 'shipper_phone', 'shipper_address',
            'shipper_city', 'shipper_state', 'shipper_country', 'receiver_firstN', 'receiver_lastN',
            'receiver_phone', 'receiver_address', 'receiver_city', 'receiver_state',
            'receiver_country', 'slug', 'tracking_no', 'type_id', 'weight',
            'qty','transport_id','status', 'shipper_email', 'receiver_postal', 'shipper_postal'
        ]);

        // Available alpha caracters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 6 digits + a random character
        $pin = mt_rand(100000, 999999)
            . mt_rand(100000, 999999)
            . $characters[rand(0, strlen($characters) - 3)];

        // shuffle the result
        $string = str_shuffle($pin);

        $addShipment['tracking_no'] = $string;
        $addShipment['user_id'] = Auth::user()->id;

        // dd($addShipment);

        Shipping::create($addShipment);

        return redirect()->back()->with('Shipping', 'Your Shipping Has Been Updated Successfully!.');

    }

    public function destroyShipment($id)
    {
        Shipping::where('id', $id)->delete();
        return back();
    }
}
