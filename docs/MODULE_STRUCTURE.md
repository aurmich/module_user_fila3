# Struttura Standard dei Moduli Laravel

<<<<<<< HEAD
=======
## Collegamenti correlati
- [Documentazione centrale](../../../docs/README.md)
- [Collegamenti documentazione](../../../docs/collegamenti-documentazione.md)
- [README modulo User](./README.md)
- [Convenzioni Path](./PATH_CONVENTIONS.md)
- [Struttura moduli](../../../docs/architecture/modules-structure.md)

>>>>>>> aurmich/dev
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
<<<<<<< HEAD
├── Actions/                  # ERRATO: dovrebbe essere in app/Actions
=======
├── app/Actions/              # ERRATO: dovrebbe essere Actions/ a livello root
>>>>>>> aurmich/dev
└── Http/                     # ERRATO: dovrebbe essere in app/Http
```

## ✅ Pattern Corretti
```
laravel/Modules/ModuleName/
├── resources/               # CORRETTO: r minuscola
├── lang/                    # CORRETTO: l minuscola
<<<<<<< HEAD
├── app/Actions/            # CORRETTO: sotto app/
=======
├── Actions/                 # CORRETTO: a livello root
>>>>>>> aurmich/dev
└── app/Http/               # CORRETTO: sotto app/
```

## Regole Fondamentali

1. **Namespace PSR-4**
   ```php
<<<<<<< HEAD
   namespace Modules\ModuleName\App\Actions;  // CORRETTO
   namespace Modules\ModuleName\Actions;      // ERRATO
=======
   namespace Modules\ModuleName\Actions;      // CORRETTO
   namespace Modules\ModuleName\App\Actions;  // ERRATO
   // Per Actions
   namespace Modules\ModuleName\Actions;      // CORRETTO
   namespace Modules\ModuleName\App\Actions;  // ERRATO
   
   // Per Livewire Components
   namespace Modules\ModuleName\Http\Livewire;  // CORRETTO
   namespace Modules\ModuleName\App\Http\Livewire;  // ERRATO
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/app/Http/Controllers/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Http/Controllers/
=======
laravel/Modules/User/app/Http/Controllers/

// ERRATO
laravel/Modules/User/Http/Controllers/
>>>>>>> aurmich/dev
```

### Actions
```php
// CORRETTO
<<<<<<< HEAD
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/app/Actions/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Actions/
=======
laravel/Modules/User/Actions/User/DeleteUserAction.php

// ERRATO
laravel/Modules/User/app/Actions/User/DeleteUserAction.php
>>>>>>> aurmich/dev
```

### Views
```php
// CORRETTO
<<<<<<< HEAD
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/resources/views/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Resources/views/
=======
laravel/Modules/User/resources/views/

// ERRATO
laravel/Modules/User/Resources/views/
```

### Livewire Components
```php
// CORRETTO
laravel/Modules/User/app/Http/Livewire/Profile/DeleteAccount.php

// ERRATO
laravel/Modules/User/Http/Livewire/Profile/DeleteAccount.php
>>>>>>> aurmich/dev
```

### Translations
```php
// CORRETTO
<<<<<<< HEAD
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/lang/it/

// ERRATO
/var/www/html/_bases/base_predict_fila3_mono/laravel/Modules/User/Lang/it/
=======
laravel/Modules/User/lang/it/

// ERRATO
laravel/Modules/User/Lang/it/
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
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
=======
   namespace Modules\User\Http\Controllers;  // CORRETTO
   namespace Modules\User\App\Http\Controllers;      // ERRATO
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
``` 
=======
``` 
>>>>>>> aurmich/dev
