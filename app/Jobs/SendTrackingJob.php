<?php

namespace App\Jobs;

use App\Mail\DartMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class SendTrackingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $url;
    protected $date;
    protected $logo;
    protected $type;
    protected $name;
    protected $email;
    protected $image;
    protected $trackingId;
    protected $trackingNo;
    

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->date =  Carbon::now();
        $this->type = $details['type'];
        $this->name = $details['name'];
        $this->email = $details['email'];
        $this->trackingId = $details['trackingId'];
        $this->trackingNo = $details['trackingNo'];
        $this->url = URL::to('/track');
        $this->logo = URL::to('/images/logo1.png');
        $this->image = URL::to('images/image1.png');

        
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            'url'              => $this->url,
            'logo'             => $this->logo,
            'type'             => $this->type,
            'date'             => $this->date,
            'name'             => $this->name,
            'email'            => $this->email,
            'image'            => $this->image,
            'trackingId'       => $this->trackingId,
            'trackingNo'       => $this->trackingNo,
            
        ];

        Mail::send('admin.sendtracking.mail', $data, function($message){
            $message->to($this->email)->subject('Confirm Invoice');
        });
    }
}
