<?php

namespace App\Mail;

use App\User;
use App\Reservation;
use App\Restaurant;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CancelEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $reservation;
    public $restaurant;

    public function __construct(/* User $user, Reservation $reservation, Restaurant $restaurant */)
    {
        /* $this->user = $user;
        $this->reservation = $reservation;
        $this->restaurant = $restaurant; */
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.cancel')->subject('Reservation cancelled');
    }
}
