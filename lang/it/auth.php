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
    'login' => [
        'title' => 'Accedi al tuo account',
        'subtitle' => 'Inserisci le tue credenziali per accedere',
        'email' => 'Indirizzo email',
        'email_placeholder' => 'esempio@email.com',
        'password' => 'Password',
        'password_placeholder' => '••••••••',
        'remember' => 'Ricordami',
        'submit' => 'Accedi',
        'forgot_password' => 'Password dimenticata?',
        'no_account' => 'Non hai un account?',
        'register' => 'Registrati',
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
        'success' => 'Registrazione completata con successo.',
        'failed' => 'Impossibile completare la registrazione.',
    ],

    // Reset Password
    'passwords' => [
        'reset' => 'La tua password è stata reimpostata!',
        'sent' => 'Ti abbiamo inviato una email con il link per reimpostare la password!',
        'throttled' => 'Attendi prima di riprovare.',
        'token' => 'Il token per il reset della password non è valido.',
        'user' => 'Non esiste un utente con questo indirizzo email.',
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
    ],

    // Reset Password
    'reset-password' => [
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
];
