# Regole per le Chiavi di Traduzione in SaluteOra

## Collegamenti correlati
- [Documentazione centrale](/docs/README.md)
- [Collegamenti documentazione](/docs/collegamenti-documentazione.md)
- [Implementazione Auth Pages](AUTH_PAGES_IMPLEMENTATION.md)
- [Implementazione Logout](LOGOUT_BLADE_IMPLEMENTATION.md)
- [Documentazione Auth Tema One](/laravel/Themes/One/docs/AUTH.md)
- [Documentazione Lang](/laravel/Modules/Lang/docs/README.md)

## Errore Identificato

Nella documentazione e implementazione precedente, è stato commesso un errore fondamentale:

```blade
<a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">
    {{ __('Accedi') }}
</a>
```

Questo approccio è **errato** perché:

1. Utilizza chiavi di traduzione in italiano (`'Accedi'`) invece di chiavi standardizzate
2. Non segue la struttura espansa per i campi nei file di traduzione
3. Non rispetta le convenzioni di naming per le chiavi di traduzione

## Regole Corrette per le Traduzioni

Secondo le regole del progetto SaluteOra:

1. **MAI utilizzare il metodo `->label()` nei componenti Filament**
   - Le etichette sono gestite automaticamente dal LangServiceProvider

2. **Utilizzare la struttura espansa per i campi nei file di traduzione**
   - Non utilizzare stringhe dirette come chiavi di traduzione

3. **Seguire la convenzione di naming per le chiavi di traduzione**
   - Formato corretto: `modulo::risorsa.fields.campo.label`
   - Esempio: `user::auth.login.button.label`

4. **Verificare sempre che il LangServiceProvider sia registrato correttamente**

## Implementazione Corretta

### 1. Definizione delle Chiavi di Traduzione

File: `/laravel/Modules/Lang/resources/lang/it/auth.php`

```php
return [
    'login' => [
        'button' => [
            'label' => 'Accedi',
        ],
    ],
    'register' => [
        'button' => [
            'label' => 'Registrati',
        ],
    ],
    'logout' => [
        'button' => [
            'label' => 'Esci',
        ],
        'confirm' => [
            'label' => 'Conferma Logout',
        ],
        'cancel' => [
            'label' => 'Annulla',
        ],
        'success' => [
            'message' => 'Logout effettuato con successo',
        ],
    ],
    'profile' => [
        'link' => [
            'label' => 'Profilo',
        ],
    ],
    'settings' => [
        'link' => [
            'label' => 'Impostazioni',
        ],
    ],
];
```

File: `/laravel/Modules/Lang/resources/lang/en/auth.php`

```php
return [
    'login' => [
        'button' => [
            'label' => 'Login',
        ],
    ],
    'register' => [
        'button' => [
            'label' => 'Register',
        ],
    ],
    'logout' => [
        'button' => [
            'label' => 'Logout',
        ],
        'confirm' => [
            'label' => 'Confirm Logout',
        ],
        'cancel' => [
            'label' => 'Cancel',
        ],
        'success' => [
            'message' => 'Successfully logged out',
        ],
    ],
    'profile' => [
        'link' => [
            'label' => 'Profile',
        ],
    ],
    'settings' => [
        'link' => [
            'label' => 'Settings',
        ],
    ],
];
```

### 2. Utilizzo Corretto nelle Viste

```blade
<a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">
    {{ __('auth.login.button.label') }}
</a>
<a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
    {{ __('auth.register.button.label') }}
</a>
```

### 3. Utilizzo nei Componenti Filament

```php
// Errato
Action::make('logout')
    ->label(__('Conferma Logout'))
    ->color('danger')

// Corretto
Action::make('logout')
    ->label(__('auth.logout.confirm.label'))
    ->color('danger')
```

## Vantaggi dell'Approccio Corretto

1. **Manutenibilità**: Le chiavi di traduzione sono organizzate in modo gerarchico e coerente
2. **Internazionalizzazione**: Facilita l'aggiunta di nuove lingue
3. **Coerenza**: Garantisce una terminologia coerente in tutta l'applicazione
4. **Automazione**: Consente l'estrazione automatica delle chiavi di traduzione

## Conclusione

L'utilizzo di chiavi di traduzione standardizzate è fondamentale per garantire la coerenza e la manutenibilità dell'applicazione SaluteOra. L'implementazione corretta segue le convenzioni del progetto e facilita l'internazionalizzazione dell'applicazione.
