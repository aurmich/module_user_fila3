# Roadmap Modulo User

## Panoramica
Questo documento descrive la roadmap di sviluppo del modulo User, con percentuali di completamento e dettagli sui passi da compiere.

## Stato Attuale
- **Completamento Generale**: 82%
- **Ultimo Aggiornamento**: 30 Aprile 2024
- **Priorità Attuale**: Implementazione 2FA e miglioramento social auth

### Autenticazione [92%]
- [✓] Login Base [100%](roadmap/login.md) - Completamente implementato
- [✓] Registrazione [98%](roadmap/registration.md) - Ottimizzato con validazione
- [✓] Reset Password [95%](roadmap/password-reset.md) - Funzionale con notifiche
- [-] 2FA [75%](roadmap/2fa.md) - In fase di implementazione

### Autorizzazione [85%]
- [✓] Ruoli [100%](roadmap/roles.md)
- [✓] Permessi [95%](roadmap/permissions.md)
- [-] Policies [75%](roadmap/policies.md)
- [-] Gates [70%](roadmap/gates.md)

### Profilo Utente [75%]
- [✓] Dati Base [90%](roadmap/profile-base.md)
- [-] Avatar [70%](roadmap/avatar.md)
- [-] Preferenze [65%](roadmap/preferences.md)
- [-] Notifiche [75%](roadmap/notifications.md)

### Social Auth [68%]
- [✓] Google [90%](roadmap/google-auth.md) - Integrazione completa con OAuth 2.0
- [-] Facebook [65%](roadmap/facebook-auth.md) - Implementazione base completata
- [-] Twitter [50%](roadmap/twitter-auth.md) - Iniziata integrazione API v2

### API [70%]
- [✓] Autenticazione [90%](roadmap/api-auth.md)
- [-] Endpoints [65%](roadmap/api-endpoints.md)
- [-] Documentazione [55%](roadmap/api-docs.md)

### Testing [75%]
- [✓] Unit Tests [85%](roadmap/unit-tests.md)
- [-] Feature Tests [70%](roadmap/feature-tests.md)
- [-] Integration Tests [70%](roadmap/integration-tests.md)

## Prossimi Passi

### Q2 2024
1. Completare 2FA [75% → 95%]
2. Migliorare social auth [68% → 85%]
3. Espandere API [70% → 85%]

### Q3 2024
1. Ottimizzare profilo utente [75% → 90%]
2. Completare testing [75% → 90%]
3. Migliorare documentazione API [55% → 80%]

### Q4 2024
1. Rilascio versione 2.0
2. Integrazione con Folio + Volt
3. Miglioramento UX/UI

## Collegamenti Bidirezionali

### Collegamenti ad Altri Moduli
- [Roadmap Modulo Xot](../../Xot/docs/roadmap.md) - Modulo base
- [Architettura Folio + Volt](../../Xot/docs/FOLIO_VOLT_ARCHITECTURE.md) - Integrazione Folio e Volt
- [Struttura dei Moduli](../../Xot/docs/MODULE_STRUCTURE.md) - Convenzioni di naming e struttura

### Collegamenti Interni
- [Documentazione Autenticazione](./authentication.md) - Guida all'autenticazione
- [Documentazione API](./api.md) - Guida alle API
- [Integrazione Social](./social-auth.md) - Guida all'integrazione social
2. Implementazione SSO
3. Nuove integrazioni social

## Note
- Priorità alta: 2FA e Testing
- Focus su sicurezza
- Mantenere compatibilità con OAuth2
