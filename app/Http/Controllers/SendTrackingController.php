<?php

namespace App\Http\Controllers;

use App\Jobs\SendTrackingJob;
use App\Shipping;
use Illuminate\Http\Request;

class SendTrackingController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		$sendTracking = Shipping::all()->sortByDesc('created_at');
		return view('admin.sendtracking.view', [
			'sendTrackings' => $sendTracking
		]);
	}

	public function view($id)
	{
		$sends = Shipping::with('type')->where('id', $id)->first();
		return view('admin.sendtracking.view', [
			'sends' => $sends
		]);
	}

	public function send(Request $request)
	{
		//dd($request->all());

		$details = [

			'type'       	=> $request->type,
			'name'       	=> $request->name,
			'email'      	=> $request->email,
			'trackingNo'    => $request->trackingNo,
			'trackingId'	=> $request->trackingId,

		];
		
		SendTrackingJob::dispatch($details)
		->delay(now()->addSeconds(5));

		return back()->with('Send', 'Tracking Number Sent Successfully!');
	}
}
