# Convenzioni Path nei Moduli Laravel

## Collegamenti correlati
- [Documentazione centrale](../../../docs/README.md)
- [Collegamenti documentazione](../../../docs/collegamenti-documentazione.md)
- [README modulo User](./README.md)
- [Struttura moduli](../../../docs/architecture/modules-structure.md)

## ✅ Path Corretti vs ❌ Path Errati

### Views
```bash
# ❌ ERRATO
laravel/Modules/User/Resources/views/filament/widgets/auth/login.blade.php

# ✅ CORRETTO
Modules/User/resources/views/filament/widgets/auth/login.blade.php
```

### Actions
```bash
# ✅ CORRETTO
Modules/User/app/Actions/User/DeleteUserAction.php

# ❌ ERRATO
Modules/User/Actions/User/DeleteUserAction.php
```

### Controllers
```bash
# ✅ CORRETTO
Modules/User/app/Http/Controllers/UserController.php

# ❌ ERRATO
Modules/User/Http/Controllers/UserController.php
```

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 93c6c85 (.)
### Livewire Components
```bash
# ✅ CORRETTO
Modules/User/app/Http/Livewire/Profile/DeleteAccount.php

# ❌ ERRATO
Modules/User/Http/Livewire/Profile/DeleteAccount.php
```

### Livewire Components
```bash
# ✅ CORRETTO
Modules/User/app/Http/Livewire/Profile/DeleteAccount.php

# ❌ ERRATO
Modules/User/Http/Livewire/Profile/DeleteAccount.php
```

<<<<<<< HEAD
>>>>>>> 04d87b1 (.)
=======
>>>>>>> 93c6c85 (.)
## Struttura Standard delle Cartelle

```bash
Modules/User/
├── app/                    # Tutto il codice PHP va qui
│   ├── Actions/           # Actions
│   ├── Http/             # Controllers, Middleware, etc.
│   ├── Models/           # Models
│   └── Services/         # Services
├── resources/            # Assets e views (lowercase!)
│   ├── views/           # Template Blade
│   ├── js/              # JavaScript
│   └── css/             # CSS
├── lang/                # Traduzioni (lowercase!)
└── tests/               # Test
```

## Regole Fondamentali

1. **Case Sensitivity**
   - Usa `resources/` non `Resources/`
   - Usa `lang/` non `Lang/`
   - Usa `app/Actions/` non `Actions/`

2. **Namespace Mapping**
   ```php
<<<<<<< HEAD
   // ✅ CORRETTO
   namespace Modules\User\Actions;
   
   // ❌ ERRATO
   namespace Modules\User\App\Actions;
   ```
<<<<<<< HEAD
=======
=======
>>>>>>> 93c6c85 (.)
   // ✅ CORRETTO per classi in app/Actions/
   namespace Modules\User\Actions;
   
   // ✅ CORRETTO per classi in app/Http/Livewire/
   namespace Modules\User\Http\Livewire;
   
   // ❌ ERRATO
   namespace Modules\User\App\Actions;
   namespace Modules\User\App\Http\Livewire;
   ```
   
   Il namespace deve riflettere il percorso relativo alla cartella `app/`, che è mappata al namespace base `Modules\User\` nel composer.json.
<<<<<<< HEAD
>>>>>>> 04d87b1 (.)
=======
>>>>>>> 93c6c85 (.)

3. **Codice PHP**
   - Tutto il codice PHP va sotto la cartella `app/`
   - Eccezioni: `routes/`, `config/`, `database/`

4. **Assets e Views**
   - Tutti gli assets vanno sotto `resources/`
   - Views sempre in `resources/views/`
   - Blade templates sempre con estensione `.blade.php`

## Script di Correzione

Per correggere automaticamente i path errati:

```bash
#!/bin/bash

# Correggi cartelle maiuscole in minuscole
mv -f Resources resources 2>/dev/null
mv -f Lang lang 2>/dev/null

# Sposta Actions sotto app/
if [ -d "Actions" ]; then
    mkdir -p app/Actions
    mv Actions/* app/Actions/
    rmdir Actions
fi

# Sposta Http sotto app/
if [ -d "Http" ]; then
    mkdir -p app/Http
    mv Http/* app/Http/
    rmdir Http
fi
```

## Checklist di Validazione

- [ ] Tutte le cartelle standard sono in lowercase
- [ ] Tutto il codice PHP è sotto `app/`
- [ ] Views sono in `resources/views/`
- [ ] Traduzioni sono in `lang/`
- [ ] Actions sono in `app/Actions/`
- [ ] Controllers sono in `app/Http/Controllers/`

## Comandi Utili

```bash
# Trova cartelle con nomi errati
find . -type d \( -name "Resources" -o -name "Lang" -o -name "Actions" -o -name "Http" \)

# Verifica struttura cartelle
tree -L 3 laravel/Modules/User/

# Correggi permessi
chmod -R 755 app/
chmod -R 644 resources/views/
```

## Note Importanti

1. La struttura delle cartelle deve seguire PSR-4
2. Case sensitivity è cruciale in ambienti Unix/Linux
3. Mantenere coerenza tra namespace e path
4. Evitare path non standard
5. Seguire le convenzioni Laravel

## Esempi di Migrazione

### Da Struttura Errata a Corretta

```bash
# Prima
laravel/Modules/User/
├── Actions/
├── Http/
├── Resources/
└── Lang/

# Dopo
laravel/Modules/User/
├── app/
│   ├── Actions/
│   └── Http/
├── resources/
└── lang/
```

### Correzione Namespace

```php
<<<<<<< HEAD
// Prima
namespace Modules\User\Actions;
namespace Modules\User\Http\Controllers;

// Dopo
namespace Modules\User\App\Actions;
namespace Modules\User\App\Http\Controllers;
<<<<<<< HEAD
=======
=======
>>>>>>> 93c6c85 (.)
// Prima (ERRATO)
namespace Modules\User\App\Actions;
namespace Modules\User\App\Http\Controllers;

// Dopo (CORRETTO)
namespace Modules\User\Actions;
namespace Modules\User\Http\Controllers;
<<<<<<< HEAD
>>>>>>> 04d87b1 (.)
=======
>>>>>>> 93c6c85 (.)
```

## Automazione

1. **Pre-commit Hook**
   ```bash
   #!/bin/bash
   # Verifica path corretti
   if find . -type d \( -name "Resources" -o -name "Lang" \); then
       echo "Errore: Trovate cartelle con nomi errati"
       exit 1
   fi
   ```

2. **CI/CD Check**
   ```yaml
   path-check:
     script:
       - ./scripts/check_paths.sh
   ```

## Troubleshooting

1. **Problema**: File non trovati dopo lo spostamento
   - **Soluzione**: Aggiorna i namespace e pulisci la cache
   ```bash
   composer dump-autoload
   php artisan cache:clear
   ```

2. **Problema**: Conflitti di namespace
   - **Soluzione**: Verifica PSR-4 in composer.json
   ```json
   "autoload": {
       "psr-4": {
           "Modules\\User\\": "Modules/User/app"
       }
   }
   ``` 