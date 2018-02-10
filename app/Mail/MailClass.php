<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $password;
    public $hashed_random_password;




    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
        $this->password = str_random(8);
        $this->hashed_random_password = Hash::make($this->password);
        $this->return_password = Hash::make($this->hashed_random_password);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nikon5070@gmail.com')
            ->subject('Проверка емайл')
            ->view('emails.mymail');
    }
}
