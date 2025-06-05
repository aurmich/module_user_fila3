<?php

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
    'sort' => 32,
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
