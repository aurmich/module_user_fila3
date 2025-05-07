# Struttura Standard dei Moduli Laravel

## Struttura Base Corretta
```
laravel/Modules/ModuleName/
├── app/                        # Codice principale dell'applicazione
│   ├── Actions/               # Action classes
│   ├── Http/                  # Controllers, Middleware, Requests
│   ├── Models/                # Model classes
│   ├── Providers/            # Service providers
│   └── Services/             # Service classes
├── config/                    # Configurazioni del modulo
├── database/                  # Migrations, seeds, factories
├── docs/                      # Documentazione del modulo
├── lang/                      # File di traduzione (non Lang!)
├── resources/                # Asset e viste (non Resources!)
│   ├── css/
│   ├── js/
│   └── views/
├── routes/                    # File di routing
└── tests/                     # Test del modulo
```

## ❌ Pattern Errati da Evitare
```
laravel/Modules/ModuleName/
├── Resources/                # ERRATO: R maiuscola
├── Lang/                     # ERRATO: L maiuscola
├── Actions/                  # ERRATO: dovrebbe essere in app/Actions
└── Http/                     # ERRATO: dovrebbe essere in app/Http
```

## ✅ Pattern Corretti
```
laravel/Modules/ModuleName/
├── resources/               # CORRETTO: r minuscola
├── lang/                    # CORRETTO: l minuscola
├── app/Actions/            # CORRETTO: sotto app/
└── app/Http/               # CORRETTO: sotto app/
```

## Regole Fondamentali

1. **Namespace PSR-4**
   ```php
   namespace Modules\ModuleName\App\Actions;  // CORRETTO
   namespace Modules\ModuleName\Actions;      // ERRATO
   ```

2. **Case Sensitivity**
   - Usare lowercase per cartelle standard Laravel
   - Mantenere PascalCase per classi e namespace

3. **Struttura app/**
   - Tutto il codice PHP va sotto `app/`
   - Eccezioni: routes/, config/, lang/, resources/

4. **Resources vs resources**
   - `resources/`: assets, views, lang (lowercase)
   - `Resources/`: MAI usare questa versione

5. **Lang vs lang**
   - `lang/`: file di traduzione (lowercase)
   - `Lang/`: MAI usare questa versione

## Esempi di Path Corretti

### Controllers
```php
// CORRETTO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/app/Http/Controllers/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Http/Controllers/
```

### Actions
```php
// CORRETTO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/app/Actions/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Actions/
```

### Views
```php
// CORRETTO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/resources/views/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Resources/views/
```

### Translations
```php
// CORRETTO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/lang/it/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Lang/it/
```

## Best Practices

1. **Verifica Path**
   ```bash
   # Prima di creare un file/cartella, verifica sempre il path
   pwd
   tree -L 3 laravel/Modules/User/
   ```

2. **Namespace Check**
   ```php
   // Verifica sempre il namespace corrisponda al path
   namespace Modules\User\App\Http\Controllers;  // CORRETTO
   namespace Modules\User\Http\Controllers;      // ERRATO
   ```

3. **Case Sensitivity**
   ```bash
   # Usa sempre lowercase per le cartelle standard Laravel
   mkdir -p resources/views
   mkdir -p lang/it
   
   # NON usare mai
   mkdir -p Resources/views  # ERRATO
   mkdir -p Lang/it         # ERRATO
   ```

4. **Struttura Moduli**
   ```bash
   # Crea sempre la struttura base completa
   mkdir -p app/{Actions,Http,Models,Providers,Services}
   mkdir -p {config,database,docs,lang,resources,routes,tests}
   ```

## Checklist di Validazione

- [ ] Tutti i path usano lowercase per cartelle standard Laravel
- [ ] Tutto il codice PHP è sotto la cartella `app/`
- [ ] I namespace corrispondono alla struttura delle cartelle
- [ ] Non ci sono cartelle con iniziali maiuscole (Resources, Lang, etc.)
- [ ] Le traduzioni sono in `lang/` (lowercase)
- [ ] Le viste sono in `resources/views/` (lowercase)

## Note Importanti

1. La struttura dei moduli segue le convenzioni Laravel
2. Case sensitivity è fondamentale in Linux/Unix
3. Mantenere consistenza tra namespace e struttura cartelle
4. Evitare duplicazione di codice tra moduli
5. Seguire PSR-4 per l'autoloading

## Comandi Utili

```bash
# Verifica struttura cartelle
tree -L 3 laravel/Modules/User/

# Trova cartelle con nomi errati
find . -type d -name "Resources" -o -name "Lang"

# Correggi permessi
chmod -R 755 laravel/Modules/*/app/
chmod -R 644 laravel/Modules/*/resources/
``` 