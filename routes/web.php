<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


// Startseite → Tickets
Route::get('/', function () {
    return redirect()->route('tickets.index');
});


// Ticket Routes
Route::resource('tickets', TicketController::class);