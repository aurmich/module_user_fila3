<<<<<<< HEAD
# User Module

## Overview

The User module provides comprehensive user management functionality including authentication, registration, profile management, and user type handling. This module follows the Laravel Modules architecture and integrates seamlessly with Filament for admin interfaces.

## Key Features
=======
# Modulo User

## Introduzione

Il modulo User gestisce l'autenticazione, l'autorizzazione e la gestione degli utenti nel sistema. Fornisce funzionalità base per la registrazione, il login, la gestione dei ruoli e dei permessi.

## File Chiave
- [BaseUser.php](app/Models/BaseUser.php)
- [User.php](app/Models/User.php)
- [Doctor.php](../Patient/app/Models/Doctor.php)
- [DoctorResource.php](../Patient/app/Filament/Resources/DoctorResource.php)
- [RegisterAction.php](../Patient/app/Actions/RegisterAction.php)
- [RegistrationWidget.php](app/Filament/Widgets/RegistrationWidget.php)

## Funzionalità

### 1. Autenticazione
- Login/Logout
- Registrazione
- Password Reset
- Email Verification

### 2. Autorizzazione
- Ruoli e Permessi
- Policy
- Gates
- Middleware

### 3. Gestione Utenti
- CRUD Utenti
- Profili
- Impostazioni
- Notifiche

## Best Practices

### 1. Ereditarietà
- Estendere sempre `BaseUser` per i modelli utente
- Usare il trait `HasParent` per STI
- Non duplicare trait già presenti nelle classi base

### 2. Validation
- Usare le regole di validazione base
- Estendere le regole quando necessario
- Mantenere la validazione consistente

### 3. Error Handling
- Usare le eccezioni custom fornite
- Implementare logging appropriato
- Gestire gli errori in modo consistente

## Struttura
```
User/
├── app/
│   ├── Models/
│   │   ├── User.php
│   │   ├── OauthAccessToken.php
│   │   ├── OauthAuthCode.php
│   │   ├── OauthClient.php
│   │   ├── OauthPersonalAccessClient.php
│   │   └── OauthRefreshToken.php
│   ├── Providers/
│   │   ├── Traits/
│   │   │   ├── HasPassportConfiguration.php
│   │   │   └── HasSocialiteConfiguration.php
│   │   ├── UserServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   ├── RouteServiceProvider.php
│   │   └── Filament/
│   │       └── AdminPanelProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── UserResource.php
│   │   ├── Widgets/
│   │   │   ├── Auth/
│   │   │   │   ├── LoginWidget.php
│   │   │   │   └── SocialLoginWidget.php
│   │   │   └── User/
│   │   │       ├── UserStatsWidget.php
│   │   │       └── UserActivityWidget.php
│   │   └── Pages/
│   │       └── Auth/
│   │           ├── LoginPage.php
│   │           └── RegisterPage.php
│   └── Http/
│       └── Controllers/
│           └── Auth/
├── config/
│   └── auth.php
├── database/
│   └── migrations/
└── resources/
    └── views/
        └── pages/
            └── auth/
```

## Documentazione Tecnica
- [Architettura](./architecture/README.md)
- [Best Practices](./best-practices/README.md)
- [Error Handling](./error-handling.md)
- [Validation](./validation.md)
- [Linee guida Actions](./actions.mdc)
- [Linee guida Activitylog](./activitylog.mdc)

## Collegamenti Bidirezionali
- [Modulo Xot](../Xot/docs/README.md)
- [Modulo Patient](../Patient/docs/README.md)
- [Modulo Dental](../Dental/docs/README.md)
- [Linee guida Actions](./actions.mdc)
- [Linee guida Activitylog](./activitylog.mdc)

## Vedi Anche
- [Documentazione Principale](../../docs/INDEX.md)
- [Architettura Moduli](../../docs/architecture/modules-structure.md)
- [Convenzioni di Nomenclatura](../../docs/standards/file_naming_conventions.md)
- [Struttura del Progetto](../Xot/docs/architecture/struttura-progetto.md)

> **Collegamenti correlati**
> - [README.md documentazione generale](../../../docs/README.md)
> - [README.md toolkit bashscripts](../../../bashscripts/docs/README.md)
> - [README.md modulo GDPR](../Gdpr/docs/README.md)
> - [README.md modulo User](../User/docs/README.md)
> - [README.md modulo Lang](../Lang/docs/README.md)
> - [README.md modulo Activity](../Activity/docs/README.md)
> - [README.md modulo Media](../Media/docs/README.md)
> - [README.md modulo Notify](../Notify/docs/README.md)
> - [README.md modulo Tenant](../Tenant/docs/README.md)
> - [README.md modulo UI](../UI/docs/README.md)
> - [README.md modulo Xot](../Xot/docs/README.md)
> - [Collegamenti documentazione centrale](../../../docs/collegamenti-documentazione.md)

## Indice
>>>>>>> 5856def (.)

- **User Authentication**: Login, logout, password reset, and email verification
- **User Registration**: Multi-step registration with validation
- **Profile Management**: User profile editing and management
- **User Types**: Support for different user types (standard, admin, etc.)
- **Security**: Password policies, account locking, and security features
- **Filament Integration**: Complete admin interface using Filament

## Architecture

### Widgets

All Filament widgets in this module extend `XotBaseWidget` and follow established patterns:

- **Authentication Widgets**: Login, registration, password reset
- **Profile Widgets**: User profile editing and management
- **Chart Widgets**: User statistics and analytics

### Type Safety

The module implements comprehensive type safety measures:

- **Safe Type Casting**: All form data uses `safeStringCast()` method
- **Proper Type Declarations**: All methods have proper parameter and return types
- **PHPDoc Annotations**: Comprehensive documentation for complex types
- **PHPStan Compliance**: Full compliance with PHPStan level 9

### Security Features

- **Password Hashing**: Secure password storage using Laravel's Hash facade
- **Input Validation**: Comprehensive validation for all user inputs
- **Safe Data Handling**: All sensitive data is handled safely
- **Error Handling**: Graceful error handling with proper user feedback

## File Structure

## Regola fondamentale sulle migration

> **Tutte le migration che riguardano tabelle, colonne o relazioni di un modulo devono essere SEMPRE nella cartella `database/migrations` del modulo stesso (es: `Modules/User/database/migrations/`).**
> Mettere migration in `laravel/database/migrations` è un errore grave che rompe la modularità, il rollback e la chiarezza del progetto.
> Vedi dettagli e motivazione in [PATH_CONVENTIONS.md](./PATH_CONVENTIONS.md).

```
Modules/User/
├── app/
│   ├── Actions/           # Business logic actions
│   ├── Filament/          # Filament components
│   │   ├── Pages/         # Filament pages
│   │   ├── Resources/     # Filament resources
│   │   └── Widgets/       # Filament widgets
│   ├── Http/              # HTTP layer
│   ├── Models/            # Eloquent models
│   └── Services/          # Service classes
├── database/              # Database migrations and seeders
├── docs/                  # Documentation
├── resources/             # Views and assets
└── routes/                # Route definitions
```

## Widgets

### Authentication Widgets

#### LoginWidget
- **Purpose**: User login interface
- **Features**: Email/password authentication, remember me, error handling
- **Security**: Rate limiting, validation, secure session handling

#### RegisterWidget
- **Purpose**: User registration interface
- **Features**: Multi-step registration, validation, email verification
- **Security**: Password strength validation, duplicate email prevention

#### PasswordResetWidget
- **Purpose**: Password reset request interface
- **Features**: Email-based password reset, token validation
- **Security**: Secure token generation, email validation

#### PasswordResetConfirmWidget
- **Purpose**: Password reset confirmation interface
- **Features**: Token validation, new password setting
- **Security**: Secure password hashing, token verification

#### PasswordExpiredWidget
- **Purpose**: Password expiration handling
- **Features**: Current password verification, new password setting
- **Security**: Secure password validation, account protection

### Profile Widgets

#### EditUserWidget
- **Purpose**: User profile editing
- **Features**: Dynamic form generation, validation, data persistence
- **Security**: User authorization, data sanitization

### Chart Widgets

#### UserTypeRegistrationsChartWidget
- **Purpose**: User registration analytics
- **Features**: Time-based charts, filtering, data visualization
- **Type Safety**: Proper handling of TrendValue objects

## Type Safety Implementation

### Safe String Casting

All widgets implement a `safeStringCast()` method for secure type conversion:

```php
private function safeStringCast(mixed $value): string
{
    if (is_string($value)) {
        return $value;
    }

    if (is_null($value)) {
        return '';
    }

    if (is_bool($value)) {
        return $value ? '1' : '0';
    }

    if (is_scalar($value)) {
        return (string) $value;
    }

    return '';
}
```

### Form Data Handling

All form data is safely handled:

```php
protected function validateForm(): array
{
    $data = $this->form->getState();
    
    return [
        'first_name' => $this->safeStringCast($data['first_name'] ?? ''),
        'last_name' => $this->safeStringCast($data['last_name'] ?? ''),
        'email' => $this->safeStringCast($data['email'] ?? ''),
        'password' => Hash::make($this->safeStringCast($data['password'] ?? '')),
    ];
}
```

## Configuration

### Widget Configuration

All widgets use proper view configuration:

```php
/**
 * @var string
 */
protected static string $view = 'pub_theme::filament.widgets.edit-user';
```

### PHPStan Configuration

The module is configured for PHPStan level 9 compliance with specific ignore patterns for Filament's view-string type system.

## Testing

### Unit Tests

Test the safe string casting functionality:

```php
public function test_safe_string_cast_handles_various_types(): void
{
    $widget = new TestWidget();
    
    $this->assertEquals('test', $widget->safeStringCast('test'));
    $this->assertEquals('', $widget->safeStringCast(null));
    $this->assertEquals('1', $widget->safeStringCast(true));
    $this->assertEquals('0', $widget->safeStringCast(false));
    $this->assertEquals('123', $widget->safeStringCast(123));
    $this->assertEquals('', $widget->safeStringCast([]));
}
```

### Integration Tests

- Test form submission with various data types
- Verify password reset functionality
- Test user registration with edge cases
- Validate chart widget data handling

## Best Practices

### Development Guidelines

1. **Always extend XotBaseWidget**: Never extend Filament classes directly
2. **Use safeStringCast()**: For all type conversions from mixed to string
3. **Add proper type declarations**: All methods should have parameter and return types
4. **Implement proper validation**: Validate all user inputs
5. **Handle errors gracefully**: Provide meaningful error messages

### Security Guidelines

1. **Hash passwords**: Always use Hash::make() for password storage
2. **Validate inputs**: Comprehensive validation for all user inputs
3. **Sanitize data**: Clean all data before processing
4. **Rate limiting**: Implement rate limiting for authentication endpoints
5. **Session security**: Proper session handling and security

### Performance Guidelines

1. **Efficient queries**: Use proper Eloquent relationships
2. **Caching**: Implement caching where appropriate
3. **Lazy loading**: Use lazy loading for widgets
4. **Memory management**: Proper memory handling for large datasets

## Troubleshooting

### Common Issues

1. **PHPStan Errors**: Ensure all type declarations are proper
2. **View Not Found**: Check view paths and namespaces
3. **Form Validation**: Verify validation rules and messages
4. **Authentication**: Check user model and guard configuration

### Debugging

1. **Enable logging**: Check Laravel logs for errors
2. **PHPStan Analysis**: Run `./vendor/bin/phpstan analyse Modules/User`
3. **Test Coverage**: Run tests to identify issues
4. **Type Checking**: Verify all type declarations

## Contributing

When contributing to this module:

1. Follow the established architectural patterns
2. Implement proper type safety measures
3. Add comprehensive tests
4. Update documentation
5. Ensure PHPStan compliance

## Related Documentation

<<<<<<< HEAD
- [Type Safety Improvements](type-safety-improvements.md)
- [Widget Structure](widgets_structure.md)
- [PHPStan Fixes](phpstan-fixes.md)
=======
#### Fixed
- Bug autenticazione
- Problemi di configurazione
### Versione HEAD

- Errori di traduzione 

### Versione Incoming

- Errori di traduzione 
## Collegamenti
- [Indice Documentazione](../../../docs/INDEX.md)
- [README Principale](../../../README.md)
- [API Reference](../docs/api.md)
- [Changelog](../docs/CHANGELOG.md) 
## Collegamenti tra versioni di README.md
* [README.md](bashscripts/docs/README.md)
* [README.md](bashscripts/docs/it/README.md)
* [README.md](docs/laravel-app/phpstan/README.md)
* [README.md](docs/laravel-app/README.md)
* [README.md](docs/moduli/struttura/README.md)
* [README.md](docs/moduli/README.md)
* [README.md](docs/moduli/manutenzione/README.md)
* [README.md](docs/moduli/core/README.md)
* [README.md](docs/moduli/installati/README.md)
* [README.md](docs/moduli/comandi/README.md)
* [README.md](docs/phpstan/README.md)
* [README.md](docs/README.md)
* [README.md](docs/module-links/README.md)
* [README.md](docs/troubleshooting/git-conflicts/README.md)
* [README.md](docs/tecnico/laraxot/README.md)
* [README.md](docs/modules/README.md)
* [README.md](docs/conventions/README.md)
* [README.md](docs/amministrazione/backup/README.md)
* [README.md](docs/amministrazione/monitoraggio/README.md)
* [README.md](docs/amministrazione/deployment/README.md)
* [README.md](docs/translations/README.md)
* [README.md](docs/roadmap/README.md)
* [README.md](docs/ide/cursor/README.md)
* [README.md](docs/implementazione/api/README.md)
* [README.md](docs/implementazione/testing/README.md)
* [README.md](docs/implementazione/pazienti/README.md)
* [README.md](docs/implementazione/ui/README.md)
* [README.md](docs/implementazione/dental/README.md)
* [README.md](docs/implementazione/core/README.md)
* [README.md](docs/implementazione/reporting/README.md)
* [README.md](docs/implementazione/isee/README.md)
* [README.md](docs/it/README.md)
* [README.md](laravel/vendor/mockery/mockery/docs/README.md)
* [README.md](../../../Chart/docs/README.md)
* [README.md](../../../Reporting/docs/README.md)
* [README.md](../../../Gdpr/docs/phpstan/README.md)
* [README.md](../../../Gdpr/docs/README.md)
* [README.md](../../../Notify/docs/phpstan/README.md)
* [README.md](../../../Notify/docs/README.md)
* [README.md](../../../Xot/docs/filament/README.md)
* [README.md](../../../Xot/docs/phpstan/README.md)
* [README.md](../../../Xot/docs/exceptions/README.md)
* [README.md](../../../Xot/docs/README.md)
* [README.md](../../../Xot/docs/standards/README.md)
* [README.md](../../../Xot/docs/conventions/README.md)
* [README.md](../../../Xot/docs/development/README.md)
* [README.md](../../../Dental/docs/README.md)
* [README.md](../../../User/docs/phpstan/README.md)
* [README.md](../../../User/docs/README.md)
* [README.md](../../../User/docs/README.md)
* [README.md](../../../UI/docs/phpstan/README.md)
* [README.md](../../../UI/docs/README.md)
* [README.md](../../../UI/docs/standards/README.md)
* [README.md](../../../UI/docs/themes/README.md)
* [README.md](../../../UI/docs/components/README.md)
* [README.md](../../../Lang/docs/phpstan/README.md)
* [README.md](../../../Lang/docs/README.md)
* [README.md](../../../Job/docs/phpstan/README.md)
* [README.md](../../../Job/docs/README.md)
* [README.md](../../../Media/docs/phpstan/README.md)
* [README.md](../../../Media/docs/README.md)
* [README.md](../../../Tenant/docs/phpstan/README.md)
* [README.md](../../../Tenant/docs/README.md)
* [README.md](../../../Activity/docs/phpstan/README.md)
* [README.md](../../../Activity/docs/README.md)
* [README.md](../../../Patient/docs/README.md)
* [README.md](../../../Patient/docs/standards/README.md)
* [README.md](../../../Patient/docs/value-objects/README.md)
* [README.md](../../../Cms/docs/blocks/README.md)
* [README.md](../../../Cms/docs/README.md)
* [README.md](../../../Cms/docs/standards/README.md)
* [README.md](../../../Cms/docs/content/README.md)
* [README.md](../../../Cms/docs/frontoffice/README.md)
* [README.md](../../../Cms/docs/components/README.md)
* [README.md](../../../../Themes/Two/docs/README.md)
* [README.md](../../../../Themes/One/docs/README.md)


---

## Moderazione Utente Generica dal Modulo User

### Premessa e Neutralità
In questo modulo, la gestione della moderazione non deve mai fare riferimento a ruoli o tipi specifici (es. "dentista", "paziente"). Tutti i tipi di utente sono rappresentati come varianti (type/parental) del modello User, secondo il pattern Single Table Inheritance (STI) o Parental, utilizzando SEMPRE la colonna `type` (vedi [tighten/parental](https://github.com/tighten/parental)). Questo garantisce la massima riusabilità del modulo User in qualsiasi progetto.

### Architettura proposta
- **Model**: User è la base, ogni tipo di utente (es. admin, operator, specialist, ...), è un parental/type di User. La colonna di discriminazione è SEMPRE `type`.
- **Enum/ModelStates**: Lo stato di moderazione è gestito tramite enum o Spatie Model States, utilizzando SEMPRE la colonna `state` (vedi [spatie/laravel-model-states](https://spatie.be/docs/laravel-model-states/v2/working-with-states)), con valori come `pending`, `approved`, `rejected`, applicabile a qualunque tipo di utente.
- **Action**: Azioni queueable (spatie/laravel-queueable-action) per approve/reject, generiche e parametrizzate sul tipo di utente.
- **Notifiche**: Notifiche di stato centralizzate, con template e destinatari dinamici in base al type.
- **UI**: Pannello Filament unico per la moderazione, con filtri per type e stato.
- **Policy**: Policy centralizzate per la moderazione, con possibilità di override per type specifici.
- **Eventi/Listener**: Eventi per transizioni di stato, listener per notifiche e logging, generici e riutilizzabili.

### Flusso Moderazione Utente (Generico)
1. **Registrazione**: L'utente si registra tramite wizard unico, che raccoglie i dati base e quelli specifici del type. Il campo `type` viene valorizzato secondo la variante.
2. **Stato iniziale**: L'utente viene creato in stato `pending` (moderazione richiesta), valorizzando la colonna `state`.
3. **Moderazione**: Un moderatore visualizza la richiesta, può approvare o rifiutare (UI e azioni generiche).
4. **Transizione di stato**: Azione queueable aggiorna la colonna `state`, invia notifica, logga l'evento (tutto generico).
5. **Notifica**: L'utente riceve email con esito e, se approvato, link per completare la registrazione (template dinamico).
6. **Completamento**: L'utente può accedere e completare i dati solo se approvato.

### Percentuali di riuso logica
- Azioni di moderazione: **90%**
- Gestione stati: **100%**
- Notifiche: **80%**
- UI Filament: **80%**
- Eventi/listener: **90%**
- Policy: **80%**

### Dettagli implementativi
- **Wizard di registrazione**: Unico, con step dinamici in base al type (pattern strategy/factory per step specifici). Il campo `type` è centrale.
- **ModerationAction**: Un'unica action queueable, che riceve l'istanza User e il type, e applica la logica di moderazione aggiornando la colonna `state`.
- **Enum/ModelStates**: Enum generico (UserState) con metodi helper per label, colore, icona, ecc., sempre mappato su `state`.
- **Notifiche**: Classe base Notification, con metodi overridabili per type specifici.
- **UI Filament**: Resource/Panel unico, con filtri per type e stato, e policy generiche.
- **Policy**: Policy generica UserModerationPolicy, con possibilità di override tramite strategy pattern.
- **Eventi/Listener**: Eventi generici (UserApproved, UserRejected, ecc.), listener che gestiscono notifiche e side-effect.
- **Documentazione**: Tutte le transizioni di stato, policy e override vanno documentate in modo neutro e generico.
- **Test**: Test end-to-end che coprano il flusso per tutti i type, senza riferimenti a ruoli specifici.

### Esempio di struttura
- `User.php` (modello base, con type/parental e state)
- `UserState.php` (enum generico, mappato su `state`)
- `ModerationAction.php` (action queueable generica)
- `UserModerationNotification.php` (notifica base)
- `UserModerationPolicy.php` (policy generica)
- `UserModerationResource.php` (Filament resource/panel generico)
- `UserApproved.php`, `UserRejected.php` (eventi generici)

### Vantaggi
- Massima riusabilità del modulo User in qualsiasi progetto
- Facilità di estensione per nuovi type/ruoli
- Manutenzione centralizzata
- Coerenza di UX e policy

### TODO
- Prototipo di Model/Action/Resource per la moderazione generica (usando SEMPRE `type` e `state`)
- Refactoring delle azioni e delle policy per eliminare riferimenti a type specifici
- UI Filament unica per la moderazione
- Test end-to-end generici
- Documentazione neutra e riutilizzabile

---

## Convenzioni fondamentali per STI/Parental e Model States

### 1. Single Table Inheritance (STI) / Parental
- **Colonna obbligatoria:** `type` (e NON `user_type`)
- **Motivazione:** Segue la convenzione tighten/parental ([vedi doc](https://github.com/tighten/parental))
- **Esempio migrazione:**
```php
Schema::table('users', function ($table) {
    $table->string('type')->nullable();
});
```
- **Nota:** La colonna `type` deve essere nullable per permettere la compatibilità con modelli base e specializzati.

### 2. Model States (spatie/laravel-model-states)
- **Colonna obbligatoria:** `state` (e NON `moderation_status` o simili)
- **Motivazione:** Segue la convenzione spatie/laravel-model-states ([vedi doc](https://spatie.be/docs/laravel-model-states/v2/working-with-states/01-configuring-states))
- **Esempio migrazione:**
```php
Schema::table('users', function ($table) {
    $table->string('state')->nullable();
});
```
- **Nota:** La colonna `state` rappresenta lo stato generico del modello (pending, approved, rejected, ecc.)

### 3. Esempio di implementazione
```php
// Model User.php
use Parental	raits\nuse Spatie\ModelStates\HasStates;

class User extends Model {
    use HasStates;
    // ...
    protected $casts = [
        'state' => UserState::class,
    ];
}

// Enum State
abstract class UserState extends State {
    // ...
}
```

### 4. Motivazione e fonti
- Queste convenzioni garantiscono compatibilità, manutenibilità e aderenza agli standard delle librerie usate.
- Riferimenti:
  - [tighten/parental - Accessing Child Models from Parents](https://github.com/tighten/parental)
  - [spatie/laravel-model-states - Configuring States](https://spatie.be/docs/laravel-model-states/v2/working-with-states/01-configuring-states)

---

## Business Logic: Solo Actions, mai Service

### Convenzione di progetto
- **Non utilizzare mai Service** per la business logic.
- Utilizzare SEMPRE le Actions queueable di [spatie/laravel-queueable-action](https://github.com/spatie/laravel-queueable-action).
- Le Actions sono classi dedicate che incapsulano la logica di dominio e possono essere eseguite sia in modo sincrono che asincrono (in coda).

### Motivazione
- Maggiore testabilità e riusabilità
- Supporto nativo a queue, chaining, tagging, middleware, backoff, ecc.
- Costruttore con dependency injection (più flessibile dei Job standard)
- Uniformità e chiarezza architetturale

### Esempio di Action
```php
use Spatie\QueueableAction\QueueableAction;

class ApproveUserAction
{
    use QueueableAction;

    public function execute(User $user): void
    {
        // Logica di approvazione
        $user->state = 'approved';
        $user->save();
    }
}
```

### Esecuzione
```php
// Sincrona
app(ApproveUserAction::class)->execute($user);

// In coda (queue)
app(ApproveUserAction::class)->onQueue()->execute($user);
```

### Testing
```php
use Spatie\QueueableAction\Testing\QueueableActionFake;

Queue::fake();
app(ApproveUserAction::class)->onQueue()->execute($user);
QueueableActionFake::assertPushed(ApproveUserAction::class);
```

### Link utili
- [spatie/laravel-queueable-action - GitHub](https://github.com/spatie/laravel-queueable-action)
- [Blog: Perché usare le Actions](https://stitcher.io/blog/laravel-queueable-actions)

### Note
- Le Actions possono essere concatenate (chaining), taggate (per Horizon), dotate di middleware e backoff personalizzato.
- Per la business logic, **NON** usare Service, ma solo Actions secondo questa convenzione.

## Audit e Logging: Solo Spatie Activitylog, mai ModerationLog custom

### Convenzione di progetto
- **Non utilizzare mai tabelle custom come ModerationLog** per tracciare le azioni di moderazione o audit.
- Utilizzare SEMPRE [spatie/laravel-activitylog](https://spatie.be/docs/laravel-activitylog/v4/introduction) per il logging di tutte le attività rilevanti (moderazione, cambi di stato, ecc.).

### Motivazione
- Activitylog è uno standard de facto, maturo e ampiamente supportato
- Permette di tracciare qualsiasi evento su qualsiasi modello, con metadati, causer, soggetto, ecc.
- Supporta query avanzate, filtraggio, esportazione, notifiche
- Riduce la duplicazione di codice e la complessità
- Facilita l'integrazione con dashboard, notifiche, audit trail

### Esempio di utilizzo
```php
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Model
{
    use LogsActivity;

    protected static $logAttributes = ['state', 'type'];
    protected static $logName = 'user_moderation';
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
}

// Log manuale di un evento custom
activity()
    ->performedOn($user)
    ->causedBy(auth()->user())
    ->withProperties(['reason' => 'approved by admin'])
    ->log('User approved');
```

### Query e visualizzazione
```php
// Recupera tutte le attività di moderazione di un utente
$logs = $user->activities()->where('log_name', 'user_moderation')->get();
```

### Link utili
- [spatie/laravel-activitylog - Docs](https://spatie.be/docs/laravel-activitylog/v4/introduction)
- [Esempi avanzati](https://spatie.be/docs/laravel-activitylog/v4/advanced-usage)

### Note
- Activitylog può essere integrato facilmente con Filament, dashboard custom, notifiche, ecc.
- Per ogni evento rilevante (moderazione, cambio stato, ecc.) loggare SEMPRE tramite activitylog.
- Non creare mai tabelle custom come ModerationLog: tutta l'audit trail deve essere centralizzata e standardizzata.

## Migrazioni: uso corretto di hasColumn con XotBaseMigration

### Regola fondamentale
- **NON usare mai** `Schema::hasColumn('users', 'state')` nelle migrazioni che estendono XotBaseMigration.
- **Usare SEMPRE** `$this->hasColumn('state')` (o altro nome colonna) come da convenzione XotBaseMigration.

### Esempio corretto
```php
if (! $this->hasColumn('state')) {
    $this->tableUpdate(function (Blueprint $table) {
        $table->string('state')->nullable();
    });
}
```

### Motivazione
- XotBaseMigration fornisce metodi custom per la gestione delle colonne e delle tabelle, garantendo compatibilità multi-db e coerenza tra i moduli.
- Usare Schema direttamente può portare a comportamenti non previsti o errori di compatibilità.

### Checklist
- [ ] Usare SEMPRE $this->hasColumn nelle migrazioni Xot
- [ ] Non usare mai Schema::hasColumn
- [ ] Aggiornare tutte le migrazioni esistenti che non rispettano questa regola

### Collegamenti correlati
- [Linee guida Actions](./actions.mdc)
- [Linee guida Activitylog](./activitylog.mdc)
- [Best Practices](./best-practices.md)
- [Testing](./testing.md)
- [Documentazione centrale](../../../../docs/INDEX.md)

> **Nota fondamentale:**
> Se stai creando o modificando una Filament Resource che estende XotBaseResource, NON dichiarare mai le proprietà statiche $navigationGroup, $navigationLabel, né il metodo statico table(Table $table): Table. Segui la regola documentata in [filament-best-practices.mdc](./filament-best-practices.mdc).

## Best Practice: Implementazione dei Contract

> **Nota fondamentale:**
> Tutti i metodi richiesti dalle interfacce (contract) devono essere implementati come **pubblici** nella classe o trait che li dichiara, anche se la logica è delegata a un metodo privato/protetto (es. `ownsTeamTrait`).
> 
> Questo garantisce:
> - Compatibilità con il contract
> - Autoload e type hint corretti
> - Coerenza architetturale
> - Prevenzione di errori fatali in fase di runtime

### Esempio concreto: TeamContract

- Il contract `HasTeamsContract` richiede il metodo pubblico `ownsTeam(TeamContract $team): bool`.
- Il trait `HasTeams` implementa la logica in `ownsTeamTrait`, ma **deve** dichiarare anche il metodo pubblico `ownsTeam` che delega a `ownsTeamTrait`.

```php
public function ownsTeam(TeamContract $team): bool
{
    return $this->ownsTeamTrait($team);
}
```

**Regola generale:**
- Ogni volta che un contract richiede un metodo, assicurarsi che sia presente come metodo pubblico nella classe/trait.
- Delegare la logica a metodi privati/protetti se necessario, ma la firma pubblica deve sempre esistere.

**Vedi anche:**
- [Best Practices](./best-practices.mdc)
- [TeamContract](../app/Contracts/TeamContract.php)
- [BaseTeam](../app/Models/BaseTeam.php)

## Requisito strutturale: colonna owner_id in teams

> **Nota fondamentale:**
> La tabella `teams` deve avere la colonna `owner_id` (`uuid`, nullable) per garantire la compatibilità con il trait `HasTeams` e tutte le relazioni Eloquent che gestiscono la proprietà dei team.

### Motivazione
- Il trait `HasTeams` e la relazione `ownedTeams()` presuppongono che ogni team abbia un owner identificato da `owner_id`.
- Senza questa colonna, tutte le query che cercano i team di proprietà di un utente falliscono con errore SQL.
- Questa struttura è standard per tutti i pacchetti multi-team (Laravel Jetstream, Spark, ecc.) e garantisce compatibilità con i contract e i trait.

### Checklist
- [ ] La tabella `teams` ha la colonna `owner_id` (`uuid`, nullable)
- [ ] La migration è aggiornata ed eseguita
- [ ] La documentazione tecnica è aggiornata
- [ ] Tutte le relazioni Eloquent funzionano correttamente

### Esempio di migration
```php
Schema::table('teams', function (Blueprint $table) {
    $table->uuid('owner_id')->nullable()->after('id');
    // opzionale: $table->foreign('owner_id')->references('id')->on('users')->nullOnDelete();
});
```

## Best Practice migration modulari

> **Regola fondamentale:**
> Tutte le migration relative a tabelle modulari (es. `teams`, `team_user`, ecc.) devono essere create e mantenute nella cartella `database/migrations` del modulo corrispondente (es. `Modules/User/database/migrations`).

### Motivazione
- Garantisce isolamento e coerenza tra i moduli
- Evita conflitti e doppioni tra migration globali e modulari
- Facilita la manutenzione e la gestione delle dipendenze tra moduli
- Permette di attivare/disattivare moduli senza effetti collaterali

### Conseguenze di errori di path
- Migration duplicate o in conflitto
- Errori di sequenza nell'applicazione delle migration
- Difficoltà di manutenzione e debugging
- Rischio di corruzione dati o incoerenza tra ambienti

### Checklist
- [ ] Tutte le migration modulari sono nella cartella del modulo
- [ ] Nessuna migration di tabelle modulari nella cartella globale
- [ ] La documentazione tecnica è aggiornata
- [ ] I comandi artisan sono lanciati dal path corretto o con namespace modulo
>>>>>>> 5856def (.)

