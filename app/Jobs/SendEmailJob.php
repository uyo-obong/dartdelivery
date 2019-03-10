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

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $date;
    protected $logo;
    protected $type;
    protected $name;
    protected $email;
    protected $price;
    protected $image;
    protected $address;
    protected $description;

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
        $this->price = $details['price'];
        $this->address = $details['address'];
        $this->logo = URL::to('/images/logo1.png');
        $this->image = URL::to('images/image1.png');
        $this->description = $details['description'];
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            'logo'        => $this->logo,
            'type'        => $this->type,
            'date'        => $this->date,
            'name'        => $this->name,
            'price'       => $this->price,
            'email'       => $this->email,
            'image'       => $this->image,
            'address'     => $this->address,
            'description' => $this->description,
        ];

        Mail::send('admin.mailable.email', $data, function($message){
            $message->to($this->email)->subject('Dartdelivery Invoice');
        });
    }
}
