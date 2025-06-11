# Filament nel Modulo User

## Documentazione

1. [Errori Comuni](filament-errors.md) - Documentazione degli errori comuni e delle loro soluzioni
2. [Struttura delle Risorse](structure.md#filament-resources) - Come sono strutturate le risorse Filament
3. [Best Practices](filament-errors.md#best-practices) - Best practices per lo sviluppo con Filament

## Risorse

- UserResource
  - TeamsRelationManager
  - RolesRelationManager
  - PermissionsRelationManager
- TeamResource
- RoleResource
- PermissionResource

## Widgets

- LoginWidget
- RecentLoginsWidget
- UserStatsWidget

## RelationManager

### TeamsRelationManager
- Gestisce la relazione many-to-many tra User e Team
- Implementa le operazioni CRUD per i team associati a un utente
- Supporta attach/detach di team esistenti

### RolesRelationManager
- Gestisce la relazione many-to-many tra User e Role
- Implementa le operazioni CRUD per i ruoli associati a un utente
- Supporta attach/detach di ruoli esistenti

### PermissionsRelationManager
- Gestisce la relazione many-to-many tra User e Permission
- Implementa le operazioni CRUD per i permessi associati a un utente
- Supporta attach/detach di permessi esistenti

## Regola fondamentale per RelationManager custom

Tutti i RelationManager custom del modulo User (es. TeamsRelationManager, RolesRelationManager, PermissionsRelationManager) DEVONO estendere:

- `Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager`

e NON `Filament\Resources\RelationManagers\RelationManager`.

### Motivazione
- Centralizza logica, permessi, traduzioni e comportamenti comuni
- Garantisce coerenza tra moduli e compatibilità con le estensioni Xot
- Facilita override e personalizzazione senza duplicazione di codice

### Pattern corretto
```php
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class TeamsRelationManager extends XotBaseRelationManager
{
    // ...
}
```

### Anti-pattern
- ❌ Estendere direttamente RelationManager Filament
- ❌ Usare metodi protected invece di public per override richiesti
- ❌ Usare label hardcoded invece dei file di traduzione

### Collegamenti
- [XotBaseRelationManager – Linee guida](../../../Xot/docs/filament/relation_manager_guidelines.md)

## Note Importanti

- Seguire sempre le best practices documentate
- Consultare la documentazione degli errori prima di fare modifiche
- Mantenere aggiornata la documentazione con nuovi errori o soluzioni
- Verificare la compatibilità con la versione di Filament in uso

## Versione di Filament

- Versione supportata: 3.x
- Breaking changes: [Documentazione ufficiale](https://filamentphp.com/docs/3.x/panels/upgrade-guide)
- Compatibilità: Laravel 10.x/11.x 