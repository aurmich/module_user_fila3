<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Profilo',
        'plural' => 'Profili',
        'group' => [
            'label' => 'Gestione Utenti',
            'description' => 'Gestione dei profili utente',
        ],
        'icon' => 'user-profile-animated',
        'sort' => 73,
    ],
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Nome dell\'utente',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'help' => 'Cognome dell\'utente',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'email',
            'help' => 'Indirizzo email dell\'utente',
        ],
        'phone' => [
            'label' => 'Telefono',
            'placeholder' => 'Inserisci il numero di telefono',
            'help' => 'Numero di telefono dell\'utente',
        ],
        'birth_date' => [
            'label' => 'Data di Nascita',
            'placeholder' => 'Seleziona la data di nascita',
            'help' => 'Data di nascita dell\'utente',
        ],
        'gender' => [
            'label' => 'Genere',
            'placeholder' => 'Seleziona il genere',
            'help' => 'Genere dell\'utente',
            'options' => [
                'male' => 'Maschio',
                'female' => 'Femmina',
                'other' => 'Altro',
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Stato attivo del profilo',
        ],
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Identificativo automatico',
            'help' => 'Identificativo univoco del profilo',
        ],
        'ente' => [
            'label' => 'Ente',
            'placeholder' => 'Seleziona l\'ente',
            'help' => 'Ente di appartenenza dell\'utente',
        ],
        'matr' => [
            'label' => 'Matricola',
            'placeholder' => 'Inserisci la matricola',
            'help' => 'Codice matricola dell\'utente',
        ],
        // ... altri campi ...
    ],
    'actions' => [
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Profilo aggiornato con successo!',
            'error' => 'Errore durante l\'aggiornamento del profilo',
        ],
        'delete' => [
            'label' => 'Elimina',
            'success' => 'Profilo eliminato con successo!',
            'error' => 'Errore durante l\'eliminazione del profilo',
        ],
    ],
    'messages' => [
        'update_success' => 'Profilo aggiornato con successo!',
        'no_permission' => 'Non hai i permessi per modificare questo profilo.',
    ],
];
