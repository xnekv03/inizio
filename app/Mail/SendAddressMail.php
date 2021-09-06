<?php

namespace App\Mail;

use App\Models\Address;
use Illuminate\Mail\Mailable;

class SendAddressMail extends Mailable
{
    public Address $address;

    /**
     * @param  Address  $address
     */
    public function __construct(Address $address)
    {
        $this->address = $address;
    }


    public function build()
    {
        return $this->markdown('emails.send-address');
    }
}