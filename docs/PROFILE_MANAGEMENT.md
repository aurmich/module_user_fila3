# Gestione Profilo Utente

## Perché questo modulo?
Il modulo di gestione del profilo utente fornisce funzionalità essenziali per permettere agli utenti di gestire i propri dati personali e le impostazioni dell'account in modo sicuro e intuitivo.

## Funzionalità

### Eliminazione Account
- Implementata come azione dedicata (`DeleteUserAction`)
- Richiede conferma password per sicurezza
- Gestisce la pulizia delle risorse associate
- Implementa logging e notifiche appropriate

#### Componenti
1. `DeleteUserAction`: Gestisce la logica di business
   - Verifica la password
   - Esegue l'eliminazione
   - Gestisce gli errori
   - Restituisce feedback appropriati

2. `DeleteAccount` (Livewire Component):
   - Gestisce l'interfaccia utente
   - Comunica con l'azione
   - Gestisce il feedback all'utente

#### Flusso di Eliminazione
1. L'utente richiede l'eliminazione dell'account
2. Viene richiesta la password di conferma
3. La password viene verificata
4. Se corretta, l'account viene eliminato
5. L'utente viene disconnesso e reindirizzato

#### Best Practices
1. Separazione delle responsabilità:
   - Logica di business nelle Actions
   - Interfaccia utente nei Components
   - Traduzioni nei file di lingua

2. Sicurezza:
   - Verifica della password
   - Gestione delle sessioni
   - Pulizia dei dati

3. UX:
   - Feedback chiari
   - Conferme appropriate
   - Gestione degli errori

## Collegamenti
- [Documentazione Azioni](./actions/README.md)
- [Documentazione Componenti](./components/README.md)
- [Gestione Sicurezza](../docs/SECURITY.md) 
