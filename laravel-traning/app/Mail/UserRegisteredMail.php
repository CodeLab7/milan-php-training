<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserRegisteredMail extends Mailable {

	use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 */

	protected $user;

	public function __construct($user) {
		$this->user = $user;
	}

	/**
	 * Get the message envelope.
	 */

	public function envelope(): Envelope {
		return new Envelope(
			subject: 'User Registered Mail',
		);
	}

	/**
	 * Get the message content definition.
	 */
	public function content(): Content {
		{
			$details = [
				'user'               => $this->user,
				'customer_full_name' => 'Hello!' . $this->user->name . 'Customer',
			];
			return new Content(
				view: 'mails.user.register',
				with: [
					'details' => $details,
				]
			);
		}
	}

	/**
	 * Get the attachments for the message.
	 *
	 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
	 */
	public function attachments(): array {
		return [];
	}

}
