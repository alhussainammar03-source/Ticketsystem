<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Category;
use App\Services\TicketService;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
class TicketController extends Controller
{



private TicketService $ticketService;

public function __construct(TicketService $ticketService)
{
    $this->ticketService = $ticketService;
}



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    $tickets = Ticket::with('category')->get();
    return view('tickets.index', compact('tickets'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $categories = Category::all();
    return view('tickets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
       
     $data = $request->validated();
   
     $ticket = $this->ticketService->createTicket($data);

    return redirect()
        ->route('tickets.show', $ticket)
        ->with('success', 'Ticket wurde erfolgreich erstellt.');
        //
    }

    /**
     * Display the specified resource.
     */
   
    public function show(Ticket $ticket)
{
    return view('tickets.show', compact('ticket'));
}

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Ticket $ticket)
{
    $categories = Category::all();

    return view('tickets.edit', compact('ticket', 'categories'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateTicketRequest $request, Ticket $ticket)
{
    $data = $request->validated();

    $ticket->update($data);

    return redirect()
        ->route('tickets.show', $ticket)
        ->with('success', 'Ticket wurde erfolgreich aktualisiert.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
{
    $ticket->delete();

    return redirect()
        ->route('tickets.index')
        ->with('success', 'Ticket wurde erfolgreich gelöscht.');
}
}
