<?php

namespace App\Http\Controllers\Frontend;

use App\Type;
use App\User;
use App\Shipping;
use App\Tracking;
use App\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $q;

    public function index()
    {
        return view('frontend.home');
    }

    public function track()
    {
        // $tracking = Tracking::find('')
        return view('frontend.track');
    }

    public function confirm()
    {
        $this->q = $q = Input::get('track');
        $this->trackings = $confirm = Tracking::where(function ($query) use ($q) {
          $query->where('tracking_no', 'like',  $q );
      })->get();
        
        // dd($confirm);

        if ($confirm->isNotEmpty()) {

            return $this->progress();

        } else{

            return $this->invalid();
        }

    }

    public function invalid()
    {
        //$this->confirm($q);
        return view('frontend.invalid')->with(['q'=> $this->q]);
    }
    public function progress()
    {
        
        $details = Tracking::with('shipping')->first();
        // dd($details->shipping->shipper_email);
        return view('frontend.progress')->with(['trackings' => $this->trackings, 'details' => $details]);
    }

    public function delivery()
    {
        $types = Type::all();
        $transfers = Transport::all();
        $users = User::find(Auth::user())->first();
        $countries = DB::table("countries")->pluck("name","id");
        return view('frontend.delivery', [
            'countries' => $countries,
            'transfers' => $transfers,
            'types' => $types,
            'users' => $users
        ]);
    }

    public function  store(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'qty'                   => 'required',
            'status'                => 'required',
            'weight'                => 'required',
            'type_id'               => 'required',
            'shipper_email'         => 'required',
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

        return redirect()->back()->with('Usershipping', 'Your Shipping Has Been Added, check your e-mail for price quote.');
    }

    public function details()
    {
        // $id = Auth::user()->id;
        $details = Shipping::whereUserId(Auth::id())->get()->sortByDesc('created_at');
        return view('frontend.details', [
            'details' => $details
        ]);
    }
    public function company()
    {
        return view('frontend.company');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contactUs()
    {
        return view('frontend.contact_us');
    }

    public function destroy($id)
    {
        Shipping::where('id', $id)->delete();
        return back();
    }
}
