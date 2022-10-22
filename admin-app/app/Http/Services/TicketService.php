<?php

namespace App\Http\Services;

use App\Models\Ticket;

class TicketService
{
    public function create(array $data)
    {
        $ticket = Ticket::create([
            'name' => $data['name'],
            'type_id' => $data['type_id'],
            'user_id' => $data['user_id'],
        ]);

        return $ticket->id;
    }

    public function update(Ticket $ticket, array $data)
    {
        $ticket->update([
            'name' => $data['name'],
            'type_id' => $data['type_id'],
            'user_id' => $data['user_id'],
        ]);

        return $ticket->id;
    }
}