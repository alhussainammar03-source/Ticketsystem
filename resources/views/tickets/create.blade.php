@extends('layouts.app')

@section('content')

<div class="page-container">

    <div class="page-header">
        <div>
            <h1>Neues Ticket</h1>
            <p>Erstellen Sie eine neue Support-Anfrage.</p>
        </div>
    </div>

    <div class="card">

        <form
            action="{{ route('tickets.store') }}"
            method="POST"
            class="ticket-form"
        >

            @csrf

            <x-input
                name="title"
                label="Titel"
                placeholder="z. B. Drucker funktioniert nicht"
            />

            <x-textarea
                name="description"
                label="Beschreibung"
                rows="6"
                placeholder="Beschreiben Sie das Problem..."
            />

            <x-select
                name="category_id"
                label="Kategorie"
                :options="$categories->pluck('name', 'id')->toArray()"
                placeholder="Kategorie auswählen"
            />

            <x-select
                name="priority"
                label="Priorität"
                :options="[
                    'niedrig' => 'Niedrig',
                    'mittel' => 'Mittel',
                    'hoch' => 'Hoch'
                ]"
                placeholder="Priorität auswählen"
            />

            <div class="form-actions">

                <a
                    href="{{ route('tickets.index') }}"
                    class="btn btn-secondary"
                >
                    Abbrechen
                </a>

                <x-button
                    type="submit"
                    class="btn-primary"
                >
                    Ticket erstellen
                </x-button>

            </div>

        </form>

    </div>

</div>

@endsection