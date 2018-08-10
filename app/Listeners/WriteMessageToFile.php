<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class WriteMessageToFile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserLoggedIn  $event
     * @return void
     */
    public function handle(UserLoggedIn $event)
    {
        $message = $event->user->name . ' just logged in to the application.'. now();
        Storage::disk('public')->prepend('loginactivity.txt', $message);
//        Storage::prepend('loginactivity.txt', $message);
    }
}
