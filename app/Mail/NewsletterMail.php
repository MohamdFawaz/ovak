<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    private $content, $emailSubject;

    /**
     * Create a new message instance.
     *
     * @param string $content
     * @param string $emailSubject
     */
    public function __construct(string $content, string $emailSubject)
    {
        $this->content = $content;
        $this->emailSubject = $emailSubject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): NewsletterMail
    {
        return $this->from(config("mail.from.address"))
               ->subject($this->emailSubject)
               ->view('admin.newsletter_mail')->with(['content' => $this->content]);
    }
}
