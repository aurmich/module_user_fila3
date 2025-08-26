# Modulo User - Sistema di Gestione Utenti e Autenticazione

## Panoramica

Il modulo User gestisce l'autenticazione, autorizzazione e gestione degli utenti per l'applicazione Laraxot PTVX. Fornisce un sistema completo di gestione utenti con supporto per ruoli, permessi, team e tenant, integrato con Filament per l'amministrazione.

## Caratteristiche Principali

- **Gestione Utenti**: CRUD completo per utenti e profili
- **Sistema Ruoli**: Gestione ruoli e permessi con Spatie Laravel Permission
- **Gestione Team**: Supporto per team e organizzazioni
- **Multi-Tenant**: Supporto per applicazioni multi-tenant
- **Autenticazione**: Sistema di autenticazione robusto e sicuro
- **Integrazione Filament**: Interfacce amministrative complete

## Struttura del Modulo

```
Modules/User/
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── UserResource.php
│   │   │   ├── RoleResource.php
│   │   │   ├── PermissionResource.php
│   │   │   └── TeamResource.php
│   │   └── Pages/
│   │       └── Profile.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── Role.php
│   │   ├── Permission.php
│   │   ├── Team.php
│   │   └── Profile.php
│   ├── Traits/
│   │   ├── HasRoles.php
│   │   ├── HasTeams.php
│   │   └── HasTenants.php
│   └── Providers/
│       └── UserServiceProvider.php
├── config/
├── database/
├── docs/
├── lang/
├── resources/
└── tests/
```

## Componenti Principali

### User Model

Modello principale per la gestione degli utenti:

```php
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasTeams, HasTenants;

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'is_active',
        'preferred_locale',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_user')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
```

### Role e Permission Models

Gestione ruoli e permessi con Spatie:

```php
class Role extends \Spatie\Permission\Models\Role
{
    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
        'is_system',
    ];

    protected $casts = [
        'is_system' => 'boolean',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions');
    }
}

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
        'module',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }
}
```

### Team Model

Gestione team e organizzazioni:

```php
class Team extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_personal',
        'is_active',
        'owner_id',
    ];

    protected $casts = [
        'is_personal' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'team_user')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
```

## Traits e Funzionalità

### HasRoles Trait

Gestione ruoli e permessi:

```php
trait HasRoles
{
    use \Spatie\Permission\Traits\HasRoles;

    public function hasPermissionTo($permission): bool
    {
        if (is_string($permission)) {
            $permission = app(Permission::class)->findByName($permission);
        }

        return $this->hasDirectPermission($permission) ||
               $this->hasPermissionViaRole($permission);
    }

    public function hasAnyRole($roles): bool
    {
        if (is_string($roles)) {
            return $this->hasRole($roles);
        }

        if (is_array($roles)) {
            return $this->hasAnyRole($roles);
        }

        return $roles->contains($this);
    }
}
```

### HasTeams Trait

Gestione team e organizzazioni:

```php
trait HasTeams
{
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_user')
                    ->withPivot('role')
                    ->withTimestamps();
    }

    public function belongsToTeam(Team|int $team): bool
    {
        $teamId = $team instanceof Team ? $team->id : $team;
        
        return $this->teams()->where('team_id', $teamId)->exists();
    }

    public function getCurrentTeam(): ?Team
    {
        return $this->teams()->where('id', session('current_team_id'))->first();
    }
}
```

### HasTenants Trait

Supporto multi-tenant:

```php
trait HasTenants
{
    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'tenant_user')
                    ->withPivot('role')
                    ->withTimestamps();
    }

    public function scopeBelongsToTenant(Builder $query, Tenant|int $tenant): Builder
    {
        $tenantId = $tenant instanceof Tenant ? $tenant->id : $tenant;
        
        return $query->whereHas('tenants', function (Builder $query) use ($tenantId): void {
            $query->where('tenant_id', $tenantId);
        });
    }
}
```

## Configurazione

### Configurazione Base

```php
// config/auth.php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'sanctum',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \Modules\User\Models\User::class,
        ],
    ],
];
```

### Configurazione Ruoli

```php
// config/permission.php
return [
    'models' => [
        'permission' => \Modules\User\Models\Permission::class,
        'role' => \Modules\User\Models\Role::class,
    ],

    'table_names' => [
        'roles' => 'roles',
        'permissions' => 'permissions',
        'model_has_permissions' => 'model_has_permissions',
        'model_has_roles' => 'model_has_roles',
        'role_has_permissions' => 'role_has_permissions',
    ],
];
```

### Environment Variables

```env
# Autenticazione
AUTH_DRIVER=session
AUTH_PROVIDER=users
AUTH_PASSWORD_TIMEOUT=10800

# Team e Tenant
TEAM_ENABLED=true
TENANT_ENABLED=true
TENANT_DEFAULT=main

# Sicurezza
PASSWORD_TIMEOUT=10800
SESSION_LIFETIME=120
SESSION_SECURE_COOKIE=true
```

## Utilizzo

### Gestione Utenti

```php
// Creazione utente
$user = User::create([
    'name' => 'Mario Rossi',
    'email' => 'mario@example.com',
    'password' => Hash::make('password'),
]);

// Assegnazione ruoli
$user->assignRole('admin');

// Verifica permessi
if ($user->can('edit-users')) {
    // Logica per modificare utenti
}

// Verifica ruoli
if ($user->hasRole('manager')) {
    // Logica per manager
}
```

### Gestione Team

```php
// Creazione team
$team = Team::create([
    'name' => 'Team Sviluppo',
    'description' => 'Team per lo sviluppo software',
    'owner_id' => $user->id,
]);

// Aggiunta utente al team
$team->users()->attach($user->id, ['role' => 'member']);

// Verifica appartenenza
if ($user->belongsToTeam($team)) {
    // Logica per membri del team
}
```

### Gestione Permessi

```php
// Creazione permesso
$permission = Permission::create([
    'name' => 'edit-users',
    'display_name' => 'Modifica Utenti',
    'description' => 'Permette di modificare gli utenti',
    'module' => 'user',
]);

// Assegnazione permesso al ruolo
$role = Role::findByName('admin');
$role->givePermissionTo($permission);

// Verifica permesso
if ($user->hasPermissionTo('edit-users')) {
    // Logica per modificare utenti
}
```

## Integrazione Filament

### UserResource

Gestione utenti nell'interfaccia Filament:

```php
class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Gestione Utenti';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make('Informazioni Base')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),
                    Forms\Components\TextInput::make('password')
                        ->password()
                        ->required(fn (string $context): bool => $context === 'create')
                        ->minLength(8),
                ]),

            Forms\Components\Section::make('Ruoli e Permessi')
                ->schema([
                    Forms\Components\Select::make('roles')
                        ->multiple()
                        ->relationship('roles', 'display_name')
                        ->preload(),
                ]),
        ];
    }

    public static function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
```

### TeamResource

Gestione team nell'interfaccia Filament:

```php
class TeamResource extends XotBaseResource
{
    protected static ?string $model = Team::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Gestione Utenti';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),
            Forms\Components\Textarea::make('description')
                ->maxLength(65535)
                ->columnSpanFull(),
            Forms\Components\Toggle::make('is_active')
                ->required(),
        ];
    }
}
```

## Sicurezza

### Autenticazione

```php
// Middleware di autenticazione
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);
});

// Verifica autenticazione
if (auth()->check()) {
    $user = auth()->user();
    // Logica per utenti autenticati
}
```

### Autorizzazione

```php
// Verifica permessi
if (auth()->user()->can('delete-users')) {
    // Logica per eliminare utenti
}

// Verifica ruoli
if (auth()->user()->hasRole('admin')) {
    // Logica per amministratori
}

// Policy personalizzate
if (auth()->user()->can('update', $user)) {
    // Logica per aggiornare utente specifico
}
```

### Rate Limiting

```php
// Rate limiting per login
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1');

// Rate limiting per registrazione
Route::post('/register', [AuthController::class, 'register'])
    ->middleware('throttle:3,1');
```

## Testing

### Test Unitari

```php
// Test creazione utente
it('creates user with valid data', function () {
    $userData = [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
    ];

    $user = User::create($userData);

    expect($user->name)->toBe('Test User');
    expect($user->email)->toBe('test@example.com');
    expect(Hash::check('password123', $user->password))->toBeTrue();
});

// Test assegnazione ruoli
it('assigns role to user', function () {
    $user = User::factory()->create();
    $role = Role::create(['name' => 'test-role']);

    $user->assignRole($role);

    expect($user->hasRole('test-role'))->toBeTrue();
});
```

### Test Feature

```php
// Test autenticazione
it('authenticates user with valid credentials', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password123'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password123',
    ]);

    $response->assertRedirect('/dashboard');
    $this->assertAuthenticated();
});

// Test autorizzazione
it('denies access to unauthorized users', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get('/admin/users');

    $response->assertForbidden();
});
```

### Test di Copertura

```bash
# Test unitari
php artisan test Modules/User/tests/Unit

# Test feature
php artisan test Modules/User/tests/Feature

# Test Pest
./vendor/bin/pest Modules/User/tests
```

## Performance

### Ottimizzazioni

1. **Eager Loading**: Carica relazioni quando necessario
2. **Caching**: Cache per ruoli e permessi
3. **Indici Database**: Indici ottimizzati per query frequenti
4. **Lazy Loading**: Carica componenti solo quando necessario

### Query Optimization

```php
// Eager loading per evitare N+1
$users = User::with(['roles', 'permissions', 'teams'])->get();

// Query ottimizzate per ruoli
$adminUsers = User::whereHas('roles', function ($query) {
    $query->where('name', 'admin');
})->get();

// Cache per permessi
$permissions = Cache::remember('user_permissions_' . $userId, 3600, function () use ($userId) {
    return User::find($userId)->getAllPermissions();
});
```

## Monitoraggio e Logging

### Log Autenticazione

```php
// Log tentativi di login
Log::info('User login attempt', [
    'email' => $request->email,
    'ip' => $request->ip(),
    'user_agent' => $request->userAgent(),
]);

// Log cambiamenti ruoli
Log::info('User role changed', [
    'user_id' => $user->id,
    'old_roles' => $oldRoles,
    'new_roles' => $newRoles,
    'changed_by' => auth()->id(),
]);
```

### Metriche

- Numero utenti attivi
- Tentativi di login falliti
- Cambiamenti ruoli e permessi
- Performance query utenti

## Troubleshooting

### Problemi Comuni

1. **Utenti Non Autenticati**
   - Verificare middleware auth
   - Controllare configurazione session
   - Verificare database connection

2. **Permessi Non Funzionanti**
   - Controllare cache permessi
   - Verificare assegnazione ruoli
   - Controllare guard configuration

3. **Team Non Visualizzati**
   - Verificare relazioni database
   - Controllare pivot table
   - Verificare middleware team

### Debug

```php
// Debug autenticazione
config(['auth.debug' => true]);

// Debug permessi
Log::debug('User permissions', [
    'user_id' => $user->id,
    'roles' => $user->roles->pluck('name'),
    'permissions' => $user->getAllPermissions()->pluck('name'),
]);

// Verifica configurazione
dd(config('auth'), config('permission'));
```

## Integrazione con Altri Moduli

### Registrazione Modulo

```php
// Nel ServiceProvider del modulo
public function boot(): void
{
    parent::boot();
    
    // Registra policy
    Gate::policy(User::class, UserPolicy::class);
    
    // Registra middleware
    Route::pushMiddlewareToGroup('web', CheckTeamAccess::class);
}
```

### Utilizzo Cross-Module

```php
// In qualsiasi modulo
if (auth()->user()->can('manage-users')) {
    // Logica per gestire utenti
}

// Verifica team
if (auth()->user()->belongsToTeam($team)) {
    // Logica per membri del team
}
```

## Roadmap

### Funzionalità Future

- [ ] Autenticazione a due fattori
- [ ] Social login (Google, Facebook, etc.)
- [ ] Gestione sessioni avanzata
- [ ] Audit trail completo
- [ ] Integrazione LDAP/Active Directory
- [ ] Sistema di notifiche avanzato

### Miglioramenti

- [ ] Performance optimization
- [ ] Advanced caching
- [ ] Real-time updates
- [ ] Analytics avanzate
- [ ] API REST completa

## Contributi

### Sviluppo

1. Fork del repository
2. Creazione branch feature
3. Implementazione funzionalità
4. Test completi
5. Pull request con documentazione

### Standard di Codice

- PSR-12 coding standards
- PHPStan livello 9+
- Test coverage >90%
- Documentazione PHPDoc completa

## Licenza

Questo modulo è rilasciato sotto la licenza MIT. Vedi il file LICENSE per i dettagli.

## Supporto

Per supporto tecnico o domande:

- **Issues**: GitHub Issues
- **Documentazione**: Questa documentazione
- **Wiki**: Wiki del progetto
- **Chat**: Canale Slack/Teams

---

*Ultimo aggiornamento: {{ date('Y-m-d') }}*

## Risoluzione Conflitti Git

### Problemi Identificati

Durante l'aggiornamento del modulo sono stati risolti conflitti Git nei seguenti file di test:

- `tests/Pest.php` - Configurazione principale Pest ✅ RISOLTO
- `tests/Unit/UserTest.php` - Test unitari del modello User ✅ RISOLTO
- `tests/Unit/ChangeTypeCommandTest.php` - Test del comando ChangeType ✅ RISOLTO
- `tests/Unit/Models/UserTest.php` - Test specifici del modello User ✅ RISOLTO
- `tests/Unit/UserModelTest.php` - Test estesi del modello User ✅ RISOLTO
- `tests/Feature/Filament/Pages/CreateUserTest.php` - Test delle pagine Filament ✅ RISOLTO
- `tests/Feature/Filament/Actions/ChangePasswordActionTest.php` - Test delle azioni ✅ RISOLTO
- `tests/Feature/UserCommandIntegrationTest.php` - Test di integrazione comandi ✅ RISOLTO

### Soluzioni Implementate

1. **Rimozione duplicazioni**: Eliminati blocchi di codice duplicato causati da merge
2. **Consolidamento logica**: Mantenuta la logica di test più recente e completa
3. **Verifica coerenza**: Controllata la coerenza tra tutti i file di test
4. **Aggiornamento documentazione**: Documentate le modifiche e le best practices

<<<<<<< HEAD
### Prevenzione Futura
=======
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
>>>>>>> 08f361e (.)

## Aggiornamenti Recenti

### 27 Gennaio 2025
- ✅ **Riorganizzazione Documentazione**: Spostati file specifici da docs_project alle cartelle docs dei moduli
  - **File spostati in User/docs/**: 
    - `doctor-registration-widget.md` - Widget registrazione dottori
    - `doctor-registration.md` - Sistema registrazione dottori
    - `email-doctor-registration.md` - Email registrazione dottori
  - **Motivazione**: Separazione responsabilità, principio modulare, manutenibilità
  - **Regola**: docs_project solo per documentazione generale del progetto, file specifici di moduli nelle rispettive cartelle docs

## Collegamenti
<<<<<<< HEAD

## Aggiornamenti Recenti

### 27 Gennaio 2025
- ✅ **Riorganizzazione Documentazione**: Spostati file specifici da docs_project alle cartelle docs dei moduli
  - **File spostati in User/docs/**: 
    - `doctor-registration-widget.md` - Widget registrazione dottori
    - `doctor-registration.md` - Sistema registrazione dottori
    - `email-doctor-registration.md` - Email registrazione dottori
  - **Motivazione**: Separazione responsabilità, principio modulare, manutenibilità
  - **Regola**: docs_project solo per documentazione generale del progetto, file specifici di moduli nelle rispettive cartelle docs

## Collegamenti
=======
>>>>>>> 11b9b29 (.)
>>>>>>> c1a7cf4 (.)

- Utilizzare sempre `git pull --rebase` per evitare merge commits
- Verificare i conflitti prima di ogni commit
- Mantenere la struttura dei test coerente e documentata
