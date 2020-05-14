<?php  

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class reupload extends Mailable
{
    use Queueable, SerializesModels;
     
     public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('deekshith.karka@gmail.com')->subject('This is an email from Conference web application')->view('emails.resendemail')->with('data',$this->data);
    }
}
