# Modulo User

## Introduzione
Il modulo User gestisce l'autenticazione, l'autorizzazione e la gestione degli utenti.

## Indice

### Autenticazione
- [Login](auth/LOGIN.md)
- [Registrazione](auth/REGISTRATION.md)
- [Reset Password](auth/PASSWORD_RESET.md)
- [2FA](auth/TWO_FACTOR.md)

### Autorizzazione
- [Ruoli](authorization/ROLES.md)
- [Permessi](authorization/PERMISSIONS.md)
- [Policies](authorization/POLICIES.md)
- [Gates](authorization/GATES.md)

### Profilo Utente
- [Gestione Profilo](profile/MANAGEMENT.md)
- [Preferenze](profile/PREFERENCES.md)
- [Notifiche](profile/NOTIFICATIONS.md)

### Framework
- [Laravel 12.x](../../../docs/framework/LARAVEL.md)
- [Filament](../../../docs/framework/FILAMENT.md)
- [Livewire](../../../docs/framework/LIVEWIRE.md)
- [Folio & Volt](../../../docs/framework/FOLIO_VOLT.md)

### Sviluppo
- [Setup](development/SETUP.md)
- [Workflow](development/WORKFLOW.md)
- [Testing](development/TESTING.md)

### Collegamenti ad Altri Moduli
- [Xot Module](../../Xot/docs/README.md)
- [UI Module](../../UI/docs/README.md)
- [Tenant Module](../../Tenant/docs/README.md)
- [Notify Module](../../Notify/docs/README.md)

### Collegamenti Esterni
- [Documentazione Principale](../../../docs/README.md)
- [Standards](../../../docs/standards/CODING.md)
- [Best Practices](../../../docs/standards/DOCUMENTATION.md)
- [Security](../../../docs/standards/SECURITY.md)

## Funzionalità Principali

### Autenticazione
```php
class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected function authenticated(Request $request, User $user): RedirectResponse
    {
        if ($user->isTwoFactorEnabled()) {
            return redirect()->route('2fa.verify');
        }
        
        return redirect()->intended($this->redirectPath());
    }
}
```

### Autorizzazione
```php
class UserPolicy
{
    public function update(User $user, User $model): bool
    {
        return $user->hasRole('admin') || $user->id === $model->id;
    }
    
    public function delete(User $user, User $model): bool
    {
        return $user->hasRole('admin');
    }
}
```

### Profilo
```php
class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $user = $request->user();
        
        $user->update($request->validated());
        
        if ($request->hasFile('avatar')) {
            $user->updateAvatar($request->file('avatar'));
        }
        
        return redirect()
            ->route('profile.show')
            ->with('status', 'profile-updated');
    }
}
```

## Best Practices

### 1. Autenticazione
- Usare guard personalizzati per contesti diversi
- Implementare 2FA dove necessario
- Gestire correttamente le sessioni
- Logging degli accessi

### 2. Autorizzazione
- Definire ruoli chiari
- Usare permessi granulari
- Implementare policies
- Documentare le regole

### 3. Performance
- Caching dei ruoli/permessi
- Eager loading delle relazioni
- Ottimizzazione delle query
- Gestione efficiente delle sessioni

## Collegamenti Rapidi
- [Torna alla Documentazione Principale](../../../docs/README.md)
- [Standards di Codifica](../../../docs/standards/CODING.md)
- [Autenticazione](auth/LOGIN.md)
- [Sviluppo](development/SETUP.md)

## Panoramica
Il modulo User gestisce l'autenticazione, l'autorizzazione e la gestione degli utenti del sistema.

## Caratteristiche Principali

### Architettura
- Autenticazione con Folio
- Componenti Volt per i form
- Gestione ruoli e permessi
- Profili utente
- Integrazione con Filament

### Struttura
```
User/
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── Pages/
│   │   │   └── Widgets/
│   │   ├── Http/
│   │   │   ├── Controllers/
│   │   │   └── Middleware/
│   │   ├── Models/
│   │   └── Services/
│   ├── resources/
│   │   ├── views/
│   │   │   ├── pages/      # Pagine Folio
│   │   │   │   ├── auth/
│   │   │   │   │   ├── login.blade.php
│   │   │   │   │   ├── register.blade.php
│   │   │   │   │   └── logout.blade.php
│   │   │   │   └── profile/
│   │   │   └── components/ # Componenti Volt
│   │   │       ├── auth/
│   │   │       └── profile/
│   │   ├── lang/
│   │   └── ...
│   └── docs/
```

## Funzionalità Principali
- Gestione utenti e profili
- Sistema di permessi e ruoli
- Autenticazione e autorizzazione
- Integrazione con altri moduli

## Collegamenti Bidirezionali

### Modulo Xot
- [Linee Guida Base](../../Xot/docs/README.md) - Convenzioni generali
- [Best Practices](../../Xot/docs/best-practices.md) - Linee guida sviluppo
- [Struttura Moduli](../../Xot/docs/structure.md) - Organizzazione moduli

### Modulo Lang
- [Traduzioni Interfaccia](../../Lang/docs/translations.md) - Traduzioni UI
- [Messaggi Sistema](../../Lang/docs/messages.md) - Messaggi di sistema
- [Notifiche](../../Lang/docs/notifications.md) - Notifiche tradotte

### Modulo UI
- [Componenti Utente](../../UI/docs/user-components.md) - Componenti per utenti
- [Profilo](../../UI/docs/profile.md) - Interfaccia profilo
- [Form Autenticazione](../../UI/docs/auth-forms.md) - Form di login/registrazione

### Modulo Cms
- [Contenuti Utente](../../Cms/docs/user-content.md) - Gestione contenuti utente
- [Widget Profilo](../../Cms/docs/profile-widgets.md) - Widget per profili
- [SEO Utente](../../Cms/docs/user-seo.md) - Ottimizzazione SEO profili

## Documentazione

### Guide
- [Autenticazione](auth.md)
- [Autorizzazione](authorization.md)
- [Profilo Utente](profile.md)
- [Ruoli e Permessi](roles.md)

### Esempi
- [Login](auth-pages.md)
- [Registrazione](registration.md)
- [Recupero Password](password-reset.md)
- [Gestione Profilo](profile-management.md)

## Dipendenze
- Laravel Sanctum
- Filament
- Livewire
- Volt
- Folio

## Utilizzo

### Autenticazione con Folio
```php
// resources/views/pages/auth/login.blade.php
<?php

use function Livewire\Volt\{state, mount};

state([
    'email' => '',
    'password' => '',
    'remember' => false,
]);

$login = function() {
    if (auth()->attempt([
        'email' => $this->email,
        'password' => $this->password,
    ], $this->remember)) {
        return redirect()->intended('/dashboard');
    }

    $this->addError('email', 'Credenziali non valide');
};

?>
```

### Componenti Volt
```php
// resources/views/components/auth/login-form.blade.php
<?php

use function Livewire\Volt\{state, mount};

state([
    'email' => '',
    'password' => '',
    'remember' => false,
]);

$submit = function() {
    $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (auth()->attempt([
        'email' => $this->email,
        'password' => $this->password,
    ], $this->remember)) {
        return redirect()->intended('/dashboard');
    }

    $this->addError('email', 'Credenziali non valide');
};

?>

<form wire:submit="submit">
    <div>
        <label for="email">Email</label>
        <input type="email" wire:model="email" id="email">
        @error('email') <span>{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" wire:model="password" id="password">
        @error('password') <span>{{ $message }}</span> @enderror
    </div>

    <div>
        <label>
            <input type="checkbox" wire:model="remember">
            Ricordami
        </label>
    </div>

    <button type="submit">Accedi</button>
</form>

## Collegamenti
- [Indice Documentazione](../../../docs/INDEX.md)
- [README Principale](../../../README.md)
- [API Reference](../docs/api.md)
- [Changelog](../docs/CHANGELOG.md) 