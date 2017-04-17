<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PuzzleChallenge extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $puzzle;

    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $puzzle)
    {
        $this->user = $user;
        $this->puzzle = $puzzle;
        $this->url = "http://chessvicky.com/puzzles/" . $puzzle->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.puzzle-challenge');
    }
}
