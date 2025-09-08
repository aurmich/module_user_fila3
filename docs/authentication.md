<<<<<<< HEAD
# Autenticazione in Predict

## Panoramica
Il sistema di autenticazione in Predict è basato su Laravel Volt e supporta sia l'autenticazione tradizionale che quella sociale.

## Configurazione

### Route
```php
// Route con prefisso lingua
Route::prefix('{lang}')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'Login')->name('login');
        Route::get('register', 'Register')->name('register');
    });
});

// Route di fallback
Route::middleware('guest')->group(function () {
    Route::get('login', 'Login')->name('login');
    Route::get('register', 'Register')->name('register');
});
```

### Socialite
```php
// Configurazione in config/services.php
'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT_URI'),
],
```

## Componenti

### LoginComponent
```php
class LoginComponent extends Component
{
    #[Validate('required|email')]
    public string $email = '';
    
    #[Validate('required')]
    public string $password = '';
    
    public bool $remember = false;

    public function authenticate(): RedirectResponse
    {
        $this->validate();
        
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return back();
        }
        
        event(new Login('web', User::where('email', $this->email)->first(), $this->remember));
        
        return redirect()->intended('/');
    }
}
```

## Eventi e Listeners

### Login Event
- `LoginListener`: Gestisce la logica post-login
- `CheckLoginListener`: Verifica le condizioni di accesso

### Registered Event
- `ProfileRegisteredListener`: Inizializza il profilo utente

## Middleware

### Auth Middleware
Protegge le route che richiedono autenticazione:
```php
Route::middleware('auth')->group(function () {
    // Route protette
});
```

### Guest Middleware
Restringe l'accesso alle route pubbliche:
```php
Route::middleware('guest')->group(function () {
    // Route pubbliche
});
```

## Best Practices

1. **Sicurezza**
   - Utilizzare HTTPS per tutte le route di autenticazione
   - Implementare rate limiting per prevenire attacchi brute force
   - Validare tutti gli input utente

2. **UX**
   - Fornire feedback chiari per errori di login
   - Implementare remember me functionality
   - Supportare multiple opzioni di login

3. **Manutenzione**
   - Mantenere aggiornate le dipendenze di sicurezza
   - Monitorare i tentativi di login falliti
   - Implementare logging per debugging

## Troubleshooting

### Problemi Comuni

1. **Errori di Redirect**
   - Verificare la configurazione delle route
   - Controllare i middleware
   - Verificare la configurazione di Socialite

2. **Errori di Autenticazione**
   - Controllare le credenziali nel database
   - Verificare la configurazione del guard
   - Controllare i log per errori specifici

3. **Problemi di Sessione**
   - Verificare la configurazione della sessione
   - Controllare il middleware web
   - Verificare la configurazione del cookie 

## Implementazioni Specifiche

### Logout con Volt e Folio
Per dettagli sull'implementazione del logout utilizzando Volt e Folio, consultare la [documentazione del modulo User](../laravel/Modules/User/project_docs/VOLT_FOLIO_LOGOUT_ERROR.md). 
=======
# Sistema di Autenticazione - Modulo User

## Panoramica

Il sistema di autenticazione del modulo User fornisce un'infrastruttura robusta e sicura per la gestione degli accessi all'applicazione.

## 🏗️ Componenti

### 1. Modello User
```php
use Modules\User\Models\User;

class User extends Authenticatable
{
    use HasRoles, HasTeams, HasTenants;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
```

### 2. Middleware di Autenticazione
```php
// app/Http/Kernel.php
protected $routeMiddleware = [
    'auth' => \Modules\User\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest' => \Modules\User\Http\Middleware\RedirectIfAuthenticated::class,
];
```

### 3. Controller di Autenticazione
```php
namespace Modules\User\Http\Controllers\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Credenziali non valide.',
        ]);
    }
}
```

## 🔐 Funzionalità di Sicurezza

### Password Policy
- Lunghezza minima: 8 caratteri
- Complessità: Maiuscole, minuscole, numeri, simboli
- Storia: Non riutilizzare le ultime 5 password
- Scadenza: Cambio obbligatorio ogni 90 giorni

### Autenticazione a Due Fattori (2FA)
```php
// Abilitazione 2FA
$user->enableTwoFactorAuth();

// Verifica codice 2FA
if ($user->verifyTwoFactorCode($code)) {
    // Accesso consentito
}
```

### Gestione Sessioni
```php
// Configurazione sessioni
'session' => [
    'lifetime' => 120, // 2 ore
    'expire_on_close' => false,
    'secure' => true, // Solo HTTPS
    'http_only' => true,
    'same_site' => 'lax',
],
```

## 🚀 Utilizzo

### Login
```php
// Autenticazione base
Auth::attempt(['email' => $email, 'password' => $password]);

// Autenticazione con remember me
Auth::attempt($credentials, $request->boolean('remember'));

// Verifica stato autenticazione
if (Auth::check()) {
    $user = Auth::user();
}
```

### Logout
```php
// Logout e invalidazione sessione
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
```

### Protezione Route
```php
// Route protette
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'show']);
});

// Route per guest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login']);
});
```

## 📱 API Authentication

### Sanctum Token
```php
// Generazione token
$token = $user->createToken('api-token')->plainTextToken;

// Verifica token
if ($request->bearerToken()) {
    $user = Auth::guard('sanctum')->user();
}
```

## 🔗 Collegamenti

- [**README Modulo User**](README.md)
- [**Sistema Autorizzazione**](authorization.md)
- [**Gestione Team**](teams.md)
- [**Multi-tenancy**](multi-tenancy.md)

---

*Ultimo aggiornamento: giugno 2025*
>>>>>>> e5f94125 (.)
