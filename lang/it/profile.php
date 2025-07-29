<?php

return array (
  'navigation' => 
  array (
    'label' => 'Profilo',
    'plural' => 'Profili',
    'group' => 
    array (
      'label' => 'Gestione Utenti',
      'description' => 'Gestione dei profili utente',
    ),
    'icon' => 'user-profile-animated',
    'sort' => 73,
  ),
  'fields' => 
  array (
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Nome dell\'utente',
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'help' => 'Cognome dell\'utente',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'Inserisci l\'email',
      'help' => 'Indirizzo email dell\'utente',
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => 'Inserisci il numero di telefono',
      'help' => 'Numero di telefono dell\'utente',
    ),
    'birth_date' => 
    array (
      'label' => 'Data di Nascita',
      'placeholder' => 'Seleziona la data di nascita',
      'help' => 'Data di nascita dell\'utente',
    ),
    'gender' => 
    array (
      'label' => 'Genere',
      'male' => 'Maschio',
      'female' => 'Femmina',
      'other' => 'Altro',
    ),
    'is_active' => 
    array (
      'label' => 'Attivo',
      'help' => 'Stato attivo del profilo',
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
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
  ),
  'actions' => 
  array (
    'edit' => 
    array (
      'label' => 'Modifica',
      'success' => 'Profilo aggiornato con successo!',
      'error' => 'Errore durante l\'aggiornamento del profilo',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'success' => 'Profilo eliminato con successo!',
      'error' => 'Errore durante l\'eliminazione del profilo',
    ),
  ),
  'messages' => 
  array (
    'update_success' => 'Profilo aggiornato con successo!',
    'no_permission' => 'Non hai i permessi per modificare questo profilo.',
  ),
);
