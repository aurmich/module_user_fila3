<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
=======
    // Messaggi generali di autenticazione
    'failed' => 'Credenziali non valide.',
    'password' => 'La password inserita non è corretta.',
    'throttle' => 'Troppi tentativi di accesso. Riprova fra :seconds secondi.',
    'general_error' => 'Si è verificato un errore. Riprova più tardi.',
    'unauthorized' => 'Non hai i permessi necessari per questa operazione.',

    // Login
<<<<<<< Updated upstream
=======
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
    'login-via' => 'Accedi con',
    'login-failed' => 'Login fallito, riprova.',
    'user-not-allowed' => 'La tua email non è autorizzata.',
    'registration-not-enabled' => 'Non è possibile registrare un nuovo utente.',
    'Sign in to your account' => 'Accedi al tuo account',
    'create a new account' => 'Crea un nuovo account',
    'Or' => 'O',
    'Email address' => 'Indirizzo e-mail',
    'Password' => 'Password',
    'Remember me' => 'Ricordami',
    'Remember' => 'Ricordami',
    'Forgot your password?' => 'Password dimenticata?',
    'Sign in' => 'Accedi',
    'login-in' => 'Accedi',
    'sign-up' => 'Registrati',

    // Password Expired
    'password_expired' => [
        'title' => 'Password Scaduta, Reimposta Password',
        'heading' => 'Crea una Nuova Password',
        'sub_heading' => 'La tua password è scaduta, per favore crea una nuova password',
        'fields' => [
            'current_password' => [
                'label' => 'Password Attuale',
                'validation_attribute' => 'password attuale',
            ],
            'password' => [
                'label' => 'Password',
                'validation_attribute' => 'password',
            ],
            'password_confirmation' => [
                'label' => 'Conferma Password',
            ],
        ],
        'form' => [
            'current_password' => [
                'label' => 'Password Attuale',
                'validation_attribute' => 'password attuale',
            ],
            'password' => [
                'label' => 'Password',
                'validation_attribute' => 'password',
            ],
            'password_confirmation' => [
                'label' => 'Conferma Password',
            ],
        ],
        'actions' => [
            'reset_password' => ['label' => 'Reimposta Password'],
            'cancel' => ['label' => 'Annulla'],
        ],
        'reset_password' => 'Reimposta Password',
        'password_reset' => 'Password Reimpostata',
        'notifications' => [
            'wrong_password' => [
                'title' => 'Password Errata',
                'body' => 'La password attuale inserita non è corretta.',
            ],
            'column_not_found' => [
                'title' => 'Colonna Non Trovata',
                'body' => 'La colonna ":column_name" o la colonna password ":password_column_name" non è stata trovata nella tabella :table_name.',
            ],
            'password_reset' => [
                'success' => 'Password Reimpostata con Successo',
            ],
            'same_password' => [
                'title' => 'Password Identica',
                'body' => 'La nuova password deve essere diversa dalla password attuale.',
            ],
        ],
        'exceptions' => [
            'column_not_found' => 'La colonna ":column_name" o la colonna password ":password_column_name" non è stata trovata nella tabella ":table_name". Pubblica le migrazioni ed eseguile, se l\'errore persiste, pubblica il file di configurazione e aggiorna i valori di table_name, column_name e password_column_name.',
        ],
    ],

    // Socialite
    'socialite' => [
        'unacceptable' => ':provider non è supportato.',
    ],

    // Reset Password
    'Reset password' => 'Reimposta la password',
    'Send password reset link' => 'Invia link per reimpostare la password',
    'Confirm Password' => 'Conferma Password',
    'Confirm' => 'Conferma',
    'Resend Verification Email' => 'Rinvia Email di Verifica',
    'Verify Your Email Address' => 'Verifica la tua email',
    'A fresh verification link has been sent to your email address.' => 'Un nuovo link di verifica è stato inviato al tuo indirizzo email.',

    // Login
>>>>>>> 5856def (.)
    'login' => [
        'title' => 'Accedi',
        'email' => 'Email',
        'password' => 'Password',
<<<<<<< HEAD
        'remember_me' => 'Ricordami',
=======
        'password_placeholder' => '••••••••',
        'remember' => 'Ricordami',
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password_structured' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la tua password'
        ],
        'remember_structured' => [
            'label' => 'Ricordami'
        ],
<<<<<<< Updated upstream
=======
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
        'submit' => 'Accedi',
>>>>>>> 5856def (.)
        'forgot_password' => 'Password dimenticata?',
        'submit' => 'Accedi',
        'or' => 'oppure',
        'create_account' => 'crea un account',
        'link' => 'Accedi',
        'email_placeholder' => 'Inserisci la tua email',
        'password_placeholder' => 'Inserisci la tua password',
        'credentials_error' => 'Le credenziali fornite non sono corrette.',
        'login_error' => 'Si è verificato un errore durante il login. Riprova più tardi.',
    ],
<<<<<<< HEAD
=======

    // Registrazione
<<<<<<< Updated upstream
=======
    ],

>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
>>>>>>> 5856def (.)
    'register' => [
        'title' => 'Registrati',
        'submit' => 'Registrati',
<<<<<<< HEAD
        'link' => 'Registrati',
=======
        'already_registered' => 'Hai già un account? Accedi',
<<<<<<< Updated upstream
<<<<<<< HEAD
        'success' => 'Registrazione completata con successo.',
        'failed' => 'Impossibile completare la registrazione.',
        // Structured version
=======
        'success' => 'Registrazione completata con successo.',
        'failed' => 'Impossibile completare la registrazione.',
>>>>>>> Stashed changes
        'name_structured' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il tuo nome'
        ],
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password_structured' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la tua password'
        ],
        'password_confirmation_structured' => [
            'label' => 'Conferma Password',
            'placeholder' => 'Conferma la tua password'
        ],
<<<<<<< Updated upstream
>>>>>>> 5856def (.)
    ],
    'profile' => [
        'title' => 'Profilo',
        'settings' => 'Impostazioni',
        'information' => 'Informazioni Profilo',
        'update_password' => 'Aggiorna Password',
        'current_password' => 'Password Attuale',
        'new_password' => 'Nuova Password',
        'confirm_password' => 'Conferma Password',
        'save' => 'Salva',
        'update' => 'Aggiorna',
    ],
<<<<<<< HEAD
    'user_dropdown' => [
        'manage_account' => 'Gestione Account',
        'profile' => 'Profilo',
        'settings' => 'Impostazioni',
        'logout' => 'Logout',
        'login_link' => 'Accedi',
        'register_link' => 'Registrati',
=======

    // Reset Password
    'reset-password' => [
        'title' => 'Reimposta password',
=======
=======
>>>>>>> Stashed changes
    ],

    // Recupero Password
    'forgot-password' => [
        'title' => 'Recupera password',
        'subtitle' => 'Inserisci il tuo indirizzo email per ricevere il link di reset',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'submit' => 'Invia link',
        'back_to_login' => 'Torna al login',
        'success' => 'Ti abbiamo inviato le istruzioni via email.',
        'failed' => 'Impossibile inviare le istruzioni di reset.',
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
    ],

    // Reset Password
    'reset-password' => [
<<<<<<< Updated upstream
        'title' => 'Reimposta la password',
>>>>>>> 73101fd (.)
=======
        'title' => 'Reimposta password',
>>>>>>> Stashed changes
        'subtitle' => 'Inserisci la nuova password',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'password' => 'Nuova password',
        'password_placeholder' => '••••••••',
        'password_confirmation' => 'Conferma password',
        'password_confirmation_placeholder' => '••••••••',
        'submit' => 'Reimposta password',
<<<<<<< Updated upstream
<<<<<<< HEAD
        'success' => 'Password reimpostata con successo.',
        'failed' => 'Impossibile reimpostare la password.',
        // Structured version
=======
        'success' => 'Password reimpostata con successo.',
        'failed' => 'Impossibile reimpostare la password.',
>>>>>>> Stashed changes
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password_structured' => [
            'label' => 'Nuova Password',
            'placeholder' => 'Inserisci la nuova password'
        ],
        'password_confirmation_structured' => [
            'label' => 'Conferma Password',
            'placeholder' => 'Conferma la nuova password'
        ],
>>>>>>> 5856def (.)
    ],
    'logout' => [
        'title' => 'Logout',
        'confirm_message' => 'Sei sicuro di voler effettuare il logout?',
        'confirm_button' => 'Conferma Logout',
        'cancel_button' => 'Annulla',
        'success_title' => 'Logout effettuato',
        'success_message' => 'Sei stato disconnesso con successo.',
        'error_title' => 'Errore durante il logout',
        'error_message' => 'Si è verificato un errore durante il logout.',
        'try_again' => 'Riprova',
        'back_to_home' => 'Torna alla Home',
    ],
<<<<<<< HEAD
    'navigation' => [
        'open_menu' => 'Apri menu principale',
        'close_menu' => 'Chiudi menu principale',
        'home' => 'Home',
        'dashboard' => 'Dashboard',
        'profile' => 'Profilo',
        'settings' => 'Impostazioni',
=======

    // Social Login
    'social' => [
        'title' => 'Accedi con',
        'google' => 'Google',
        'facebook' => 'Facebook',
        'github' => 'GitHub',
        'error' => 'Si è verificato un errore con il login social.',
    ],

    // Messaggi di Errore
    'errors' => [
        'invalid_credentials' => 'Credenziali non valide.',
        'invalid_token' => 'Token non valido o scaduto.',
        'account_blocked' => 'Account bloccato. Contatta l\'assistenza.',
        'too_many_attempts' => 'Troppi tentativi. Riprova più tardi.',
        'session_expired' => 'Sessione scaduta. Effettua nuovamente il login.',
    ],
<<<<<<< Updated upstream

    // Reset Password
=======
    ],

>>>>>>> 73101fd (.)
=======

    // Reset Password
>>>>>>> Stashed changes
    'passwords' => [
        'reset' => 'La tua password è stata reimpostata!',
        'sent' => 'Ti abbiamo inviato il link per reimpostare la password!',
        'throttled' => 'Per favore attendi prima di riprovare.',
        'token' => 'Il token di reset password non è valido.',
        'user' => 'Non riusciamo a trovare un utente con questo indirizzo email.',
>>>>>>> 5856def (.)
    ],
    'failed' => 'Le credenziali non corrispondono ai nostri record.',
    'throttle' => 'Troppi tentativi di accesso. Riprova tra :seconds secondi.',
];
