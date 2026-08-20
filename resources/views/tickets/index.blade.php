@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

<div class="max-w-7xl mx-auto">

    {{-- HEADER --}}

    <div class="flex items-center justify-between mb-6">

        <h1 class="text-3xl font-semibold text-white">
            Tickets
        </h1>

        <a
            href="{{ route('tickets.create') }}"
            class="inline-flex items-center gap-2
                   rounded-lg
                   bg-blue-500
                   px-4 py-2
                   text-sm font-medium text-white
                   hover:bg-blue-600"
        >
            +
            Neues Ticket
        </a>

    </div>



   {{-- TABLE --}}
<div class="overflow-hidden rounded-xl border border-[#252C36] bg-[#161C24]">

    <table class="w-full border-collapse text-left">

        {{-- HEADER --}}
        <thead>
            <tr class="border-b border-[#252C36] bg-[#101419] text-xs uppercase text-gray-400">
                <th class="px-4 py-3 font-normal">ID</th>
                <th class="px-4 py-3 font-normal">Titel</th>
                <th class="px-4 py-3 font-normal">Kategorie</th>
                <th class="px-4 py-3 font-normal">Priorität</th>
                <th class="px-4 py-3 font-normal">Status</th>
                <th class="px-4 py-3 text-right font-normal">Aktionen</th>
            </tr>
        </thead>

        {{-- TICKETS --}}
        <tbody>
            @forelse ($tickets as $ticket)

                <tr class="group border-b border-[#252C36] hover:bg-[#1C232D]">

                    {{-- Ticketnummer --}}
                    <td class="px-4 py-4 font-mono text-sm text-gray-400">
                        {{ $ticket->ticket_number }}
                    </td>

                    {{-- Titel --}}
                    <td class="px-4 py-4 text-sm text-white">
                        {{ $ticket->title }}
                    </td>

                    {{-- Kategorie --}}
                    <td class="px-4 py-4">
                        <span class="rounded-full bg-[#31353b] px-3 py-1 text-xs text-gray-300">
                            {{ $ticket->category->name }}
                        </span>
                    </td>

                    {{-- PRIORITÄT --}}
                    <td class="px-4 py-4">
                        @if($ticket->priority === 'hoch')
                            <span class="flex items-center gap-2 text-sm">
                                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                Hoch
                            </span>
                        @elseif($ticket->priority === 'mittel')
                            <span class="flex items-center gap-2 text-sm">
                                <span class="h-2 w-2 rounded-full bg-yellow-400"></span>
                                Mittel
                            </span>
                        @else
                            <span class="flex items-center gap-2 text-sm">
                                <span class="h-2 w-2 rounded-full bg-green-500"></span>
                                Niedrig
                            </span>
                        @endif
                    </td>

                    {{-- STATUS --}}
                    <td class="px-4 py-4">
                        @if($ticket->status === 'offen')
                            <span class="rounded-full border border-yellow-500/20 bg-yellow-500/10 px-3 py-1 text-xs text-yellow-400">
                                Offen
                            </span>
                        @elseif($ticket->status === 'in_bearbeitung')
                            <span class="rounded-full border border-blue-500/20 bg-blue-500/10 px-3 py-1 text-xs text-blue-400">
                                In Bearbeitung
                            </span>
                        @else
                            <span class="rounded-full border border-gray-500/20 bg-gray-500/10 px-3 py-1 text-xs text-gray-400">
                                Geschlossen
                            </span>
                        @endif
                    </td>

                    {{-- ACTIONS --}}
                    <td class="px-4 py-4">
                        <div class="flex justify-end gap-3">

                            <a href="{{ route('tickets.show', $ticket) }}" class="text-gray-400 hover:text-blue-400" title="Anzeigen">
                                <x-icon name="show"/>
                            </a>

                            <a href="{{ route('tickets.edit', $ticket) }}" class="text-gray-400 hover:text-blue-400" title="Bearbeiten">
                                <x-icon name="edit"/>
                            </a>

                            <form action="{{ route('tickets.destroy', $ticket) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-red-500" title="Löschen" onclick="return confirm('Ticket wirklich löschen?')">
                                    <x-icon name="delete"/>
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" class="px-4 py-6 text-center text-sm text-gray-400">
                        Keine Tickets gefunden.
                    </td>
                </tr>

            @endforelse
        </tbody>

    </table>

    

</div>

@endsection