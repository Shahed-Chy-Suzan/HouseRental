<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class invoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;   //------FrontController.php theke patano $data k dhorechi,-------

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)  //-------------$data--------------
    {
        $this->data = $data;            //-----------$data theke sob data te rakchi----------
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()		//-------...---------//
    {
        $info = $this->data;
        return $this->from('support.chittagong@bariwala.com')->view('mail.invoice',compact('info'))->subject('Successfully Property Submitted');
    }
    
}
