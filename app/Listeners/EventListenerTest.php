<?php

namespace App\Listeners;

use App\Events\EventTest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerTest
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected  $order;

    public function __construct($order)
    {
        //
        $this->order = $order;
    }

    /**
     * Handle the event.
     *
     * @param  EventTest  $event
     * @return void
     */
    public function handle(EventTest $event)
    {
        //

    }
}
