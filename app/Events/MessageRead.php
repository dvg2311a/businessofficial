<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageRead implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
public $conversation_id;
public $receiver_id;
    /**
     * Create a new event instance.
     */
    public function __construct($conversation_id, $receiver_id)
    {
        $this->conversation_id= $conversation_id;
        $this->receiver_id = $receiver_id;
    }

    public function broadcastWith():array
    {
        return
        [
            'conversation_id' => $this-> conversation_id,
            'receiver_id' => $this->receiver_id,
        ];
    }

    public function broadcastOn():array
    {
        return [new PrivateChannel ('chat'. $this-> receiver_id)];
    }
}
