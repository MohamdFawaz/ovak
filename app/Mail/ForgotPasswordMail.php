<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    private $content;

    /**
     * Create a new message instance.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config("mail.from.address"))
            ->subject("Forgot Password")
            ->view('admin.forgot_password_mail')->with(['content' => $this->content]);
    }
}
