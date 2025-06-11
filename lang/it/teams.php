<?php

declare(strict_types=1);

return [
    'fields' => [
        'name' => [
            'label' => 'Nome Team',
            'help' => 'Nome identificativo del team',
        ],
        'personal_team' => [
            'label' => 'Team Personale',
            'help' => 'Indica se questo è il team personale dell\'utente',
        ],
        'role' => [
            'label' => 'Ruolo nel Team', // Aggiornato per chiarezza
            'help' => 'Ruolo dell\'utente nel team',
            'placeholder' => 'Inserisci un ruolo',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
        ],
    ],
    'actions' => [
        'attach' => [
            'label' => 'Associa Team',
            'modal' => [
                'heading' => "Associa Team all'Utente", // CORRETTO
            ],
            'form' => [
                'role' => [
                    'label' => 'Ruolo',
                    'default_help_text' => 'Specifica il ruolo dell\'utente in questo team (es. member, admin).',
                ],
            ],
            'success' => 'Team associato con successo.', // Aggiunto punto per coerenza
            'error' => 'Si è verificato un errore durante l\'associazione del team.', // Aggiunto punto
        ],
        'edit' => [
            'label' => 'Modifica Ruolo',
            'modal' => [
                'heading' => 'Modifica Ruolo nel Team',
            ],
            'success' => 'Ruolo nel team aggiornato con successo.',
            'error' => 'Errore durante l\'aggiornamento del ruolo nel team.',
        ],
        'detach' => [
            'label' => 'Rimuovi Team',
            'modal' => [
                'heading' => 'Rimuovi Associazione Team',
            ],
            'success' => 'Team rimosso con successo.', // Aggiunto punto
            'error' => 'Si è verificato un errore durante la rimozione del team.', // Aggiunto punto
        ],
        'bulk_detach' => [
            'label' => 'Rimuovi Team Selezionati',
            'modal' => [
                'heading' => 'Rimuovi Associazioni Team Selezionate',
            ],
            'success' => 'Team selezionati rimossi con successo.',
            'error' => 'Errore durante la rimozione dei team selezionati.',
        ],
    ],
    'messages' => [
        'team_current_changed' => 'Il team attuale è stato modificato.', // Aggiunto punto
        'no_teams' => 'Nessun team associato.', // Aggiunto punto
    ],
];
