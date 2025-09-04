# LoginWidget Translation Audit - 2025-01-06

## Obiettivo
Audit completo delle traduzioni utilizzate nel `LoginWidget` e creazione delle traduzioni mancanti per garantire il corretto funzionamento multilingue.

## Chiavi di traduzione utilizzate

```php
__('user::messages.credentials_incorrect')
__('user::messages.login_success')
__('user::messages.login_error')
__('user::messages.validation_error')
```

## Stato pre-audit
- File `messages.php` assente in it/en/de
- Altri file (`auth.php` ecc.) presenti ma non coerenti con le chiavi usate dal widget

## Azioni intraprese

### 1) Creazione file messages.php
- `Modules/User/lang/it/messages.php`
- `Modules/User/lang/en/messages.php`
- `Modules/User/lang/de/messages.php`

Struttura minima garantita:
```php
return [
    'credentials_incorrect' => 'Le credenziali inserite non sono corrette.',
    'login_success' => 'Accesso effettuato con successo.',
    'login_error' => 'Si è verificato un errore durante l\'accesso. Riprova più tardi.',
    'validation_error' => 'Errore di validazione.',
];
```

## Best practices adottate
- Namespace separati: `user::auth.*` (generico), `user::messages.*` (messaggi widget)
- Coerenza multi-lingua (stessa struttura in it/en/de)
- Nessuna stringa hardcoded nel codice PHP

## Verifiche
- Tinker: risoluzione chiavi ok per it/en/de
- LoginWidget: notifiche e validation message corretti in tutte le lingue

## Collegamenti
- [Widget Translation Rules](widget-translation-rules.md)
- [Root Translation Guidelines](../../../../project_docs/translation-standards.md)

Ultimo aggiornamento: 2025-01-06



