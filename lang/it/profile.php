<?php

declare(strict_types=1);

return [
    'navigation' => [
<<<<<<< HEAD
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
            'male' => 'Maschio',
            'female' => 'Femmina',
            'other' => 'Altro',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Stato attivo del profilo',
=======
        'name' => 'Profilo',
        'plural' => 'Profili',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione dei profili utente',
        ],
        'label' => 'Profilo',
        'sort' => 73,
        'icon' => 'user-profile-animated',
    ],
    'fields' => [
        'personal_info' => [
            'label' => 'Informazioni Personali',
            'first_name' => 'Nome',
            'last_name' => 'Cognome',
            'email' => 'Email',
            'phone' => 'Telefono',
            'birth_date' => 'Data di Nascita',
            'gender' => [
                'label' => 'Genere',
                'male' => 'Maschio',
                'female' => 'Femmina',
                'other' => 'Altro',
            ],
        ],
        'preferences' => [
            'label' => 'Preferenze',
            'language' => 'Lingua',
            'timezone' => 'Fuso Orario',
            'notifications' => 'Notifiche',
            'theme' => [
                'label' => 'Tema',
                'light' => 'Chiaro',
                'dark' => 'Scuro',
                'system' => 'Sistema',
            ],
        ],
        'security' => [
            'label' => 'Sicurezza',
            'current_password' => 'Password Attuale',
            'new_password' => 'Nuova Password',
            'confirm_password' => 'Conferma Password',
            'two_factor' => 'Autenticazione a Due Fattori',
            'recovery_codes' => 'Codici di Recupero',
>>>>>>> aurmich/dev
        ],
        'id' => [
            'label' => 'ID',
        ],
        'ente' => [
            'label' => 'Ente',
        ],
        'matr' => [
            'label' => 'Matricola',
        ],
<<<<<<< HEAD
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
=======
        'first_name' => [
            'label' => 'Nome',
            'fields' => [
                'label' => 'Nome',
            ],
        ],
        'last_name' => [
            'label' => 'Cognome',
            'fields' => [
                'label' => 'Cognome',
            ],
        ],
        'email' => [
            'label' => 'Email',
            'fields' => [
                'label' => 'Email',
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'fields' => [
                'label' => 'Attivo',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
        ],
        'toggleColumns' => [
            'label' => 'Mostra/Nascondi Colonne',
        ],
        'reorderRecords' => [
            'label' => 'Riordina Record',
        ],
        'resetFilters' => [
            'label' => 'Resetta Filtri',
        ],
        'applyFilters' => [
            'label' => 'Applica Filtri',
        ],
    ],
    'personal_info' => [
        'heading' => 'Informazioni Personali',
        'subheading' => 'Gestisci le tue informazioni personali.',
        'submit' => [
            'label' => 'Aggiorna',
        ],
        'notify' => 'Profilo aggiornato correttamente!',
    ],
    'edit_profile_title' => 'Modifica Profilo',
    'edit_tooltip' => 'Modifica i tuoi dati',
    'save_changes' => 'Salva Modifiche',
    'cancel' => 'Annulla',
    'update_success' => 'Profilo aggiornato con successo!',
    'no_permission' => 'Non hai i permessi per modificare questo profilo.',
    'profile' => 'Profilo',
>>>>>>> aurmich/dev
];
