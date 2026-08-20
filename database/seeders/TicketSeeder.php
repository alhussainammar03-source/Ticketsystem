<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\TicketService;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $ticketService = app(TicketService::class);

        $tickets = [

            [
                'title' => 'Drucker funktioniert nicht',
                'description' => 'Der Drucker im zweiten Stock funktioniert nicht mehr.',
                'category_id' => 1,
                'priority' => 'hoch',
            ],

            [
                'title' => 'Microsoft Office startet nicht',
                'description' => 'Microsoft Office kann auf meinem Computer nicht gestartet werden.',
                'category_id' => 2,
                'priority' => 'mittel',
            ],

            [
                'title' => 'Keine Internetverbindung',
                'description' => 'Seit heute Morgen besteht keine Verbindung zum Internet.',
                'category_id' => 3,
                'priority' => 'hoch',
            ],

            [
                'title' => 'Passwort vergessen',
                'description' => 'Der Benutzer kann sich nicht mehr mit seinem Konto anmelden.',
                'category_id' => 4,
                'priority' => 'mittel',
            ],

            [
                'title' => 'Neuer Monitor benötigt',
                'description' => 'Für den Arbeitsplatz wird ein zusätzlicher Monitor benötigt.',
                'category_id' => 1,
                'priority' => 'niedrig',
            ],

            [
                'title' => 'VPN Verbindung unterbrochen',
                'description' => 'Die VPN Verbindung wird nach wenigen Minuten automatisch getrennt.',
                'category_id' => 3,
                'priority' => 'hoch',
            ],

            [
                'title' => 'Windows Update fehlgeschlagen',
                'description' => 'Das aktuelle Windows Update kann nicht installiert werden.',
                'category_id' => 2,
                'priority' => 'mittel',
            ],

            [
                'title' => 'Benutzerkonto gesperrt',
                'description' => 'Das Benutzerkonto wurde nach mehreren Anmeldeversuchen gesperrt.',
                'category_id' => 4,
                'priority' => 'hoch',
            ],

            [
                'title' => 'Tastatur defekt',
                'description' => 'Mehrere Tasten der Tastatur reagieren nicht mehr.',
                'category_id' => 1,
                'priority' => 'niedrig',
            ],

            [
                'title' => 'E-Mail funktioniert nicht',
                'description' => 'Es können aktuell keine neuen E-Mails versendet werden.',
                'category_id' => 2,
                'priority' => 'hoch',
            ],

            [
                'title' => 'WLAN sehr langsam',
                'description' => 'Die WLAN Verbindung im Büro ist seit mehreren Tagen sehr langsam.',
                'category_id' => 3,
                'priority' => 'mittel',
            ],

            [
                'title' => 'Neuen Benutzer anlegen',
                'description' => 'Für einen neuen Mitarbeiter muss ein Benutzerkonto erstellt werden.',
                'category_id' => 4,
                'priority' => 'niedrig',
            ],

            [
                'title' => 'Maus funktioniert nicht',
                'description' => 'Die USB Maus wird vom Computer nicht mehr erkannt.',
                'category_id' => 1,
                'priority' => 'niedrig',
            ],

            [
                'title' => 'Software installieren',
                'description' => 'Auf dem Arbeitsplatz muss eine neue Software installiert werden.',
                'category_id' => 2,
                'priority' => 'mittel',
            ],

            [
                'title' => 'Sonstige technische Anfrage',
                'description' => 'Es besteht eine allgemeine technische Anfrage an den IT Support.',
                'category_id' => 5,
                'priority' => 'niedrig',
            ],

        ];

        foreach ($tickets as $data) {
            $ticketService->createTicket($data);
        }
    }
}