<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CallWaiterEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $table_name;
    public $user_id;

    public function __construct($table_name, $user_id)
    {
        $this->table_name = $table_name;
        $this->user_id = $user_id;
    }

    public function broadcastOn()
    {
        return new Channel('call-waiter');
    }

    public function broadcastWith()
    {
        return [
            'table_name' => $this->table_name,
            'user_id' => $this->user_id,
        ];
    }
}

