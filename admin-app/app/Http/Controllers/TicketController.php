<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Services\TicketService;
use App\Models\Ticket;

class TicketController extends Controller
{
    public $ticketService;

    function __construct(TicketService $ticketService){
        $this->ticketService = $ticketService;
    }


    public function index()
    {
        return Ticket::all();
    }

    public function store(TicketRequest $request)
    {
        $data = $request->only('name','type_id','user_id');

        return response()->json([
            'id' => $this->ticketService->create($data)
        ]);
    }

    public function show(Ticket $ticket)
    {
      return $ticket;
    }

    public function update(Ticket $employee, TicketRequest $request)
    {
        $data = $request->only('name','type_id','user_id');

        return response()->json([
            'id' => $this->ticketService->update($employee, $data)
        ]);
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return response('no content', 201);
    }
}
