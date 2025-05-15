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

# Modulo User

## Introduzione
Il modulo User gestisce l'autenticazione, l'autorizzazione e i profili utente del sistema. Fornisce un sistema completo per la gestione degli utenti, integrando OAuth2 con Passport, social login con Socialite, e un sistema avanzato di ruoli e permessi.

## Indice

### Autenticazione e Autorizzazione
- [Passport Integration](./passport.md) - Integrazione OAuth2
- [Socialite Integration](./socialite.txt) - Login social
- [Two Factor Authentication](./two_factor.txt) - Autenticazione a due fattori
- [Custom Login](./custom_login.md) - Implementazione login personalizzata
<<<<<<< Updated upstream
<<<<<<< HEAD
- [Volt Folio Logout](./VOLT_FOLIO_LOGOUT.md) - Implementazione logout con Volt e Folio
- [Volt Folio Auth Implementation](./VOLT_FOLIO_AUTH_IMPLEMENTATION.md) - Implementazione completa autenticazione con Volt e Folio
- [Analisi Logout Blade](./LOGOUT_BLADE_ANALYSIS.md) - Analisi e miglioramenti del file logout.blade.php
- [Volt Folio Logout](./VOLT_FOLIO_LOGOUT.md) - Implementazione logout con Volt e Folio
- [Volt Folio Auth Implementation](./VOLT_FOLIO_AUTH_IMPLEMENTATION.md) - Implementazione completa autenticazione con Volt e Folio
- [Analisi Logout Blade](./LOGOUT_BLADE_ANALYSIS.md) - Analisi e miglioramenti del file logout.blade.php
=======
>>>>>>> 73101fd (.)
=======
- [Volt Folio Logout](./VOLT_FOLIO_LOGOUT.md) - Implementazione logout con Volt e Folio
- [Volt Folio Auth Implementation](./VOLT_FOLIO_AUTH_IMPLEMENTATION.md) - Implementazione completa autenticazione con Volt e Folio
- [Analisi Logout Blade](./LOGOUT_BLADE_ANALYSIS.md) - Analisi e miglioramenti del file logout.blade.php
>>>>>>> Stashed changes

### Modelli e Profili
- [User Profile Models](./user_profile_models.md) - Modelli profilo utente
- [User Roles](./user_roles.md) - Sistema ruoli
- [User Permissions](./user_permissions.md) - Sistema permessi

### Filament e UI
- [Filament Best Practices](./FILAMENT_BEST-PRACTICES.md) - Best practices Filament
- [Login Widget](./login_widget.md) - Widget login personalizzato
- [User Interface](./user_interface.md) - Interfaccia utente

### Best Practices e Convenzioni
- [Best Practices](./BEST-PRACTICES.md) - Linee guida generali
<<<<<<< Updated upstream
<<<<<<< HEAD
- [Convenzioni Path Actions](./ACTIONS_PATH_CONVENTION.md) - Convenzioni per i percorsi delle Actions
- [Convenzioni Path](./PATH_CONVENTIONS.md) - Convenzioni generali per i percorsi nei moduli
- [Checklist Struttura Directory](./DIRECTORY_STRUCTURE_CHECKLIST.md) - Checklist per la struttura delle directory
=======
>>>>>>> 73101fd (.)
=======
- [Convenzioni Path Actions](./ACTIONS_PATH_CONVENTION.md) - Convenzioni per i percorsi delle Actions
- [Convenzioni Path](./PATH_CONVENTIONS.md) - Convenzioni generali per i percorsi nei moduli
- [Checklist Struttura Directory](./DIRECTORY_STRUCTURE_CHECKLIST.md) - Checklist per la struttura delle directory
>>>>>>> Stashed changes

### Testing e Quality Assurance
- [Testing](./testing.md) - Testing e quality assurance
- [Security](./security.md) - Sicurezza e hardening

### Documentazione Tecnica
- [Roadmap](./roadmap.md) - Piano di sviluppo futuro
- [Bottlenecks](./bottlenecks.md) - Analisi performance e ottimizzazioni
- [Architecture](./architecture.md) - Architettura del modulo

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
- [Architettura del Modulo](./structure.md)
- [Configurazione Passport](./passport.md)
- [Integrazione Socialite](./socialite.txt)
- [Gestione Profili](./user_profile_models.md)
- [Best Practices Filament](./FILAMENT_BEST_PRACTICES.md)
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)

### Integrazioni
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con Lang](../Lang/docs/README.md)
- [Integrazione con Notify](../Notify/docs/README.md)

### Autenticazione
- [Login Personalizzato](./custom_login.md)
- [Autenticazione a Due Fattori](./two_factor.txt)
- [Single Sign-On](./sso.txt)
- [Gestione Password](./password.md)

### Autorizzazione
- [Permessi Spatie](./spatie_permissions.txt)
- [Gestione Ruoli](./repositories.md)
- [Team e Collaborazioni](./teams.md)

## Vedi Anche

- [Modulo Xot](../Xot/docs/README.md) - Modulo base e linee guida generali
- [Modulo Lang](../Lang/docs/README.md) - Gestione traduzioni
- [Modulo Notify](../Notify/docs/README.md) - Sistema di notifiche
- [Modulo Activity](../Activity/docs/README.md) - Logging e audit trail
- [Convenzioni di Naming](../../../docs/standards/file_naming_conventions.md) - Standard per la nomenclatura dei file

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

## Modifiche Recenti

### Risoluzione Conflitti
- Risolti i conflitti nel modello BaseUser
- Aggiornate le traduzioni in italiano
- Migliorata la documentazione
- Aggiunto supporto per il polimorfismo dei modelli utente

### Miglioramenti
- Aggiunta la documentazione strutturata per le traduzioni
- Migliorata la gestione dei messaggi di errore
- Ottimizzata la struttura dei file di traduzione
- Aggiunto supporto per le traduzioni strutturate nei form

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

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
## Gestione delle Traduzioni

Il modulo User utilizza un sistema di traduzioni multilingua per supportare l'interfaccia utente in diverse lingue. Le traduzioni sono organizzate in file separati per ogni lingua nella cartella `lang/`.

### Struttura delle Traduzioni

- `auth.php`: Messaggi relativi all'autenticazione
- `registration.php`: Messaggi relativi alla registrazione
- `change_password.php`: Messaggi relativi al cambio password
- `password.php`: Messaggi relativi alla gestione delle password
- `user.php`: Messaggi relativi alla gestione degli utenti

### Best Practices per le Traduzioni

1. Mantenere la coerenza nella nomenclatura delle chiavi
2. Evitare duplicazioni di chiavi
3. Utilizzare chiavi descrittive e significative
4. Tradurre tutte le chiavi in tutte le lingue supportate
5. Mantenere la struttura gerarchica delle traduzioni

### Chiavi da Tradurre

Alcune chiavi nei file di traduzione sono ancora in inglese e necessitano di traduzione. Vedere il file `baseuser_conflicts.md` per un elenco dettagliato delle chiavi da tradurre.

### Aggiornamento delle Traduzioni

Per aggiungere o aggiornare le traduzioni:

1. Identificare il file di traduzione appropriato
2. Aggiungere o aggiornare le chiavi di traduzione
3. Mantenere la struttura gerarchica esistente
4. Verificare che tutte le chiavi siano tradotte in tutte le lingue supportate

## Integrazione MCP Server
Per installare e utilizzare i server MCP in modo condiviso, segui la guida:
[Installazione MCP Server](../AI/docs/MCP_INSTALLAZIONE_SERVER.md)
<<<<<<< Updated upstream

=======
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
