<?php

<<<<<<< HEAD
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
            'male' => 'Maschio',
            'female' => 'Femmina',
            'other' => 'Altro',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Stato attivo del profilo',
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
=======
return array (
  'navigation' => 
  array (
    'name' => 'Profilo',
    'plural' => 'Profili',
    'group' => 
    array (
      'name' => 'Gestione Utenti',
      'description' => 'Gestione dei profili utente',
    ),
    'label' => 'Profilo',
    'sort' => 25,
    'icon' => 'user-profile-animated',
  ),
  'fields' => 
  array (
    'personal_info' => 
    array (
      'label' => 'Informazioni Personali',
      'first_name' => 'Nome',
      'last_name' => 'Cognome',
      'email' => 'Email',
      'phone' => 'Telefono',
      'birth_date' => 'Data di Nascita',
      'gender' => 
      array (
        'label' => 'Genere',
        'male' => 'Maschio',
        'female' => 'Femmina',
        'other' => 'Altro',
      ),
    ),
    'preferences' => 
    array (
      'label' => 'Preferenze',
      'language' => 'Lingua',
      'timezone' => 'Fuso Orario',
      'notifications' => 'Notifiche',
      'theme' => 
      array (
        'label' => 'Tema',
        'light' => 'Chiaro',
        'dark' => 'Scuro',
        'system' => 'Sistema',
      ),
    ),
    'security' => 
    array (
      'label' => 'Sicurezza',
      'current_password' => 'Password Attuale',
      'new_password' => 'Nuova Password',
      'confirm_password' => 'Conferma Password',
      'two_factor' => 'Autenticazione a Due Fattori',
      'recovery_codes' => 'Codici di Recupero',
    ),
    'id' => 
    array (
      'label' => 'ID',
    ),
    'ente' => 
    array (
      'label' => 'Ente',
    ),
    'matr' => 
    array (
      'label' => 'Matricola',
    ),
    'first_name' => 
    array (
      'label' => 'Nome',
      'fields' => 
      array (
        'label' => 'Nome',
      ),
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'fields' => 
      array (
        'label' => 'Cognome',
      ),
    ),
    'email' => 
    array (
      'label' => 'Email',
      'fields' => 
      array (
        'label' => 'Email',
      ),
    ),
    'is_active' => 
    array (
      'label' => 'Attivo',
      'fields' => 
      array (
        'label' => 'Attivo',
      ),
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
    ),
    'toggleColumns' => 
    array (
      'label' => 'Mostra/Nascondi Colonne',
    ),
    'reorderRecords' => 
    array (
      'label' => 'Riordina Record',
    ),
    'resetFilters' => 
    array (
      'label' => 'Resetta Filtri',
    ),
    'applyFilters' => 
    array (
      'label' => 'Applica Filtri',
    ),
  ),
  'personal_info' => 
  array (
    'heading' => 'Informazioni Personali',
    'subheading' => 'Gestisci le tue informazioni personali.',
    'submit' => 
    array (
      'label' => 'Aggiorna',
    ),
    'notify' => 'Profilo aggiornato correttamente!',
  ),
);
>>>>>>> d46f92c (.)
