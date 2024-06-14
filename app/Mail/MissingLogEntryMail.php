<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MissingLogEntryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $staff;
    public $date;


    public function __construct($staff, $date)
    {
        $this->staff = $staff;
        $this->date = $date;
        
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Missing Log Entry for the date: ' . $this->date
        );
    }

    
        public function build(): MissingLogEntryMail
        {
            $fullName = $this->staff->full_name;
            

            return $this->subject('Missing Log Entry for the date ' . $this->date)
                        ->view('emails.missingLogEntry')
                        ->with([
                            'fullName' =>  $fullName , // Use $this->fullName
                            'date' => $this->date,
                        ]);
        }
            


    public function attachments(): array
    {
        return [];
    }
}