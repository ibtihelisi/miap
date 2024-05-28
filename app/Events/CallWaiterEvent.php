<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WaiterCalled implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $table_name;
    

    public function __construct($table_name)
    {
        $this->table_name = $table_name;
        
    }

    public function broadcastOn()
    {
        return new Channel('popup-channel');
    }
        /**
         * Broadcast event tregestration
         * @return void
         */
    public function broadcastAs()
    {
        return 'user-call-waiter';
    }
}
