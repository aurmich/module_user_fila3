<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a291521 (.)
    'account' => 'Account',
    'profile' => 'Profilo',
    'my_profile' => 'Il mio profilo',
    'subheading' => 'Gestisci il tuo profilo.',
<<<<<<< HEAD
    'fields' => [
        'type' => [
            'label' => 'Tipo',
            'fields' => [
                'label' => 'Tipo',
=======
    'account' => [
        'label' => 'Account',
        'description' => 'Gestione delle impostazioni dell\'account utente',
        'help' => 'Configura le informazioni del tuo account personale',
    ],

    'profile' => [
        'label' => 'Profilo',
        'description' => 'Informazioni del profilo utente',
        'help' => 'Visualizza e modifica le informazioni del tuo profilo',
    ],

    'my_profile' => [
        'label' => 'Il mio profilo',
        'description' => 'Gestione del profilo personale',
        'help' => 'Accedi alle impostazioni del tuo profilo personale',
    ],

    'subheading' => [
        'label' => 'Gestisci il tuo profilo.',
        'description' => 'Aggiorna le tue informazioni personali e le impostazioni dell\'account',
        'help' => 'Mantieni aggiornate le tue informazioni per un\'esperienza ottimale',
    ],

=======
>>>>>>> a291521 (.)
    'fields' => [
        'type' => [
            'label' => 'Tipo',
<<<<<<< HEAD
            'placeholder' => 'Seleziona il tipo',
            'help' => 'Tipologia di utente nel sistema',
            'options' => [
                'admin' => 'Amministratore',
                'user' => 'Utente',
                'moderator' => 'Moderatore',
                'guest' => 'Ospite',
>>>>>>> 48bb11d (.)
=======
            'fields' => [
                'label' => 'Tipo',
>>>>>>> a291521 (.)
            ],
        ],
        'user' => [
            'name' => [
                'label' => 'Nome Utente',
<<<<<<< HEAD
<<<<<<< HEAD
                'fields' => [
                    'label' => 'Nome Utente',
                ],
=======
                'placeholder' => 'Inserisci il nome utente',
                'help' => 'Nome utilizzato per identificarsi nel sistema',
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'utente@email.com',
                'help' => 'Indirizzo email per l\'accesso e le comunicazioni',
            ],
            'phone' => [
                'label' => 'Telefono',
                'placeholder' => '+39 123 456 7890',
                'help' => 'Numero di telefono per contatti',
>>>>>>> 48bb11d (.)
=======
                'fields' => [
                    'label' => 'Nome Utente',
                ],
>>>>>>> a291521 (.)
            ],
        ],
        'photo' => [
            'label' => 'Foto',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a291521 (.)
            'fields' => [
                'label' => 'Foto',
            ],
        ],
        'id' => [
            'label' => 'id',
<<<<<<< HEAD
        ],
        'ente' => [
            'label' => 'ente',
        ],
        'matr' => [
            'label' => 'matr',
        ],
        'first_name' => [
            'label' => 'first_name',
            'fields' => [
                'label' => 'first_name',
            ],
        ],
        'last_name' => [
            'label' => 'last_name',
            'fields' => [
                'label' => 'last_name',
            ],
        ],
        'email' => [
            'fields' => 'email',
            'label' => [
                'fields' => 'email',
            ],
        ],
        'is_active' => [
            'fields' => 'is_active',
            'label' => [
                'fields' => 'is_active',
            ],
        ],
    ],
    'personal_info' => [
        'heading' => 'Informazioni personali',
        'subheading' => 'Gestisci le tue informazioni personali.',
        'submit' => [
            'label' => 'Aggiorna',
        ],
        'notify' => 'Profilo aggiornato correttamente!',
    ],
=======
            'placeholder' => 'Carica una foto profilo',
            'help' => 'Immagine del profilo utente (formato JPG, PNG)',
=======
>>>>>>> a291521 (.)
        ],
        'ente' => [
            'label' => 'ente',
        ],
        'matr' => [
            'label' => 'matr',
        ],
        'first_name' => [
            'label' => 'first_name',
            'fields' => [
                'label' => 'first_name',
            ],
        ],
        'last_name' => [
            'label' => 'last_name',
            'fields' => [
                'label' => 'last_name',
            ],
        ],
        'email' => [
            'fields' => 'email',
            'label' => [
                'fields' => 'email',
            ],
        ],
        'is_active' => [
            'fields' => 'is_active',
            'label' => [
                'fields' => 'is_active',
            ],
        ],
    ],
    'personal_info' => [
        'heading' => 'Informazioni personali',
        'subheading' => 'Gestisci le tue informazioni personali.',
        'submit' => [
            'label' => 'Aggiorna',
        ],
        'notify' => 'Profilo aggiornato correttamente!',
    ],
<<<<<<< HEAD

    'security' => [
        'heading' => 'Sicurezza',
        'subheading' => 'Gestisci le impostazioni di sicurezza del tuo account.',
        'description' => 'Configura password, autenticazione a due fattori e altre impostazioni di sicurezza',
        'change_password' => [
            'label' => 'Cambia Password',
            'description' => 'Aggiorna la password del tuo account',
            'current_password' => [
                'label' => 'Password Attuale',
                'placeholder' => 'Inserisci la password attuale',
                'help' => 'Conferma la tua password attuale',
            ],
            'new_password' => [
                'label' => 'Nuova Password',
                'placeholder' => 'Inserisci la nuova password',
                'help' => 'La password deve contenere almeno 8 caratteri',
            ],
            'confirm_password' => [
                'label' => 'Conferma Password',
                'placeholder' => 'Conferma la nuova password',
                'help' => 'Ripeti la nuova password per confermarla',
            ],
        ],
        'two_factor' => [
            'heading' => 'Autenticazione a Due Fattori',
            'description' => 'Aggiungi un livello extra di sicurezza al tuo account',
            'enable' => [
                'label' => 'Abilita 2FA',
                'description' => 'Proteggi il tuo account con l\'autenticazione a due fattori',
            ],
            'disable' => [
                'label' => 'Disabilita 2FA',
                'description' => 'Rimuovi l\'autenticazione a due fattori',
            ],
        ],
    ],

    'preferences' => [
        'heading' => 'Preferenze',
        'subheading' => 'Personalizza la tua esperienza utente.',
        'description' => 'Configura le tue preferenze per l\'interfaccia e le notifiche',
        'notifications' => [
            'label' => 'Notifiche',
            'email_notifications' => [
                'label' => 'Notifiche Email',
                'help' => 'Ricevi notifiche via email',
            ],
            'push_notifications' => [
                'label' => 'Notifiche Push',
                'help' => 'Ricevi notifiche push nel browser',
            ],
            'sms_notifications' => [
                'label' => 'Notifiche SMS',
                'help' => 'Ricevi notifiche via SMS',
            ],
        ],
        'privacy' => [
            'label' => 'Privacy',
            'profile_visibility' => [
                'label' => 'Visibilità Profilo',
                'help' => 'Chi può vedere il tuo profilo',
                'options' => [
                    'public' => 'Pubblico',
                    'private' => 'Privato',
                    'friends' => 'Solo amici',
                ],
            ],
            'show_email' => [
                'label' => 'Mostra Email',
                'help' => 'Rendi visibile la tua email nel profilo pubblico',
            ],
            'show_phone' => [
                'label' => 'Mostra Telefono',
                'help' => 'Rendi visibile il tuo telefono nel profilo pubblico',
            ],
        ],
    ],

    'actions' => [
        'edit_profile' => [
            'label' => 'Modifica Profilo',
            'tooltip' => 'Modifica le informazioni del profilo',
        ],
        'upload_photo' => [
            'label' => 'Carica Foto',
            'tooltip' => 'Carica una nuova foto profilo',
            'success' => 'Foto profilo caricata con successo',
            'error' => 'Errore durante il caricamento della foto',
        ],
        'remove_photo' => [
            'label' => 'Rimuovi Foto',
            'tooltip' => 'Rimuovi la foto profilo',
            'confirmation' => 'Sei sicuro di voler rimuovere la foto profilo?',
            'success' => 'Foto profilo rimossa con successo',
            'error' => 'Errore durante la rimozione della foto',
        ],
        'delete_account' => [
            'label' => 'Elimina Account',
            'tooltip' => 'Elimina definitivamente il tuo account',
            'confirmation' => 'Sei sicuro di voler eliminare definitivamente il tuo account? Questa azione non può essere annullata.',
            'modal_heading' => 'Conferma Eliminazione Account',
            'modal_description' => 'Tutti i tuoi dati verranno eliminati permanentemente. Questa azione è irreversibile.',
            'success' => 'Account eliminato con successo',
            'error' => 'Errore durante l\'eliminazione dell\'account',
        ],
    ],

    'sections' => [
        'basic_info' => [
            'label' => 'Informazioni Base',
            'description' => 'Dati anagrafici principali',
        ],
        'contact_info' => [
            'label' => 'Informazioni di Contatto',
            'description' => 'Email, telefono e indirizzi',
        ],
        'professional_info' => [
            'label' => 'Informazioni Professionali',
            'description' => 'Ente, matricola e ruolo',
        ],
        'personal_preferences' => [
            'label' => 'Preferenze Personali',
            'description' => 'Lingua, fuso orario e impostazioni',
        ],
    ],

    'validation' => [
        'required' => 'Il campo :attribute è obbligatorio',
        'email' => 'Il campo :attribute deve essere un indirizzo email valido',
        'unique' => 'Il valore del campo :attribute è già in uso',
        'min' => [
            'string' => 'Il campo :attribute deve contenere almeno :min caratteri',
        ],
        'max' => [
            'string' => 'Il campo :attribute non può superare :max caratteri',
        ],
        'confirmed' => 'La conferma del campo :attribute non corrisponde',
        'image' => 'Il file deve essere un\'immagine',
        'max_file_size' => 'Il file non può superare :size MB',
        'url' => 'Il campo :attribute deve essere un URL valido',
        'phone' => 'Il numero di telefono deve essere valido',
        'postal_code' => 'Il codice postale deve essere valido',
    ],

    'messages' => [
        'profile_updated' => 'Profilo aggiornato con successo',
        'password_changed' => 'Password cambiata con successo',
        'photo_uploaded' => 'Foto profilo caricata con successo',
        'photo_removed' => 'Foto profilo rimossa',
        'preferences_saved' => 'Preferenze salvate con successo',
        'account_deleted' => 'Account eliminato con successo',
        'error_occurred' => 'Si è verificato un errore',
        'changes_saved' => 'Modifiche salvate',
        'no_changes' => 'Nessuna modifica da salvare',
    ],
>>>>>>> 48bb11d (.)
=======
>>>>>>> a291521 (.)
];
