<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function tracking()
    {
        $trackings = Shipping::all()->sortByDesc('created_at');
        return view('admin.tracking.view_tracking', compact('trackings'));
    }

    public function index($id)
    {
        $tracking = Shipping::where('id', $id)->first();
        return view('admin.tracking.create_tracking', compact('tracking'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'comment'       => 'required',
            'location'      => 'required',
            'parcel_date'   => 'required',
            'parcel_status' => 'required',
        ]);

        $tracking = new Tracking;
        $tracking->new_location = $request->location;
        $tracking->pick_time    = $request->parcel_date;
        $tracking->tracking_no  = $request->tracking_no;
        $tracking->status       = $request->parcel_status;
        $tracking->comment      = $request->comment;
        $tracking->shipping_id  = $request->shipping_id;

//        dd($tracking);
        $tracking->save();
        // $tracking->shipping()->sync($request->input('shipping_id'));

        return back()->with('Tracking', 'Tracking Details Has Been Updated!');
    }
}
