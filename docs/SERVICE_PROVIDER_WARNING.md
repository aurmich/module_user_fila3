# ⚠️ ATTENZIONE: Modifiche al ServiceProvider

## Regole Critiche per Estendere XotBaseServiceProvider

I ServiceProvider dei moduli estendono `XotBaseServiceProvider` e devono seguire regole rigorose per mantenere la stabilità del sistema.

### ❌ MAI MODIFICARE
1. **MAI sovrascrivere i metodi di registrazione base** (`registerViews`, `registerTranslations`, ecc.) a meno che non sia assolutamente necessario
2. **MAI alterare il sistema di risoluzione delle view** definito nella classe base
3. **MAI cambiare i percorsi standard** delle risorse (views, translations, config)

### ✅ ESTENSIONI SICURE
1. **Aggiungere metodi specifici del modulo** (come `registerAuthenticationProviders()` in UserServiceProvider)
2. **Chiamare i metodi aggiuntivi** da `boot()` DOPO aver chiamato `parent::boot()`
3. **Definire proprietà obbligatorie** come `$name`, `$module_dir` e `$module_ns`

### 🔍 RISOLUZIONE DEI PROBLEMI
Se hai problemi con la risoluzione delle view:
1. **NON modificare il ServiceProvider** per creare percorsi personalizzati
2. **VERIFICA la struttura delle cartelle** segua le convenzioni Windsurf/Xot
3. **ADATTA i componenti** (widgets, livewire, ecc.) per utilizzare i path corretti

### 📋 ESEMPIO CORRETTO 
```php
class UserServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'User';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot(); // Questo registra già views, translations, ecc.
        
        // Aggiungi funzionalità specifiche qui
        $this->registerAuthenticationProviders();
        $this->registerPasswordRules();
        // ...
    }
}
```

## Collegamenti
- [XotBaseServiceProvider.md](/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/Xot/docs/providers/xotbaseserviceprovider.md)
- [SERVICE-PROVIDER-BEST-PRACTICES.md](/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/Xot/docs/SERVICE-PROVIDER-BEST-PRACTICES.md)
