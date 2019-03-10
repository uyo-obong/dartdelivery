<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\DartMail;
use App\SendQuote;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class SendQuoteController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function client()
    {
        $clients = Shipping::all()->sortByDesc('created_at');
        return view('admin.mailable.clients', [
            'clients' => $clients
        ]);
    }

    public function mailForm($id)
    {
        $client = Shipping::with('type')->where('id', $id)->first();
        return view('admin.mailable.send', ['client' => $client]);
    }

    public function sendMail(Request $request)
    {
        $sendmail = new SendQuote;
        $sendmail->price = $request->price;
        $sendmail->description = $request->description;

        //**** This part will send information of the product to the client email ****//
        $details = [
            'type'       => $request->type,
            'name'       => $request->name,
            'email'      => $request->email,
            'price'      => $request->price,
            'address'    => $request->address,
            'description'=> $request->description,
        ];
        
        SendEmailJob::dispatch($details)
                ->delay(now()->addSeconds(5));

//        $sendmail->save();

        return back()->with('Quote', 'Mail Sent Successfully!');
    }
}
