<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendFormMail extends Mailable
{
    use Queueable, SerializesModels;
		private $schema;
		private $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($type, $schema)
    {
			$this->schema = $schema;
			$this->type = $type;
			$this->subject('Form Pendaftaran - '.$type.' '.ucwords(strtolower($schema)));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.form-sending', ['title' => $this->schema, 'type' => $this->type])
					->attach(public_path('form-pdf/'.str_replace('/',' ATAU ', $this->schema).'.pdf'),
					[
						'as' => str_replace('/',' ATAU ', $this->schema).'.pdf',
						'mime' => 'application/pdf'
					]);
    }
}
