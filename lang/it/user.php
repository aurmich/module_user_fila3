<?php
=======
declare(strict_types=1);

=======
declare(strict_types=1);

return [
  'navigation' => 
  [
    'name' => 'Utenti',
    'plural' => 'Utenti',
    'group' => 
    [
      'name' => 'Gestione Utenti',
      'description' => 'Gestione degli utenti e dei loro permessi',
    ),
    'label' => 'Utenti',
    'sort' => 26,
    'icon' => 'user-main',
  ),
=======
=======
  'fields' => 
  [
    'id' => 
    [
=======
      'label' => 'ID',
      'help' => 'Identificativo univoco dell\'utente',
      'tooltip' => 'ID utente',
      'helper_text' => '',
    ),
    'name' => 
    [
=======
    'name' => 
    [
=======
    'name' => 
    [
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome completo',
      'help' => 'Nome completo dell\'utente',
      'tooltip' => 'Nome e cognome dell\'utente',
      'helper_text' => '',
    ),
    'first_name' => 
    [
=======
    ),
    'first_name' => 
    [
=======
    ),
    'first_name' => 
    [
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Nome dell\'utente',
      'tooltip' => 'Nome dell\'utente',
      'helper_text' => '',
    ),
    'last_name' => 
    [
=======
    'last_name' => 
    [
=======
    'last_name' => 
    [
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'help' => 'Cognome dell\'utente',
      'tooltip' => 'Cognome dell\'utente',
      'helper_text' => '',
    ),
    'email' => 
    [
=======
    'email' => 
    [
=======
    'email' => 
    [
      'label' => 'Email',
      'placeholder' => 'Inserisci l\'indirizzo email',
      'help' => 'Indirizzo email dell\'utente',
      'tooltip' => 'Email per l\'accesso e le comunicazioni',
      'helper_text' => '',
    ),
    'password' => 
    [
=======
    ),
    'password' => 
    [
=======
    ),
    'password' => 
    [
      'label' => 'Password',
      'placeholder' => 'Inserisci la password',
      'help' => 'Password per l\'accesso al sistema',
      'tooltip' => 'Password di accesso',
      'helper_text' => '',
    ),
    'password_confirmation' => 
    [
=======
    ),
    'password_confirmation' => 
    [
=======
    ),
    'password_confirmation' => 
    [
      'label' => 'Conferma Password',
      'placeholder' => 'Conferma la password',
      'help' => 'Ripeti la password per conferma',
      'tooltip' => 'Conferma della password',
      'helper_text' => '',
    ),
    'current_password' => 
    [
=======
    'current_password' => 
    [
=======
    'current_password' => 
    [
      'label' => 'Password Attuale',
      'placeholder' => 'Inserisci la password attuale',
      'help' => 'Password corrente per la verifica',
      'tooltip' => 'Password attuale',
      'helper_text' => '',
    ),
    'new_password' => 
    [
=======
    'new_password' => 
    [
=======
    'new_password' => 
    [
      'label' => 'Nuova Password',
      'placeholder' => 'Inserisci la nuova password',
      'help' => 'Nuova password desiderata',
      'tooltip' => 'Nuova password',
      'helper_text' => '',
    ),
    'role' => 
    [
=======
    'role' => 
    [
=======
    'role' => 
    [
      'label' => 'Ruolo',
      'placeholder' => 'Seleziona il ruolo',
      'help' => 'Ruolo dell\'utente nel sistema',
      'tooltip' => 'Ruolo e permessi',
      'helper_text' => '',
    ),
    'roles' => 
    [
=======
    'roles' => 
    [
=======
    'roles' => 
    [
      'label' => 'Ruoli',
      'placeholder' => 'Seleziona i ruoli',
      'help' => 'Ruoli assegnati all\'utente',
      'tooltip' => 'Ruoli multipli',
      'helper_text' => '',
    ),
    'permissions' => 
    [
=======
    'permissions' => 
    [
=======
    'permissions' => 
    [
      'label' => 'Permessi',
      'placeholder' => 'Seleziona i permessi',
      'help' => 'Permessi specifici dell\'utente',
      'tooltip' => 'Permessi diretti',
      'helper_text' => '',
    ),
    'status' => 
    [
=======
    'status' => 
    [
=======
    'status' => 
    [
      'label' => 'Stato',
      'placeholder' => 'Seleziona lo stato',
      'help' => 'Stato dell\'account utente',
      'tooltip' => 'Stato dell\'utente',
      'helper_text' => '',
      'options' => 
      [
=======
      'options' => 
      [
=======
      'options' => 
      [
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'blocked' => 'Bloccato',
        'pending' => 'In Attesa',
        'suspended' => 'Sospeso',
      ),
    ),
    'type' => 
    [
=======
    'type' => 
    [
=======
    'type' => 
    [
      'label' => 'Tipo',
      'placeholder' => 'Seleziona il tipo',
      'help' => 'Tipo di utente',
      'tooltip' => 'Tipo di account',
      'helper_text' => '',
      'options' => 
      [
=======
      'options' => 
      [
=======
      'options' => 
      [
        'admin' => 'Amministratore',
        'user' => 'Utente',
        'doctor' => 'Medico',
        'patient' => 'Paziente',
        'staff' => 'Personale',
      ),
    ),
    'last_login' => 
    [
=======
    'last_login' => 
    [
=======
    'last_login' => 
    [
      'label' => 'Ultimo Accesso',
      'help' => 'Data e ora dell\'ultimo accesso',
      'tooltip' => 'Ultimo login',
      'helper_text' => '',
    ),
    'created_at' => 
    [
=======
    'created_at' => 
    [
=======
    'created_at' => 
    [
      'label' => 'Data Creazione',
      'help' => 'Data di creazione dell\'account',
      'tooltip' => 'Quando è stato creato',
      'helper_text' => '',
    ),
    'updated_at' => 
    [
=======
    'updated_at' => 
    [
=======
    'updated_at' => 
    [
      'label' => 'Ultima Modifica',
      'help' => 'Data dell\'ultimo aggiornamento',
      'tooltip' => 'Ultimo aggiornamento',
      'helper_text' => '',
    ),
    'avatar' => 
    [
=======
    'avatar' => 
    [
=======
    'avatar' => 
    [
      'label' => 'Avatar',
      'placeholder' => 'Carica un\'immagine',
      'help' => 'Immagine del profilo',
      'tooltip' => 'Foto profilo',
      'helper_text' => '',
    ),
    'language' => 
    [
=======
    'language' => 
    [
=======
    'language' => 
    [
      'label' => 'Lingua',
      'placeholder' => 'Seleziona la lingua',
      'help' => 'Lingua preferita dell\'utente',
      'tooltip' => 'Lingua interfaccia',
      'helper_text' => '',
      'options' => 
      [
=======
      'options' => 
      [
=======
      'options' => 
      [
        'it' => 'Italiano',
        'en' => 'English',
        'es' => 'Español',
        'fr' => 'Français',
        'de' => 'Deutsch',
      ),
    ),
    'timezone' => 
    [
=======
    'timezone' => 
    [
=======
    'timezone' => 
    [
      'label' => 'Fuso Orario',
      'placeholder' => 'Seleziona il fuso orario',
      'help' => 'Fuso orario dell\'utente',
      'tooltip' => 'Zona oraria',
      'helper_text' => '',
    ),
    'password_expires_at' => 
    [
=======
    'password_expires_at' => 
    [
=======
    'password_expires_at' => 
    [
      'label' => 'Scadenza Password',
      'help' => 'Data di scadenza della password',
      'tooltip' => 'Scadenza password',
      'helper_text' => '',
    ),
    'verified' => 
    [
=======
    'verified' => 
    [
=======
    'verified' => 
    [
      'label' => 'Verificato',
      'help' => 'Indica se l\'email è verificata',
      'tooltip' => 'Email verificata',
      'helper_text' => '',
    ),
    'unverified' => 
    [
=======
    'unverified' => 
    [
=======
    'unverified' => 
    [
      'label' => 'Non Verificato',
      'help' => 'Indica se l\'email non è verificata',
      'tooltip' => 'Email non verificata',
      'helper_text' => '',
    ),
    'email_verified_at' => 
    [
=======
    'email_verified_at' => 
    [
=======
    'email_verified_at' => 
    [
      'label' => 'Email Verificata il',
      'help' => 'Data di verifica dell\'email',
      'tooltip' => 'Data verifica email',
      'helper_text' => '',
    ),
    'provider' => 
    [
=======
    'provider' => 
    [
=======
    'provider' => 
    [
      'label' => 'Provider',
      'placeholder' => 'Inserisci il nome del provider',
      'help' => 'Provider di autenticazione (es. Google, Facebook)',
      'tooltip' => 'Provider OAuth',
      'helper_text' => '',
    ),
    'provider_id' => 
    [
=======
    'provider_id' => 
    [
=======
    'provider_id' => 
    [
      'label' => 'ID Provider',
      'placeholder' => 'Inserisci l\'ID del provider',
      'help' => 'ID utente nel provider esterno',
      'tooltip' => 'ID provider esterno',
      'helper_text' => '',
    ),
    'provider_name' => 
    [
=======
    'provider_name' => 
    [
=======
    'provider_name' => 
    [
      'label' => 'Nome Provider',
      'placeholder' => 'Inserisci il nome associato al provider',
      'help' => 'Nome dell\'utente nel provider',
      'tooltip' => 'Nome nel provider',
      'helper_text' => '',
    ),
    'provider_email' => 
    [
=======
    'provider_email' => 
    [
=======
    'provider_email' => 
    [
      'label' => 'Email Provider',
      'placeholder' => 'Inserisci l\'email del provider',
      'help' => 'Email associata al provider',
      'tooltip' => 'Email nel provider',
      'helper_text' => '',
    ),
    'provider_avatar' => 
    [
=======
    'provider_avatar' => 
    [
=======
    'provider_avatar' => 
    [
      'label' => 'Avatar Provider',
      'placeholder' => 'URL dell\'avatar',
      'help' => 'URL dell\'immagine profilo del provider',
      'tooltip' => 'Avatar del provider',
      'helper_text' => '',
    ),
    'uuid' => 
    [
=======
    'uuid' => 
    [
=======
    'uuid' => 
    [
      'label' => 'UUID',
      'help' => 'Identificativo univoco universale',
      'tooltip' => 'UUID dispositivo',
      'helper_text' => '',
    ),
    'mobile_id' => 
    [
=======
    'mobile_id' => 
    [
=======
    'mobile_id' => 
    [
      'label' => 'Mobile ID',
      'help' => 'Identificativo del dispositivo mobile',
      'tooltip' => 'ID dispositivo mobile',
      'helper_text' => '',
    ),
    'languages' => 
    [
=======
    'languages' => 
    [
=======
    'languages' => 
    [
      'label' => 'Lingue',
      'placeholder' => 'Seleziona le lingue',
      'help' => 'Lingue supportate dal dispositivo',
      'tooltip' => 'Lingue dispositivo',
      'helper_text' => '',
    ),
    'guard_name' => 
    [
=======
    'guard_name' => 
    [
=======
    'guard_name' => 
    [
      'label' => 'Guard Name',
      'help' => 'Nome del guard di autenticazione',
      'tooltip' => 'Guard autenticazione',
      'helper_text' => '',
    ),
    'active' => 
    [
=======
    'active' => 
    [
=======
    'active' => 
    [
      'label' => 'Attivo',
      'help' => 'Indica se il record è attivo',
      'tooltip' => 'Stato attivo',
      'helper_text' => '',
    ),
    'resetFilters' => 
    [
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    [
      'label' => 'applyFilters',
    ),
  ),
=======
    'resetFilters' => 
    [
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    [
      'label' => 'applyFilters',
    ),
  ),
=======
  'actions' => 
  [
    'create' => 
    [
=======
      'label' => 'Crea Utente',
      'icon' => 'heroicon-o-plus',
      'tooltip' => 'Crea un nuovo utente',
    ),
    'edit' => 
    [
=======
    'edit' => 
    [
=======
    'edit' => 
    [
      'label' => 'Modifica Utente',
      'icon' => 'heroicon-o-pencil',
      'tooltip' => 'Modifica l\'utente',
    ),
    'delete' => 
    [
=======
    'delete' => 
    [
=======
    'delete' => 
    [
      'label' => 'Elimina Utente',
      'icon' => 'heroicon-o-trash',
      'tooltip' => 'Elimina l\'utente',
    ),
    'view' => 
    [
=======
    'view' => 
    [
=======
    'view' => 
    [
      'label' => 'Visualizza Utente',
      'icon' => 'heroicon-o-eye',
      'tooltip' => 'Visualizza i dettagli dell\'utente',
    ),
    'impersonate' => 
    [
=======
    'impersonate' => 
    [
=======
    'impersonate' => 
    [
      'label' => 'Impersona Utente',
      'icon' => 'heroicon-o-user-circle',
      'tooltip' => 'Accedi come questo utente',
    ),
    'stop_impersonating' => 
    [
=======
    'stop_impersonating' => 
    [
=======
    'stop_impersonating' => 
    [
      'label' => 'Termina Impersonificazione',
      'icon' => 'heroicon-o-arrow-left',
      'tooltip' => 'Torna al tuo account',
    ),
    'block' => 
    [
=======
    'block' => 
    [
=======
    'block' => 
    [
      'label' => 'Blocca',
      'icon' => 'heroicon-o-lock-closed',
      'tooltip' => 'Blocca l\'utente',
    ),
    'unblock' => 
    [
=======
    'unblock' => 
    [
=======
    'unblock' => 
    [
      'label' => 'Sblocca',
      'icon' => 'heroicon-o-lock-open',
      'tooltip' => 'Sblocca l\'utente',
    ),
    'send_reset_link' => 
    [
=======
    'send_reset_link' => 
    [
=======
    'send_reset_link' => 
    [
      'label' => 'Invia Link Reset Password',
      'icon' => 'heroicon-o-envelope',
      'tooltip' => 'Invia link per reset password',
    ),
    'verify_email' => 
    [
=======
    'verify_email' => 
    [
=======
    'verify_email' => 
    [
      'label' => 'Verifica Email',
      'icon' => 'heroicon-o-check-circle',
      'tooltip' => 'Verifica l\'email dell\'utente',
    ),
    'attach' => 
    [
=======
    'attach' => 
    [
=======
    'attach' => 
    [
      'label' => 'Collega',
      'icon' => 'heroicon-o-link',
      'tooltip' => 'Collega record',
    ),
    'detach' => 
    [
=======
    'detach' => 
    [
=======
    'detach' => 
    [
      'label' => 'Scollega',
      'icon' => 'heroicon-o-link-slash',
      'tooltip' => 'Scollega record',
    ),
    'activate' => 
    [
=======
    'activate' => 
    [
=======
    'activate' => 
    [
      'label' => 'Attiva',
      'icon' => 'heroicon-o-check',
      'tooltip' => 'Attiva l\'utente',
    ),
    'deactivate' => 
    [
=======
    'deactivate' => 
    [
=======
    'deactivate' => 
    [
      'label' => 'Disattiva',
      'icon' => 'heroicon-o-x-circle',
      'tooltip' => 'Disattiva l\'utente',
    ),
  ),
  'messages' => 
  [
=======
  'messages' => 
  [
=======
  'messages' => 
  [
    'created' => 'Utente creato con successo',
    'updated' => 'Utente aggiornato con successo',
    'deleted' => 'Utente eliminato con successo',
    'blocked' => 'Utente bloccato con successo',
    'unblocked' => 'Utente sbloccato con successo',
    'activated' => 'Utente attivato con successo',
    'deactivated' => 'Utente disattivato con successo',
    'reset_link_sent' => 'Link per il reset della password inviato',
    'email_verified' => 'Email verificata con successo',
    'impersonating' => 'Stai impersonando l\'utente :name',
    'logout_success' => 'Logout effettuato con successo',
    'logout_error' => 'Errore durante il logout',
    'password_changed' => 'Password modificata con successo',
    'password_expired' => 'La password è scaduta',
    'user_not_found' => 'Utente non trovato',
    'password_fields_required' => 'Tutti i campi password sono obbligatori',
    'password_current_incorrect' => 'La password attuale non è corretta',
    'credentials_incorrect' => 'Le credenziali fornite non sono corrette...',
=======
    'credentials_incorrect' => 'Le credenziali fornite non sono corrette...',
    'login_error' => 'Si è verificato un errore durante il login. Riprova più tardi',
    'logout_error_generic' => 'Errore durante il logout. Riprova.',
    'team_switched' => 'Team cambiato con successo',
    'registration_success' => 'Registrazione completata con successo',
    'registration_error' => 'Si è verificato un errore durante la registrazione',
    'otp_sent' => 'Codice OTP inviato con successo',
    'otp_expired' => 'Il codice OTP è scaduto',
    'password_reset_success' => 'Password reimpostata con successo',
    'password_reset_error' => 'Errore durante il reset della password',
    'email_already_taken' => 'Questa email è già in uso',
  'validation' => 
  [
=======
    // Added keys for LoginWidget
    'login_success' => 'Accesso effettuato con successo',
    'validation_error' => 'Errore di validazione',
  ),
  'validation' => 
  [
=======
    // Added keys for LoginWidget
    'login_success' => 'Accesso effettuato con successo',
    'validation_error' => 'Errore di validazione',
  ),
  'validation' => 
  [
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'unique' => 'Il campo :attribute è già in uso',
    'min' => 'Il campo :attribute deve contenere almeno :min caratteri',
    'max' => 'Il campo :attribute non può superare :max caratteri',
    'confirmed' => 'La conferma del campo :attribute non corrisponde',
    'same' => 'Il campo :attribute deve corrispondere a :other',
    'email_unique' => 'Questa email è già in uso',
    'password_min' => 'La password deve essere di almeno :min caratteri',
    'password_confirmed' => 'Le password non coincidono',
    'current_password' => 'La password attuale non è corretta',
    'password_complexity' => 'La password deve contenere almeno 8 caratteri, una lettera maiuscola, una minuscola, un numero e un carattere speciale',
  ),
  'permissions' => 
  [
=======
  'permissions' => 
  [
=======
  'permissions' => 
  [
    'view_users' => 'Visualizza utenti',
    'create_users' => 'Crea utenti',
    'edit_users' => 'Modifica utenti',
    'delete_users' => 'Elimina utenti',
    'impersonate_users' => 'Impersona utenti',
    'manage_roles' => 'Gestisci ruoli',
    'manage_permissions' => 'Gestisci permessi',
    'view_roles' => 'Visualizza ruoli',
    'create_roles' => 'Crea ruoli',
    'edit_roles' => 'Modifica ruoli',
    'delete_roles' => 'Elimina ruoli',
  ),
=======
  'auth' => 
  [
    'login' => 
    [
      'title' => 'Accedi',
      'subtitle' => 'Accedi al tuo account',
      'button' => 'Accedi',
      'fields' => 
      [
=======
  'auth' => 
  [
    'login' => 
    [
      'title' => 'Accedi',
      'subtitle' => 'Accedi al tuo account',
      'button' => 'Accedi',
      'fields' => 
      [
        'email' => 'Email',
        'password' => 'Password',
        'remember' => 'Ricordami',
      ),
=======
      'help' => 
      [
        'email' => 'Inserisci la tua email registrata',
        'password' => 'Inserisci la tua password',
      ),
=======
      'help' => 
      [
        'email' => 'Inserisci la tua email registrata',
        'password' => 'Inserisci la tua password',
      ),
      'validation' => 
      [
        'password' => 
        [
=======
          'complexity' => 'La password deve contenere almeno 8 caratteri, una lettera maiuscola, una minuscola, un numero e un carattere speciale',
        ),
      ),
    ),
=======
    'register' => 
    [
      'title' => 'Registrati',
      'subtitle' => 'Crea un nuovo account',
      'button' => 'Registrati',
      'fields' => 
      [
=======
    'register' => 
    [
      'title' => 'Registrati',
      'subtitle' => 'Crea un nuovo account',
      'button' => 'Registrati',
      'fields' => 
      [
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Conferma Password',
      ),
      'help' => 
      [
=======
      'help' => 
      [
=======
      'help' => 
      [
        'email' => 'Inserisci un indirizzo email valido',
        'password' => 'La password deve essere sicura',
      ),
      'success' => 'Registrazione completata con successo',
      'error_occurred' => 'Si è verificato un errore durante la registrazione',
    ),
    'logout' => 
    [
=======
    'logout' => 
    [
=======
    'logout' => 
    [
      'title' => 'Logout',
      'button' => 'Esci',
      'success' => 'Logout effettuato con successo',
      'error' => 'Errore durante il logout',
      'confirmation' => 'Sei sicuro di voler uscire?',
    ),
    'password_reset' => 
    [
=======
    'password_reset' => 
    [
=======
    'password_reset' => 
    [
      'title' => 'Reset Password',
      'subtitle' => 'Reimposta la tua password',
      'button' => 'Invia Link Reset',
      'confirm_button' => 'Reimposta Password',
=======
      'email_sent' => 
      [
        'title' => 'Email inviata',
        'message' => 'Ti abbiamo inviato un link per reimpostare la password',
      ),
      'email_failed' => 
      [
=======
      'email_sent' => 
      [
        'title' => 'Email inviata',
        'message' => 'Ti abbiamo inviato un link per reimpostare la password',
      ),
      'email_failed' => 
      [
        'title' => 'Errore invio email',
        'message' => 'Impossibile inviare l\'email di reset',
        'generic' => 'Si è verificato un errore',
      ),
=======
      'success' => 
      [
        'title' => 'Password reimpostata',
        'message' => 'La tua password è stata reimpostata con successo',
      ),
      'errors' => 
      [
=======
      'success' => 
      [
        'title' => 'Password reimpostata',
        'message' => 'La tua password è stata reimpostata con successo',
      ),
      'errors' => 
      [
        'invalid_token' => 'Token non valido',
        'invalid_user' => 'Utente non trovato',
        'generic' => 'Si è verificato un errore',
        'title' => 'Errore reset password',
      ),
    ),
    'user_not_found' => 'Utente non trovato',
    'password_fields_required' => 'Tutti i campi password sono obbligatori',
    'password_current_incorrect' => 'La password attuale non è corretta',
    'logout_success' => 'Logout effettuato con successo',
    'logout_error' => 'Errore durante il logout',
    'logout_title' => 'Conferma Logout',
    'logout_confirmation' => 'Sei sicuro di voler uscire?',
  ),
  'profile' => 
  [
=======
  'profile' => 
  [
=======
  'profile' => 
  [
    'profile' => 'Profilo',
    'my_profile' => 'Il Mio Profilo',
    'subheading' => 'Gestisci le informazioni del tuo profilo',
    'edit_profile' => 'Modifica Profilo',
    'change_password' => 'Cambia Password',
    'personal_info' => 'Informazioni Personali',
    'security' => 'Sicurezza',
    'notifications' => 'Notifiche',
    'preferences' => 'Preferenze',
  ),
=======
  'tenancy' => 
  [
    'navigation' => 
    [
      'edit' => 'Modifica Profilo Team',
    ),
  ),
=======
  'tenancy' => 
  [
    'navigation' => 
    [
      'edit' => 'Modifica Profilo Team',
    ),
  ),
  'otp' => 
  [
    'mail' => 
    [
=======
      'subject' => 'Codice OTP per l\'accesso',
      'greeting' => 'Ciao :name',
      'line1' => 'Il tuo codice OTP è: :code',
      'line2' => 'Questo codice scade tra :minutes minuti',
      'line3' => 'Non condividere questo codice con nessuno',
      'salutation' => 'Cordiali saluti, :app_name',
    ),
    'notifications' => 
    [
      'otp_expired' => 
      [
        'body' => 'Il codice OTP è scaduto',
      ),
    ),
    'actions' => 
    [
      'send_otp_success' => 'Codice OTP inviato con successo',
    ),
  ),
=======
    'notifications' => 
    [
      'otp_expired' => 
      [
        'body' => 'Il codice OTP è scaduto',
      ),
    ),
    'actions' => 
    [
      'send_otp_success' => 'Codice OTP inviato con successo',
    ),
  ),
  'reset_password' => 
  [
=======
  'reset_password' => 
  [
    'password_reset_subject' => 'Reset Password',
    'password_cause_of_email' => 'Hai ricevuto questa email perché abbiamo ricevuto una richiesta di reset password per il tuo account',
    'reset_password' => 'Reset Password',
    'password_if_not_requested' => 'Se non hai richiesto il reset della password, non è necessaria alcuna azione',
    'thank_you_for_using_app' => 'Grazie per utilizzare la nostra applicazione',
    'regards' => 'Cordiali saluti',
  ),
  'verify_email' => 
  [
=======
  'verify_email' => 
  [
=======
  'verify_email' => 
  [
    'subject' => 'Verifica Email',
    'greeting' => 'Ciao :name',
    'line1' => 'Clicca sul pulsante qui sotto per verificare il tuo indirizzo email',
    'action' => 'Verifica Email',
    'line2' => 'Se non hai creato un account, non è necessaria alcuna azione',
    'salutation' => 'Cordiali saluti, :app_name',
  ),
  'model' => 
  [
=======
  'model' => 
  [
=======
  'model' => 
  [
    'label' => 'Utente',
    'plural' => 'Utenti',
    'description' => 'Gestione degli utenti del sistema',
  ),
  'filters' => 
  [
    'status' => 
    [
      'label' => 'Per Stato',
      'tooltip' => 'Filtra per stato utente',
    ),
    'type' => 
    [
      'label' => 'Per Tipo',
      'tooltip' => 'Filtra per tipo utente',
    ),
    'role' => 
    [
      'label' => 'Per Ruolo',
      'tooltip' => 'Filtra per ruolo',
    ),
=======
  'filters' => 
  [
    'status' => 
    [
      'label' => 'Per Stato',
      'tooltip' => 'Filtra per stato utente',
    ),
    'type' => 
    [
      'label' => 'Per Tipo',
      'tooltip' => 'Filtra per tipo utente',
    ),
    'role' => 
    [
      'label' => 'Per Ruolo',
      'tooltip' => 'Filtra per ruolo',
    ),
    'verified' => 
    [
=======
    'verified' => 
    [
      'label' => 'Email Verificata',
      'tooltip' => 'Mostra solo utenti con email verificata',
    ),
  ),
  'bulk_actions' => 
  [
    'activate_selected' => 
    [
      'label' => 'Attiva Selezionati',
      'icon' => 'heroicon-o-check',
    ),
    'deactivate_selected' => 
    [
      'label' => 'Disattiva Selezionati',
      'icon' => 'heroicon-o-x-circle',
    ),
    'delete_selected' => 
    [
      'label' => 'Elimina Selezionati',
      'icon' => 'heroicon-o-trash',
    ),
    'block_selected' => 
    [
      'label' => 'Blocca Selezionati',
      'icon' => 'heroicon-o-lock-closed',
    ),
=======
  'bulk_actions' => 
  [
    'activate_selected' => 
    [
      'label' => 'Attiva Selezionati',
      'icon' => 'heroicon-o-check',
    ),
    'deactivate_selected' => 
    [
      'label' => 'Disattiva Selezionati',
      'icon' => 'heroicon-o-x-circle',
    ),
    'delete_selected' => 
    [
      'label' => 'Elimina Selezionati',
      'icon' => 'heroicon-o-trash',
    ),
    'block_selected' => 
    [
      'label' => 'Blocca Selezionati',
      'icon' => 'heroicon-o-lock-closed',
    ),
    'unblock_selected' => 
    [
=======
    'unblock_selected' => 
    [
      'label' => 'Sblocca Selezionati',
      'icon' => 'heroicon-o-lock-open',
    ),
  ),
  'notifications' => 
  [
=======
  'notifications' => 
  [
=======
  'notifications' => 
  [
    'created' => 'Utente creato con successo',
    'updated' => 'Utente aggiornato con successo',
    'deleted' => 'Utente eliminato con successo',
    'password_changed' => 'Password modificata con successo',
    'email_verified' => 'Email verificata con successo',
    'otp_sent' => 'Codice OTP inviato',
    'error' => 'Si è verificato un errore',
  ),
  'search_placeholder' => 'Cerca per nome, email o ruolo...',
);
=======
return [
    'navigation' => [
        'name' => 'Utenti',
        'plural' => 'Utenti',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione degli utenti e dei loro permessi',
        ],
        'label' => 'Utenti',
        'sort' => 26,
        'icon' => 'user-main',
    ],

    'fields' => [
        'id' => [
            'label' => 'ID',
            'help' => 'Identificativo univoco dell\'utente',
            'tooltip' => 'ID utente',
            'helper_text' => '',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome completo',
            'help' => 'Nome completo dell\'utente',
            'tooltip' => 'Nome e cognome dell\'utente',
            'helper_text' => '',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Nome dell\'utente',
            'tooltip' => 'Nome dell\'utente',
            'helper_text' => '',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'help' => 'Cognome dell\'utente',
            'tooltip' => 'Cognome dell\'utente',
            'helper_text' => '',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'indirizzo email',
            'help' => 'Indirizzo email dell\'utente',
            'tooltip' => 'Email per accesso al sistema',
            'helper_text' => 'L\'email deve essere unica nel sistema',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la password',
            'help' => 'Password per l\'accesso al sistema',
            'tooltip' => 'Password di accesso',
            'helper_text' => 'Minimo 8 caratteri, maiuscole, minuscole e numeri',
        ],
        'password_confirmation' => [
            'label' => 'Conferma Password',
            'placeholder' => 'Conferma la password',
            'help' => 'Ripeti la password inserita',
            'tooltip' => 'Conferma password',
            'helper_text' => 'Deve corrispondere alla password inserita',
        ],
        'role' => [
            'label' => 'Ruolo',
            'placeholder' => 'Seleziona un ruolo',
            'help' => 'Ruolo dell\'utente nel sistema',
            'tooltip' => 'Ruolo e permessi',
            'helper_text' => 'Il ruolo determina i permessi disponibili',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'placeholder' => 'Seleziona i permessi',
            'help' => 'Permessi specifici dell\'utente',
            'tooltip' => 'Permessi personalizzati',
            'helper_text' => 'Oltre ai permessi del ruolo',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'help' => 'Stato attivo dell\'utente',
            'tooltip' => 'Utente attivo',
            'helper_text' => 'Gli utenti inattivi non possono accedere',
        ],
        'email_verified_at' => [
            'label' => 'Email Verificata',
            'help' => 'Data di verifica email',
            'tooltip' => 'Verifica email completata',
            'helper_text' => 'Data in cui l\'email è stata verificata',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'help' => 'Data di creazione dell\'utente',
            'tooltip' => 'Data creazione',
            'helper_text' => 'Data in cui l\'utente è stato creato',
        ],
        'updated_at' => [
            'label' => 'Data Aggiornamento',
            'help' => 'Data dell\'ultimo aggiornamento',
            'tooltip' => 'Ultimo aggiornamento',
            'helper_text' => 'Data dell\'ultima modifica',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Crea Utente',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
            'tooltip' => 'Crea un nuovo utente',
            'modal' => [
                'heading' => 'Crea Nuovo Utente',
                'description' => 'Inserisci i dati per creare un nuovo utente',
                'confirm' => 'Crea Utente',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Utente creato con successo',
                'error' => 'Errore durante la creazione dell\'utente',
            ],
        ],
        'edit' => [
            'label' => 'Modifica',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
            'tooltip' => 'Modifica utente',
            'modal' => [
                'heading' => 'Modifica Utente',
                'description' => 'Modifica i dati dell\'utente selezionato',
                'confirm' => 'Salva Modifiche',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Utente modificato con successo',
                'error' => 'Errore durante la modifica dell\'utente',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
            'tooltip' => 'Elimina utente',
            'modal' => [
                'heading' => 'Elimina Utente',
                'description' => 'Sei sicuro di voler eliminare questo utente? Questa azione è irreversibile.',
                'confirm' => 'Elimina',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Utente eliminato con successo',
                'error' => 'Errore durante l\'eliminazione dell\'utente',
            ],
        ],
        'view' => [
            'label' => 'Visualizza',
            'icon' => 'heroicon-o-eye',
            'color' => 'info',
            'tooltip' => 'Visualizza dettagli utente',
        ],
        'activate' => [
            'label' => 'Attiva',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'success',
            'tooltip' => 'Attiva utente',
            'messages' => [
                'success' => 'Utente attivato con successo',
                'error' => 'Errore durante l\'attivazione dell\'utente',
            ],
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'icon' => 'heroicon-o-x-circle',
            'color' => 'warning',
            'tooltip' => 'Disattiva utente',
            'messages' => [
                'success' => 'Utente disattivato con successo',
                'error' => 'Errore durante la disattivazione dell\'utente',
            ],
        ],
        'reset_password' => [
            'label' => 'Reset Password',
            'icon' => 'heroicon-o-key',
            'color' => 'info',
            'tooltip' => 'Reset password utente',
            'modal' => [
                'heading' => 'Reset Password',
                'description' => 'Invia email di reset password all\'utente',
                'confirm' => 'Invia Reset',
                'cancel' => 'Annulla',
            ],
            'messages' => [
                'success' => 'Email di reset password inviata con successo',
                'error' => 'Errore durante l\'invio dell\'email di reset',
            ],
        ],
    ],

    'messages' => [
        'welcome' => 'Benvenuto nel sistema di gestione utenti',
        'errors' => [
            'general' => 'Si è verificato un errore. Riprova più tardi.',
            'not_found' => 'Utente non trovato.',
            'unauthorized' => 'Non sei autorizzato ad accedere a questa risorsa.',
            'validation' => 'Si sono verificati errori di validazione.',
        ],
        'notifications' => [
            'success' => 'Operazione completata con successo',
            'info' => 'Informazione importante',
            'warning' => 'Attenzione',
            'error' => 'Errore',
        ],
        'confirmations' => [
            'delete' => 'Sei sicuro di voler eliminare questo utente?',
            'deactivate' => 'Sei sicuro di voler disattivare questo utente?',
            'activate' => 'Sei sicuro di voler attivare questo utente?',
        ],
        'empty_states' => [
            'default' => 'Nessun utente trovato',
            'search' => 'Nessun utente corrisponde alla ricerca',
            'filtered' => 'Nessun utente corrisponde ai filtri applicati',
        ],
    ],

    'validation' => [
        'name' => [
            'required' => 'Il nome è obbligatorio',
            'string' => 'Il nome deve essere una stringa',
            'max' => 'Il nome non può superare :max caratteri',
            'min' => 'Il nome deve essere di almeno :min caratteri',
        ],
        'email' => [
            'required' => 'L\'email è obbligatoria',
            'email' => 'L\'email deve essere valida',
            'unique' => 'Questa email è già in uso',
            'max' => 'L\'email non può superare :max caratteri',
        ],
        'password' => [
            'required' => 'La password è obbligatoria',
            'string' => 'La password deve essere una stringa',
            'min' => 'La password deve essere di almeno :min caratteri',
            'confirmed' => 'La conferma password non corrisponde',
        ],
        'role' => [
            'required' => 'Il ruolo è obbligatorio',
            'exists' => 'Il ruolo selezionato non esiste',
        ],
    ],

    'filters' => [
        'search' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca per nome, email...',
            'help' => 'Cerca utenti per nome, email o altri campi',
        ],
        'role' => [
            'label' => 'Filtra per Ruolo',
            'placeholder' => 'Tutti i ruoli',
            'help' => 'Filtra utenti per ruolo specifico',
        ],
        'status' => [
            'label' => 'Filtra per Stato',
            'placeholder' => 'Tutti gli stati',
            'help' => 'Filtra utenti per stato attivo/inattivo',
        ],
        'date_range' => [
            'label' => 'Filtra per Data',
            'placeholder' => 'Seleziona range date',
            'help' => 'Filtra utenti per periodo di creazione',
        ],
    ],

    'bulk_actions' => [
        'delete' => [
            'label' => 'Elimina Selezionati',
            'modal_heading' => 'Elimina Utenti Selezionati',
            'modal_description' => 'Sei sicuro di voler eliminare gli utenti selezionati? Questa azione è irreversibile.',
            'success' => 'Utenti eliminati con successo',
            'error' => 'Errore durante l\'eliminazione degli utenti',
        ],
        'activate' => [
            'label' => 'Attiva Selezionati',
            'modal_heading' => 'Attiva Utenti Selezionati',
            'modal_description' => 'Attivare gli utenti selezionati?',
            'success' => 'Utenti attivati con successo',
            'error' => 'Errore durante l\'attivazione degli utenti',
        ],
        'deactivate' => [
            'label' => 'Disattiva Selezionati',
            'modal_heading' => 'Disattiva Utenti Selezionati',
            'modal_description' => 'Disattivare gli utenti selezionati?',
            'success' => 'Utenti disattivati con successo',
            'error' => 'Errore durante la disattivazione degli utenti',
        ],
        'change_role' => [
            'label' => 'Cambia Ruolo',
            'modal_heading' => 'Cambia Ruolo Utenti Selezionati',
            'modal_description' => 'Seleziona il nuovo ruolo per gli utenti selezionati',
            'success' => 'Ruolo cambiato con successo',
            'error' => 'Errore durante il cambio di ruolo',
        ],
    ],

    'exports' => [
        'csv' => [
            'label' => 'Esporta CSV',
            'filename' => 'utenti_export.csv',
            'success' => 'Esportazione CSV completata con successo',
            'error' => 'Errore durante l\'esportazione CSV',
        ],
        'excel' => [
            'label' => 'Esporta Excel',
            'filename' => 'utenti_export.xlsx',
            'success' => 'Esportazione Excel completata con successo',
            'error' => 'Errore durante l\'esportazione Excel',
        ],
        'pdf' => [
            'label' => 'Esporta PDF',
            'filename' => 'utenti_export.pdf',
            'success' => 'Esportazione PDF completata con successo',
            'error' => 'Errore durante l\'esportazione PDF',
        ],
    ],

    'imports' => [
        'csv' => [
            'label' => 'Importa CSV',
            'modal_heading' => 'Importa Utenti da CSV',
            'modal_description' => 'Carica un file CSV per importare utenti',
            'success' => 'Importazione CSV completata con successo',
            'error' => 'Errore durante l\'importazione CSV',
            'validation' => [
                'file_required' => 'Il file CSV è obbligatorio',
                'file_type' => 'Il file deve essere in formato CSV',
                'file_size' => 'Il file non può superare :max KB',
            ],
        ],
    ],

    'statistics' => [
        'total_users' => 'Totale Utenti',
        'active_users' => 'Utenti Attivi',
        'inactive_users' => 'Utenti Inattivi',
        'new_users_this_month' => 'Nuovi Utenti (Mese)',
        'users_by_role' => 'Utenti per Ruolo',
        'users_created_today' => 'Utenti Creati Oggi',
        'users_updated_today' => 'Utenti Aggiornati Oggi',
    ],

    'help' => [
        'general' => 'Gestisci gli utenti del sistema, i loro ruoli e permessi.',
        'fields' => 'Compila tutti i campi obbligatori per creare o modificare un utente.',
        'roles' => 'I ruoli determinano i permessi base degli utenti nel sistema.',
        'permissions' => 'I permessi personalizzati si aggiungono a quelli del ruolo.',
        'security' => 'Le password devono essere sicure e mai condivise.',
        'activation' => 'Gli utenti inattivi non possono accedere al sistema.',
    ],
];
