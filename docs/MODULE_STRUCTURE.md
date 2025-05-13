# Struttura del Modulo User

## Panoramica

Il modulo User gestisce tutte le funzionalità relative agli utenti, inclusa l'autenticazione, la registrazione, la gestione del profilo e le autorizzazioni.

## Struttura delle Directory

```
User/
├── Config/
│   └── config.php
├── Console/
│   └── Commands/
├── Database/
│   ├── Migrations/
│   └── Seeders/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   └── Requests/
├── Models/
│   └── BaseUser.php
├── Resources/
│   ├── assets/
│   ├── lang/
│   │   ├── en/
│   │   └── it/
│   └── views/
├── Routes/
│   ├── api.php
│   └── web.php
├── Services/
├── Tests/
└── composer.json
```

## Componenti Principali

### 1. Models

- `BaseUser.php`: Il modello principale per la gestione degli utenti
  - Implementa l'autenticazione
  - Gestisce le relazioni
  - Definisce le autorizzazioni

### 2. Controllers

- `AuthController`: Gestisce l'autenticazione
- `ProfileController`: Gestisce il profilo utente
- `UserController`: Gestisce gli utenti (CRUD)

### 3. Middleware

- `Authenticate`: Verifica l'autenticazione
- `Authorize`: Gestisce le autorizzazioni
- `CheckRole`: Verifica i ruoli utente

### 4. Routes

```php
// web.php
Route::group(['middleware' => ['web']], function () {
    // Auth Routes
    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout')->name('logout');
    
    // Profile Routes
    Route::get('profile', 'ProfileController@show')->name('profile');
    Route::put('profile', 'ProfileController@update')->name('profile.update');
});

// api.php
Route::group(['middleware' => ['api']], function () {
    Route::apiResource('users', 'UserController');
});
```

### 5. Views

- `auth/`: Viste per l'autenticazione
- `profile/`: Viste per il profilo
- `users/`: Viste per la gestione utenti

### 6. Language Files

- `auth.php`: Traduzioni per l'autenticazione
- `profile.php`: Traduzioni per il profilo
- `user.php`: Traduzioni per la gestione utenti

## Configurazione

```php
// config.php
return [
    'name' => 'User',
    'middleware' => ['web', 'api'],
    'prefix' => 'user',
    'namespace' => 'Modules\User\Http\Controllers',
];
```

## Best Practices

1. **Autenticazione**
   - Utilizzare il middleware `auth` per le rotte protette
   - Implementare il logout in modo sicuro
   - Gestire correttamente le sessioni

2. **Autorizzazioni**
   - Utilizzare le policies per le autorizzazioni
   - Implementare i ruoli e i permessi
   - Verificare le autorizzazioni nei controller

3. **Validazione**
   - Utilizzare le form requests per la validazione
   - Implementare regole di validazione personalizzate
   - Gestire i messaggi di errore

4. **Testing**
   - Scrivere test per l'autenticazione
   - Testare le autorizzazioni
   - Verificare il funzionamento delle rotte

## Collegamenti Correlati

- [Best Practices per le Traduzioni](TRANSLATION_BEST_PRACTICES.md)
- [Regole per le Chiavi di Traduzione](TRANSLATION_KEYS_RULES.md)
- [Convenzioni di Codice](CODE_CONVENTIONS.md) 
