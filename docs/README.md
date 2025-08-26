# Modulo User - Gestione Utenti e Autenticazione

## Panoramica

Il modulo User gestisce l'autenticazione, autorizzazione e gestione utenti per l'ecosistema PTVX Fila3 Mono, implementando i principi DRY, KISS, SOLID e robustezza.

## 🎯 Principi Fondamentali

### DRY (Don't Repeat Yourself)
- **Centralizzazione**: Sistema di autenticazione unificato
- **Riusabilità**: Componenti e trait condivisi
- **Manutenibilità**: Gestione centralizzata dei permessi

### KISS (Keep It Simple, Stupid)
- **Struttura lineare**: Organizzazione intuitiva
- **Naming coerente**: Convenzioni uniformi
- **Navigazione semplice**: Massimo 3 livelli

### SOLID
- **Single Responsibility**: Ogni componente ha uno scopo specifico
- **Open/Closed**: Estendibile senza modifiche
- **Liskov Substitution**: Sottoclassi sostituibili
- **Interface Segregation**: Interfacce specifiche
- **Dependency Inversion**: Dipendenze da astrazioni

## 🏗️ Componenti Core

### Autenticazione
- [**Sistema Autenticazione**](authentication-system.md) - Login, logout e gestione sessioni
- [**Sicurezza**](security.md) - Password, 2FA e protezioni
- [**Profili Utente**](user-profiles.md) - Gestione dati personali

### Autorizzazione
- [**Sistema Autorizzazione**](authorization.md) - Permessi e ruoli
- [**Multi-tenancy**](multi-tenancy.md) - Gestione tenant multipli
- [**Gestione Team**](team-management.md) - Organizzazione gruppi

### Configurazione
- [**Configurazione**](configuration.md) - Impostazioni e personalizzazioni
- [**Troubleshooting**](troubleshooting.md) - Risoluzione problemi comuni

## 📚 Documentazione

### Guide
- [**Guide**](guides/) - Tutorial e esempi pratici
- [**Esempi**](examples/) - Implementazioni di riferimento
- [**Riferimento**](reference/) - API e metodi

### Testing
- [**Testing**](testing.md) - Strategie e strumenti di test

## 🚀 Quick Start

### 1. Autenticazione Base
```php
use Modules\User\Models\User;

// Creazione utente
$user = User::create([
    'name' => 'Mario Rossi',
    'email' => 'mario@example.com',
    'password' => Hash::make('password123'),
]);

// Autenticazione
Auth::attempt(['email' => 'mario@example.com', 'password' => 'password123']);
```

### 2. Gestione Permessi
```php
// Assegnazione ruolo
$user->assignRole('admin');

// Verifica permesso
if ($user->can('edit-users')) {
    // Azione consentita
}
```

### 3. Multi-tenancy
```php
// Impostazione tenant corrente
$user->setCurrentTenant($tenant);

// Verifica appartenenza
if ($user->belongsToTenant($tenant)) {
    // Utente appartiene al tenant
}
```

## 🔗 Collegamenti

- [**Documentazione Principale**](../../../docs/README.md)
- [**Modulo Xot**](../Xot/docs/README.md) - Fondamento architetturale
- [**Best Practices**](../../../docs/best-practices/)

## 📊 Metriche Qualità

- **PHPStan**: Livello 10 obbligatorio
- **PSR-12**: Conformità completa
- **Test Coverage**: Minimo 90%
- **Sicurezza**: Audit periodici obbligatori

---

*Ultimo aggiornamento: giugno 2025*
