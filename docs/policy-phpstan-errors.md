# Errori PHPStan nelle Policy del Modulo User

## Problema Identificato (2025-01-06)

**ERRORE CRITICO**: Tutte le policy del modulo User presentano errori PHPStan relativi al metodo `hasPermissionTo()` non definito nel contratto `UserContract`.

### Descrizione Tecnica
Le policy chiamano `$user->hasPermissionTo()` su istanze di `Modules\Xot\Contracts\UserContract`, ma questo metodo non è definito nell'interfaccia.

**Errore PHPStan**: `Call to an undefined method Modules\Xot\Contracts\UserContract::hasPermissionTo()`

### File Coinvolti
Tutte le policy del modulo User in `app/Models/Policies/`:
- `ExtraPolicy.php`
- `FeaturePolicy.php`
- `MembershipPolicy.php`
- `ModelHasPermissionPolicy.php`
- `ModelHasRolePolicy.php`
- `NotificationPolicy.php`
- `OauthAccessTokenPolicy.php`
- `OauthAuthCodePolicy.php`
- `OauthClientPolicy.php`
- `OauthPersonalAccessClientPolicy.php`
- `OauthRefreshTokenPolicy.php`
- `PasswordResetPolicy.php`
- `PermissionRolePolicy.php`
- `PermissionUserPolicy.php`
- `ProfileTeamPolicy.php`
- `RoleHasPermissionPolicy.php`
- `SocialProviderPolicy.php`
- `SocialiteUserPolicy.php`
- `TeamInvitationPolicy.php`
- `TeamPermissionPolicy.php`
- `TeamUserPolicy.php`
- `TenantPolicy.php`
- `TenantUserPolicy.php`

### Esempio del Problema
```php
// In ogni policy, linee multiple come:
public function viewAny(UserContract $user): bool
{
    return $user->hasPermissionTo('viewAny extra'); // <- ERRORE: metodo non definito
}
```

## Possibili Soluzioni

### Opzione 1: Aggiungere Metodo al Contratto
Aggiungere il metodo `hasPermissionTo()` al `UserContract`:

```php
// In Modules/Xot/app/Contracts/UserContract.php
interface UserContract 
{
    // ... altri metodi
    
    /**
     * Check if user has permission to perform action.
     *
     * @param string $permission
     * @return bool
     */
    public function hasPermissionTo(string $permission): bool;
}
```

### Opzione 2: Utilizzare Interfaccia Diversa
Utilizzare un'interfaccia che già definisce `hasPermissionTo()` (ad esempio da Spatie Permission):

```php
use Spatie\Permission\Contracts\Permission;

public function viewAny(UserContract $user): bool
{
    // Utilizzare un'altra interfaccia o cast
    if ($user instanceof \Spatie\Permission\Models\HasPermissions) {
        return $user->hasPermissionTo('viewAny extra');
    }
    return false;
}
```

### Opzione 3: Trait nel Contratto
Definire il comportamento tramite trait che implementa il metodo.

## Impatto
- **Blocco PHPStan**: 350+ errori nel modulo User
- **Rischio Runtime**: Possibili errori se il metodo non è implementato
- **Manutenzione**: Difficoltà nel mantenere il codice

## Priorità
**ALTA** - Questo errore blocca l'analisi statica del codice e potrebbe causare errori runtime.

## Collegamenti
- [Documentazione Root - Errori PHPStan](../../../project_docs/troubleshooting/phpstan-errors.md)
- [Contratti Xot](../../Xot/project_docs/contracts.md)
- [Spatie Permission Documentation](https://spatie.be/project_docs/laravel-permission)

*Ultimo aggiornamento: 2025-01-06*

---

## Aggiornamento 2025-09-03: Correzioni sintattiche e ritorni boolean nelle Policy

### Problemi riscontrati
- Errori PHP fatali per EOF inatteso in più Policy (`DeviceProfilePolicy`, `ModelHasPermissionPolicy`, `TeamPermissionPolicy`).
- Metodi `view`, `update`, `delete`, `restore`, `forceDelete` privi di `return` esplicito (quindi non validi per livello 10).

### Intervento
1. Chiusura corretta delle classi con `}` dove mancava (EOF inatteso).
2. Aggiunta dei `use` mancanti per `UserContract` e relativi Model (`ModelHasPermission`, `TeamPermission`).
3. Ritorni boolean espliciti coerenti con la business logic esistente:
   - `viewAny`: `hasPermissionTo('<entity>.view.any')`
   - `view`: ruolo `super-admin` o appartenenza a team quando applicabile
   - `update|delete|restore|forceDelete`: ruolo `super-admin`

### Note di design
- Manteniamo l'uso di `UserContract` per disaccoppiare le Policy dall'implementazione utente.
- Per verifica team: preferenza per query `teams()->whereKey(...)->exists()` per evitare accessi a proprietà non caricate.

### Impatto
- Sblocco dell'analisi PHPStan a livello 10 per il modulo User sulle Policy.
- Nessun cambiamento funzionale involontario: la logica esistente è stata resa esplicita e tipizzata.

### File toccati
- `Modules/User/app/Models/Policies/DeviceProfilePolicy.php`
- `Modules/User/app/Models/Policies/ModelHasPermissionPolicy.php`
- `Modules/User/app/Models/Policies/TeamPermissionPolicy.php`
- `Modules/User/app/Models/Policies/ModelHasRolePolicy.php`
- `Modules/User/app/Models/Policies/OauthAuthCodePolicy.php`
- `Modules/User/app/Models/Policies/OauthPersonalAccessClientPolicy.php`
- `Modules/User/app/Models/Policies/OauthRefreshTokenPolicy.php`
- `Modules/User/app/Models/Policies/PermissionRolePolicy.php`

*Ultimo aggiornamento: 2025-09-03*
