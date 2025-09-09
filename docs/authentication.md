<<<<<<< HEAD
<<<<<<< HEAD
# Architettura Autenticazione

## Overview
Il modulo User gestisce l'autenticazione attraverso componenti Livewire e Filament, seguendo le best practices di Laravel.

## Componenti Principali

### 1. Livewire Components
```
app/Http/Livewire/Auth/
├── Login.php      # Gestione login
└── Logout.php     # Gestione logout
```

### 2. Filament Widgets
```
app/Filament/Widgets/
└── LoginWidget.php  # Widget di login per interfaccia admin
```

## Struttura Namespace

### 1. Convenzioni
- Base namespace: `Modules\User\app`
- Livewire components: `Modules\User\app\Http\Livewire\Auth`
- Filament widgets: `Modules\User\app\Filament\Widgets`

### 2. Views
- Pattern: `{module}::filament.widgets.{type}`
- Esempio: `user::filament.widgets.login`

## Flusso Autenticazione

### 1. Login
- Form di login (Filament/Livewire)
- Validazione credenziali
- Gestione sessione
- Redirect post-login

### 2. Logout
- Invalidazione sessione
- Rigenerazione token
- Redirect alla login

## Sicurezza

### 1. Misure Implementate
- Rate limiting
- CSRF protection
- Session regeneration
- Password validation

### 2. Best Practices
- Validazione input
- Gestione errori
- Logging tentativi

## Collegamenti

- [Regole dei Namespace](../../docs/module-namespace-rules.md)
- [Struttura Views](../../docs/filament-views-structure.md)
- [Relazioni tra Moduli](../../docs/module-relationships.md)

## Checklist Implementazione

### 1. Namespace
- [ ] Namespace corretti
- [ ] PSR-4 compliance
- [ ] Autoloading verificato

### 2. Views
- [ ] Struttura corretta
- [ ] Naming consistente
- [ ] Blade templates

### 3. Sicurezza
- [ ] Rate limiting
- [ ] Session handling
- [ ] Error handling 
=======
# Autenticazione in Predict
=======
# Architettura Autenticazione
>>>>>>> 9d96960 (.)

## Overview
Il modulo User gestisce l'autenticazione attraverso componenti Livewire e Filament, seguendo le best practices di Laravel.

## Componenti Principali

### 1. Livewire Components
```
app/Http/Livewire/Auth/
├── Login.php      # Gestione login
└── Logout.php     # Gestione logout
```

### 2. Filament Widgets
```
app/Filament/Widgets/
└── LoginWidget.php  # Widget di login per interfaccia admin
```

## Struttura Namespace

### 1. Convenzioni
- Base namespace: `Modules\User\app`
- Livewire components: `Modules\User\app\Http\Livewire\Auth`
- Filament widgets: `Modules\User\app\Filament\Widgets`

### 2. Views
- Pattern: `{module}::filament.widgets.{type}`
- Esempio: `user::filament.widgets.login`

## Flusso Autenticazione

### 1. Login
- Form di login (Filament/Livewire)
- Validazione credenziali
- Gestione sessione
- Redirect post-login

### 2. Logout
- Invalidazione sessione
- Rigenerazione token
- Redirect alla login

## Sicurezza

### 1. Misure Implementate
- Rate limiting
- CSRF protection
- Session regeneration
- Password validation

### 2. Best Practices
- Validazione input
- Gestione errori
- Logging tentativi

## Collegamenti

- [Regole dei Namespace](../../docs/module-namespace-rules.md)
- [Struttura Views](../../docs/filament-views-structure.md)
- [Relazioni tra Moduli](../../docs/module-relationships.md)

## Checklist Implementazione

### 1. Namespace
- [ ] Namespace corretti
- [ ] PSR-4 compliance
- [ ] Autoloading verificato

### 2. Views
- [ ] Struttura corretta
- [ ] Naming consistente
- [ ] Blade templates

<<<<<<< HEAD
### Problemi Comuni

1. **Errori di Redirect**
   - Verificare la configurazione delle route
   - Controllare i middleware
   - Verificare la configurazione di Socialite

2. **Errori di Autenticazione**
   - Controllare le credenziali nel database
   - Verificare la configurazione del guard
   - Controllare i log per errori specifici

3. **Problemi di Sessione**
   - Verificare la configurazione della sessione
   - Controllare il middleware web
   - Verificare la configurazione del cookie 

## Implementazioni Specifiche

### Logout con Volt e Folio
Per dettagli sull'implementazione del logout utilizzando Volt e Folio, consultare la [documentazione del modulo User](../laravel/Modules/User/project_docs/VOLT_FOLIO_LOGOUT_ERROR.md). 
>>>>>>> 079c9da (.)
=======
### 3. Sicurezza
- [ ] Rate limiting
- [ ] Session handling
- [ ] Error handling 
>>>>>>> 9d96960 (.)
