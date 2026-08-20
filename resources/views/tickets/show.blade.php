@extends('layouts.app')

@section('title', 'Ticketdetails')

@section('content')

<div class="page-container">

    {{-- Header --}}
    <div class="ticket-show-header">

        <div>
            <h1>Ticketdetails</h1>

            <p class="ticket-show-number">
                {{ $ticket->ticket_number }}
            </p>
        </div>

        <div class="header-actions">

            <a
                href="{{ route('tickets.index') }}"
                class="btn btn-secondary"
            >
                Zurück
            </a>

            <a
                href="{{ route('tickets.edit', $ticket) }}"
                class="btn btn-primary"
            >
                <x-icon name="edit" />
                Bearbeiten
            </a>

        </div>

    </div>


    {{-- Ticket --}}
    <div class="card ticket-show-card">

        {{-- Titel --}}
        <div class="ticket-main-info">

            <span class="detail-label">
                Titel
            </span>

            <h2 class="ticket-show-title">
                {{ $ticket->title }}
            </h2>

        </div>


        {{-- Beschreibung --}}
        <div class="detail-section">

            <span class="detail-label">
                Beschreibung
            </span>

            <p class="ticket-description">
                {{ $ticket->description }}
            </p>

        </div>


        {{-- Informationen --}}
        <div class="ticket-info-grid">

            {{-- Kategorie --}}
            <div class="ticket-info-item">

                <span class="detail-label">
                    Kategorie
                </span>

                <span class="category-badge">
                    {{ $ticket->category->name }}
                </span>

            </div>


            {{-- Priorität --}}
            <div class="ticket-info-item">

                <span class="detail-label">
                    Priorität
                </span>

                <div class="priority">

                    <span
                        class="priority-dot priority-{{ $ticket->priority }}"
                    ></span>

                    {{ ucfirst($ticket->priority) }}

                </div>

            </div>


            {{-- Status --}}
            <div class="ticket-info-item">

                <span class="detail-label">
                    Status
                </span>

                <span class="status status-{{ $ticket->status }}">

                    @if ($ticket->status === 'offen')
                        Offen
                    @elseif ($ticket->status === 'in_bearbeitung')
                        In Bearbeitung
                    @else
                        Geschlossen
                    @endif

                </span>

            </div>

        </div>


        {{-- Zeitinformationen --}}
        <div class="ticket-time-grid">

            <div>
                <span class="detail-label">
                    Erstellt am
                </span>

                <span class="detail-value">
                    {{ $ticket->created_at->format('d.m.Y H:i') }}
                </span>
            </div>

            <div>
                <span class="detail-label">
                    Zuletzt geändert
                </span>

                <span class="detail-value">
                    {{ $ticket->updated_at->format('d.m.Y H:i') }}
                </span>
            </div>

        </div>

    </div>

</div>

@endsection