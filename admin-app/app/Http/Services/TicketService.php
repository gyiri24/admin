<?php

namespace App\Http\Services;

use App\Models\Ticket;

class TicketService
{
    public function create(array $data)
    {
        $ticket = Ticket::create([
            'name' => $data['name']
        ]);

        return $ticket->id;
    }

    public function update(Ticket $ticket, array $data)
    {
        $ticket->update([
            'name' => $data['name']
        ]);

        return $ticket->id;
    }
}