# Popolamento Database - Modulo User

## Panoramica
Come popolare il database del modulo User con factories e seeders per sviluppo e test.

## Factories principali

### UserFactory
```php
\Modules\User\Models\User::factory()->create();
\Modules\User\Models\User::factory()->count(100)->create();
```
Campi chiave: name, email (unique), password (hash), email_verified_at, type, is_otp.

### RoleFactory / PermissionFactory
```php
\Modules\User\Models\Role::factory()->create(['name' => 'admin']);
\Modules\User\Models\Permission::factory()->create(['guard_name' => 'web']);
```

### TeamFactory / TenantFactory
```php
\Modules\User\Models\Team::factory()->create();
\Modules\User\Models\Tenant::factory()->create(['domain' => 'example.com']);
```

## Seeders

### UserDatabaseSeeder
```bash
php artisan db:seed --class="Modules\\User\\Database\\Seeders\\UserDatabaseSeeder"
```
Sequenza tipica: RolesSeeder → PermissionsSeeder → UserSeeder → UserMassSeeder.

## Tinker (quick start)
```php
// Utenti con profilo
\Modules\User\Models\User::factory()->count(50)
    ->has(\Modules\User\Models\Profile::factory())
    ->create();
```

## Best Practices
- Usare factories per tutti i test (niente dati hardcoded).
- Garantire coerenza con lo schema e i vincoli del DB.
- Preferire stati factory per varianti (admin, doctor, patient).

## Troubleshooting
- Email duplicate: usare `$this->faker->unique()->safeEmail()`.
- FK fallite: creare prima i modelli dipendenti e associare correttamente.

## Verifica rapida
```php
echo \Modules\User\Models\User::count();
```

Ultimo aggiornamento: Gennaio 2025
