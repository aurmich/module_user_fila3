# Modulo User

## Introduzione
Il modulo User gestisce l'autenticazione, l'autorizzazione e i profili utente del sistema. Fornisce un sistema completo per la gestione degli utenti, integrando OAuth2 con Passport, social login con Socialite, e un sistema avanzato di ruoli e permessi.

## Indice

### Autenticazione e Autorizzazione
- [Passport Integration](passport.md) - Integrazione OAuth2
- [Socialite Integration](socialite.txt) - Login social
- [Two Factor Authentication](two_factor.txt) - Autenticazione a due fattori
- [Custom Login](custom_login.md) - Implementazione login personalizzata

### Modelli e Profili
- [User Profile Models](user_profile_models.md) - Modelli profilo utente
- [User Roles](user_roles.md) - Sistema ruoli
- [User Permissions](user_permissions.md) - Sistema permessi

### Filament e UI
- [Filament Best Practices](FILAMENT_BEST-PRACTICES.md) - Best practices Filament
- [Login Widget](login_widget.md) - Widget login personalizzato
- [User Interface](user_interface.md) - Interfaccia utente

### Best Practices e Convenzioni
- [Best Practices](BEST-PRACTICES.md) - Linee guida generali
- [Testing](testing.md) - Testing e quality assurance
- [Security](security.md) - Sicurezza e hardening

### Documentazione Tecnica
- [Roadmap](roadmap.md) - Piano di sviluppo futuro
- [Bottlenecks](bottlenecks.md) - Analisi performance e ottimizzazioni
- [Architecture](architecture.md) - Architettura del modulo

### Link Esterni
- [Laravel Authentication](https://laravel.com/docs/12.x/authentication)
- [Laravel Authorization](https://laravel.com/docs/12.x/authorization)
- [Filament Documentation](https://filamentphp.com/docs)

## Note Importanti

### Estensione Classi
- Non estendere mai direttamente le classi di Filament
- Utilizzare sempre le classi base di Xot con prefisso XotBase
- Seguire le convenzioni di naming del modulo

### Trait e Service Provider
- I trait per i provider devono essere in `Providers/Traits/`
- Seguire la struttura esistente per nuovi trait
- Documentare sempre l'uso dei trait

### Traduzioni
- Utilizzare il LangServiceProvider per le traduzioni
- Non usare ->label() direttamente
- Struttura corretta: 'source' => ['label'=>'Sorgente']

## Esempi

### Service Provider
```php
use Xot\XotBaseServiceProvider;

class UserServiceProvider extends XotBaseServiceProvider
{
    // Implementazione
}
```

### Widget Base
```php
use Xot\Filament\Widgets\XotBaseWidget;

class LoginWidget extends XotBaseWidget
{
    // Implementazione
}
```

## Dipendenze
- Laravel Framework
- Filament
- Livewire
- Volt
- Folio

## Utilizzo
Il modulo User fornisce funzionalità di autenticazione e autorizzazione attraverso:
- OAuth2 con Passport
- Social login con Socialite
- Sistema ruoli e permessi
- Profili utente personalizzabili
- Interfaccia Filament

## Panoramica
Il modulo User gestisce l'autenticazione, l'autorizzazione e la gestione degli utenti nell'applicazione. È strettamente integrato con altri moduli come Xot, Lang, e Notify.

## Collegamenti Principali

### Documentazione Core
- [Architettura del Modulo](structure.md)
- [Configurazione Passport](passport.md)
- [Integrazione Socialite](socialite.txt)
- [Gestione Profili](user_profile_models.md)
- [Best Practices Filament](FILAMENT_BEST_PRACTICES.md)
- [Roadmap](roadmap.md)
- [Bottlenecks](bottlenecks.md)

### Integrazioni
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con Lang](../Lang/docs/README.md)
- [Integrazione con Notify](../Notify/docs/README.md)

### Autenticazione
- [Login Personalizzato](custom_login.md)
- [Autenticazione a Due Fattori](two_factor.txt)
- [Single Sign-On](sso.txt)
- [Gestione Password](password.md)

### Autorizzazione
- [Permessi Spatie](spatie_permissions.txt)
- [Gestione Ruoli](repositories.md)
- [Team e Collaborazioni](teams.md)

### Profili e GDPR
- [Modelli Profilo](user_profile_models.md)
- [Separazione Profili](user_profile_separation.md)
- [Conformità GDPR](gdpr.txt)

### UI/UX
- [Metriche Dashboard](metrics-dashboard.md)
- [Conflitti JS](js_conflicts.md)
- [Best Practices Tailwind](tailwind.txt)

### Sviluppo
- [Convenzioni Namespace](namespace-conventions.md)
- [Struttura Repository](repos.txt)
- [Analisi Performance](BOTTLENECKS.md)

### Testing e Qualità
- [PHPStan Fixes](phpstan_fixes.md)
- [PHPStan Level 9](PHPSTAN_LEVEL9_FIXES.md)
- [PHPStan Level 10](PHPSTAN_LEVEL10_FIXES.md)

## Struttura del Modulo

```
Modules/User/
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
│   │   │   │   ├── RegisterWidget.php
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

## Dipendenze Principali

### Moduli
- **Xot**: Fornisce le classi base e l'infrastruttura core
- **Lang**: Gestione delle traduzioni
- **Notify**: Sistema di notifiche
- **UI**: Componenti di interfaccia utente

### Pacchetti
- Laravel Passport
- Laravel Socialite
- Spatie Permission
- Filament

## Best Practices

### 1. Estensione delle Classi
```php
// ❌ NON FARE QUESTO
use Filament\Widgets\Widget;
class LoginForm extends Widget { ... }

// ✅ FARE QUESTO
use Modules\Xot\Filament\Widgets\XotBaseWidget;
class LoginWidget extends XotBaseWidget { ... }
```

### 2. Gestione delle Traduzioni
```php
// ❌ NON FARE QUESTO
->label('Sorgente')

// ✅ FARE QUESTO
->label(['label' => 'Sorgente'])
```

### 3. Configurazione dei Provider
```php
// In Modules/User/app/Providers/UserServiceProvider.php
use Modules\User\Providers\Traits\HasPassportConfiguration;

class UserServiceProvider extends XotBaseServiceProvider
{
    use HasPassportConfiguration;

    public function boot(): void
    {
        $this->configurePassport();
    }
}
```

## Roadmap

### Prossime Feature
1. Miglioramento della gestione dei token OAuth
2. Integrazione con nuovi provider social
3. Ottimizzazione delle performance

### Miglioramenti Pianificati
1. Refactoring del sistema di autenticazione
2. Miglioramento della gestione dei profili
3. Ottimizzazione delle query

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Conflitti di autenticazione
2. Problemi di performance
3. Errori di configurazione

### Soluzioni
1. Verifica la configurazione
2. Controlla i log
3. Consulta la documentazione

## Riferimenti

### Documentazione
- [Laravel Passport](https://laravel.com/docs/12.x/passport)
- [Laravel Socialite](https://laravel.com/docs/12.x/socialite)
- [Spatie Permission](https://spatie.be/docs/laravel-permission/v6/installation-laravel)
- [Filament](https://filamentphp.com/docs)

### Collegamenti Interni
- [Xot Base Classes](../Xot/docs/base-classes.md)
- [Lang Integration](../Lang/docs/lang-link.md)
- [Notify Setup](../Notify/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Supporto OAuth2
- Integrazione Socialite
- Sistema di autorizzazione

#### Changed
- Miglioramento performance
- Ottimizzazione query
- Refactoring codice

#### Fixed
- Bug autenticazione
- Problemi di configurazione
- Errori di traduzione 