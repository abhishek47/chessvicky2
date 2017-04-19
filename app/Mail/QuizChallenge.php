<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuizChallenge extends Mailable
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
    public function __construct($user, $quiz)
    {
        $this->user = $user;
        $this->quiz = $quiz;
        $this->url = "http://chessvicky.com/quiz/" . $quiz->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quiz-challenge');
    }
}
