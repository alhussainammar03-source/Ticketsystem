@extends('layouts.app')

@section('content')

<h2>Ticket bearbeiten</h2>

<form action="{{ route('tickets.update', $ticket) }}" method="POST">

    @csrf
    @method('PUT')

    <x-input
    name="title"
    label="Titel"
    :value="$ticket->title"
    />
    <br>
   <x-textarea
    name="description"
    label="Beschreibung"
    :value="$ticket->description"
   />
   <br>


    {{-- Kategorie --}}
    <x-select
    name="category_id"
    label="Kategorie"
    :options="$categories->pluck('name', 'id')->toArray()"
    :value="$ticket->category_id"
     />
    <br>
    {{-- Priorität --}}
    <x-select
    name="priority"
    label="Priorität"
    :options="[
        'niedrig' => 'Niedrig',
        'mittel' => 'Mittel',
        'hoch' => 'Hoch'
    ]"
    :value="$ticket->priority"
     />

    <br>

    <x-select
    name="status"
    label="Status"
    :options="[
        'offen' => 'Offen',
        'in_bearbeitung' => 'In Bearbeitung',
        'geschlossen' => 'Geschlossen'
    ]"
    :value="$ticket->status"
    />
    {{-- Status --}}
    <br>
        
                 <x-button
                    type="submit"
                    class="btn-primary"
                >
                     Ticket aktualisieren
                </x-button>
</form>

@endsection