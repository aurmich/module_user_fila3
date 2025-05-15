<?php

declare(strict_types=1);

return [
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
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
    'login' => [
        'title' => 'Accedi al tuo account',
        'subtitle' => 'Inserisci le tue credenziali per accedere',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'password' => 'Password',
        'password_placeholder' => '••••••••',
        'remember' => 'Ricordami',
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
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
        'forgot_password' => 'Password dimenticata?',
        'no_account' => 'Non hai un account?',
        'register' => 'Registrati',
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
        'success' => 'Accesso effettuato con successo.',
        'failed' => 'Credenziali non valide.',
        'logout_success' => 'Logout effettuato con successo.',
        'logout_error' => 'Si è verificato un errore durante il logout.',
        'login-via' => 'Accedi con',
        'login-failed' => 'Login fallito, riprova.',
        'user-not-allowed' => 'La tua email non è autorizzata.',
        'login-in' => 'Accedi',
        'Sign in' => 'Accedi',
        'Sign in to your account' => 'Accedi al tuo account',
        'Welcome back' => 'Bentornato',
        'Email address' => 'Indirizzo email',
        'Email' => 'Email',
        'Password' => 'Password',
        'Remember me' => 'Ricordami',
        'Remember' => 'Ricordami',
        'Forgot your password?' => 'Password dimenticata?',
    ],

    // Registrazione
<<<<<<< Updated upstream
=======
    ],

>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
    'register' => [
        'title' => 'Crea un nuovo account',
        'subtitle' => 'Inserisci i tuoi dati per registrarti',
        'name' => 'Nome completo',
        'name_placeholder' => 'Mario Rossi',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'password' => 'Password',
        'password_placeholder' => '••••••••',
        'password_confirmation' => 'Conferma password',
        'password_confirmation_placeholder' => '••••••••',
        'submit' => 'Registrati',
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
        // Structured version
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
    ],

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
    ],

    // Verifica Email
    'verification' => [
        'title' => 'Verifica il tuo indirizzo email',
        'subtitle' => 'Ti abbiamo inviato un link di verifica',
        'notice' => 'Prima di procedere, controlla la tua email per il link di verifica.',
        'another' => 'Se non hai ricevuto l\'email',
        'resend' => 'Clicca qui per richiederne un\'altra',
        'success' => 'Un nuovo link di verifica è stato inviato al tuo indirizzo email.',
    ],

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
    ],
];
