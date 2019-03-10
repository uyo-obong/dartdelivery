<?php

namespace App\Mail;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;

class DartMail extends Mailable
{
    use Queueable, SerializesModels;

   
    public $date;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->date =  Carbon::now();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.mailable.email');
        // return $this->subject('Dartdelivery Invoice')->view('admin.mailable.email');
    }
}
