# Gestione delle Sessioni

## Best Practices

### 1. Gestione Sicura delle Sessioni

#### 1.1. Configurazione
```php
// config/session.php
return [
    'driver' => env('SESSION_DRIVER', 'file'),
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => storage_path('framework/sessions'),
    'connection' => env('SESSION_CONNECTION'),
    'table' => 'sessions',
    'store' => env('SESSION_STORE'),
    'lottery' => [2, 100],
    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),
    'path' => '/',
    'domain' => env('SESSION_DOMAIN', null),
    'secure' => env('SESSION_SECURE_COOKIE', true),
    'http_only' => true,
    'same_site' => 'lax',
];
```

#### 1.2. Validazione Sessione
```php
// Middleware/ValidateSession.php
public function handle($request, Closure $next)
{
    if ($request->session()->has('last_activity')) {
        $lastActivity = $request->session()->get('last_activity');
        if (now()->diffInMinutes($lastActivity) > config('session.lifetime')) {
            Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('login');
        }
    }
    
    $request->session()->put('last_activity', now());
    return $next($request);
}
```

### 2. Gestione Logout

#### 2.1. Pulizia Sessione
```php
Auth::logout();
session()->invalidate();
session()->regenerateToken();
Cookie::queue(Cookie::forget('remember_token'));
```

#### 2.2. Logging
```php
Log::channel('auth')->info('Logout effettuato', [
    'user_id' => Auth::id(),
    'ip' => request()->ip(),
    'user_agent' => request()->userAgent(),
    'timestamp' => now()
]);
```

### 3. Protezione Contro Attacchi

#### 3.1. Session Fixation
```php
// Middleware/PreventSessionFixation.php
public function handle($request, Closure $next)
{
    if (Auth::check()) {
        $request->session()->regenerate();
    }
    return $next($request);
}
```

#### 3.2. Session Hijacking
```php
// Middleware/PreventSessionHijacking.php
public function handle($request, Closure $next)
{
    if (Auth::check()) {
        $fingerprint = $request->fingerprint();
        if ($request->session()->get('fingerprint') !== $fingerprint) {
            Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('login');
        }
    }
    return $next($request);
}
```

### 4. Implementazione in Volt

#### 4.1. Componente Login
```php
use function Livewire\Volt\{state, mount, rules};

state(['email' => '', 'password' => '', 'remember' => false]);

rules([
    'email' => ['required', 'email'],
    'password' => ['required'],
    '_token' => ['required', 'string'],
]);

$login = function () {
    try {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            
            Log::channel('auth')->info('Login effettuato', [
                'user_id' => Auth::id(),
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent()
            ]);
            
            return redirect()->intended(route('dashboard'));
        }

        $this->addError('email', __('Credenziali non valide.'));
    } catch (\Exception $e) {
        Log::channel('auth')->error('Errore durante il login', [
            'error' => $e->getMessage(),
            'email' => $this->email
        ]);
        
        return back()->with('error', __('Errore durante il login'));
    }
};
```

#### 4.2. Componente Logout
```php
use function Livewire\Volt\{state, mount, rules};

state(['isLoggingOut' => false]);

rules([
    '_token' => ['required', 'string'],
    'session_id' => ['required', 'string'],
    'timestamp' => ['required', 'integer'],
]);

$logout = function () {
    try {
        $this->isLoggingOut = true;
        $this->validate();
        
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        Cookie::queue(Cookie::forget('remember_token'));
        
        Log::channel('auth')->info('Logout effettuato', [
            'user_id' => Auth::id(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent()
        ]);
        
        return redirect()->route('home')
            ->with('success', __('Logout effettuato con successo'))
            ->withCookie(Cookie::forget('remember_token'));
    } catch (\Exception $e) {
        Log::channel('auth')->error('Errore durante il logout', [
            'error' => $e->getMessage(),
            'user_id' => Auth::id()
        ]);
        
        $this->isLoggingOut = false;
        return back()->with('error', __('Errore durante il logout'));
    }
};
```

## Note di Sicurezza

### 1. Cookie
- Usa sempre cookie sicuri
- Imposta SameSite=Lax
- Abilita HttpOnly
- Usa HTTPS

### 2. Sessione
- Regenera ID sessione al login
- Invalida sessione al logout
- Implementa timeout
- Usa storage sicuro

### 3. Logging
- Logga eventi importanti
- Non loggare dati sensibili
- Usa canali separati
- Implementa rotazione log

### 4. Errori
- Gestisci eccezioni
- Non esporre dettagli
- Logga errori
- Fornisci feedback appropriato

## Collegamenti Correlati
- [Best Practices di Sicurezza](./SECURITY_BEST_PRACTICES.md)
- [Documentazione Volt](./VOLT_BLADE_IMPLEMENTATION.md)
- [Tema One Documentation](../../Themes/One/docs/README.md) 
