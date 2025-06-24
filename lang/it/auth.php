<?php

declare(strict_types=1);

return [
    // Messaggi generali di autenticazione
    'failed' => 'Credenziali non valide.',
    'password' => 'La password inserita non è corretta.',
    'throttle' => 'Troppi tentativi di accesso. Riprova fra :seconds secondi.',
    'general_error' => 'Si è verificato un errore. Riprova più tardi.',
    'unauthorized' => 'Non hai i permessi necessari per questa operazione.',

    // Login
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
    'password_expired' => [
        'title' => 'Password Scaduta, Reimposta Password',
        'heading' => 'Crea una Nuova Password',
        'sub_heading' => 'La tua password è scaduta, per favore crea una nuova password',
        'fields' => [
            'current_password' => [
                'label' => 'Current Password',
                'validation_attribute' => 'current_password',
            ],
            'password' => [
                'label' => 'Password',
                'validation_attribute' => 'password',
            ],
            'password_confirmation' => [
                'label' => 'Confirm Password',
            ],
        ],
        'form' => [
            'current_password' => [
                'label' => 'Password Attuale',
                'placeholder' => 'Inserisci la password attuale',
                'help' => 'Inserisci la tua password attuale per confermare la tua identità',
            ],
            'password' => [
                'label' => 'Nuova Password',
                'placeholder' => 'Inserisci la nuova password',
                'help' => 'La password deve contenere almeno 8 caratteri',
            ],
            'password_confirmation' => [
                'label' => 'Conferma Nuova Password',
                'placeholder' => 'Conferma la nuova password',
                'help' => 'Reinserisci la nuova password per confermarla',
            ],
        ],
        'actions' => [
            // qui vanno le azioni, se previste
        ],
    ],

    // Registrazione
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
        'success' => 'Registrazione completata con successo.',
        'failed' => 'Impossibile completare la registrazione.',
        'already_have_account' => 'Hai già un account?',
        'login' => 'Accedi',
        // Structured version
        'name_structured' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il tuo nome completo'
        ],
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password_structured' => [
            'label' => 'Password',
        ],
    ],

    // Password dimenticata
    'forgot_password' => [
        'title' => 'Password dimenticata?',
        'subtitle' => 'Inserisci la tua email per ricevere le istruzioni',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'submit' => 'Invia istruzioni',
        'success' => 'Le istruzioni sono state inviate alla tua email.',
        'failed' => 'Impossibile inviare le istruzioni di reset.',
        'back_to_login' => 'Torna al login',
        // Structured version
        'email_structured' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
    ],

    'reset_password' => [
        'title' => 'Reimposta password',
        'subtitle' => 'Inserisci la nuova password',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'password' => 'Nuova password',
        'password_placeholder' => '••••••••',
        'password_confirmation' => 'Conferma password',
        'password_confirmation_placeholder' => '••••••••',
        'submit' => 'Reimposta password',
        'success' => 'Password reimpostata con successo.',
        'failed' => 'Impossibile reimpostare la password.',
        // Structured version
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
    
    // Reset Password
    'passwords' => [
        'reset' => 'La tua password è stata reimpostata!',
        'sent' => 'Ti abbiamo inviato il link per reimpostare la password!',
        'throttled' => 'Per favore attendi prima di riprovare.',
        'token' => 'Il token di reset password non è valido.',
        'user' => 'Non riusciamo a trovare un utente con questo indirizzo email.',
    ],
];
