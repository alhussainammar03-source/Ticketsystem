<?php

namespace App\Services;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketService
{


    public function createTicket(array $data): Ticket
    {
        return DB::transaction(function () use ($data) {

            $data['status'] = 'offen';

            $ticket = Ticket::create($data);

            $ticket->ticket_number =
                'HD-' .
                date('Y') .
                '-' .
                str_pad($ticket->id, 4, '0', STR_PAD_LEFT);

            $ticket->save();

            return $ticket;
        });
    }
}