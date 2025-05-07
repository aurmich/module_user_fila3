# Struttura Widget Filament nel Modulo User

## Introduzione

Questo documento definisce le regole per l'implementazione dei widget Filament nel modulo User, seguendo le convenzioni di Windsurf/Xot e garantendo compatibilità con l'architettura del sistema.

## A. Struttura base dei widget

I widget Filament devono:

1. **Estendere XotBaseWidget**: Garantisce funzionalità e comportamenti coerenti
   ```php
   use Modules\Xot\Filament\Widgets\XotBaseWidget;
   
   class LoginWidget extends XotBaseWidget
   {
       // ...
   }
   ```

2. **Utilizzare il namespace corretto**: Il namespace deve rispettare la struttura standard
   ```php
   namespace Modules\User\Filament\Widgets;
   ```
   
   > **IMPORTANTE**: MAI includere il segmento `app` nel namespace anche se i file si trovano fisicamente nella directory app: `Modules\User\App\Filament\Widgets` è ERRATO!

3. **Definire una vista**: Ogni widget deve specificare una vista Blade
   ```php
   protected static string $view = 'user::filament.widgets.nome-widget';
   ```

## B. Percorsi delle viste

### Importante: Path diversi per contesti diversi

> **REGOLA CRITICA**: I percorsi delle viste dei widget cambiano in base al contesto di utilizzo

#### 1. Utilizzo all'interno di un pannello Filament:
Quando un widget viene utilizzato all'interno di un pannello Filament, il percorso della vista deve includere il namespace del modulo:

```php
protected static string $view = 'user::filament.widgets.auth.login';
```

Il file Blade corrispondente si troverà in:
```
Modules/User/resources/views/filament/widgets/auth/login.blade.php
```

#### 2. Utilizzo tramite @livewire o <x-filament::widget> in una vista Blade:
Quando un widget viene referenziato direttamente in una vista Blade con `@livewire` o `<x-filament::widget>`, il percorso della vista NON deve includere il namespace del modulo:

```php
protected static string $view = 'filament.widgets.auth.login';
```

In questo caso, sono necessarie due copie della vista:

1. Con namespace modulo (per pannelli Filament):
   ```
   Modules/User/resources/views/filament/widgets/auth/login.blade.php
   ```

2. Senza namespace modulo (per integrazione diretta nelle viste):
   ```
   resources/views/filament/widgets/auth/login.blade.php
   ```

## C. Registrazione dei widget

Per rendere i widget disponibili nell'applicazione:

1. **Registrazione in ServiceProvider**: Registrare i widget nel provider del modulo
   ```php
   use Filament\Support\Facades\FilamentView;
   use Filament\Support\Facades\FilamentAsset;
   
   // In UserServiceProvider.php - metodo boot()
   FilamentView::registerRenderHook(
       'panels::body.start',
       fn (): string => Blade::render('@livewire(\'Modules\User\Filament\Widgets\LoginWidget\')')
   );
   ```

2. **Widget globali vs Widget di pannello**: Distinguere chiaramente i widget globali da quelli specifici per pannello

## D. Pratiche consigliate

1. **Mantenere i widget leggeri**: Delegare logica complessa alle Actions
2. **Tipizzazione forte**: Utilizzare proprietà tipizzate e DocBlocks completi
3. **Validazione**: Implementare validazione robusta per gli input
4. **Gestione degli errori**: Catturare e gestire gli errori in modo appropriato
5. **Localizzazione**: Utilizzare le traduzioni per tutti i testi visibili all'utente
6. **Testing**: Scrivere test per verificare il comportamento dei widget

## E. Errori comuni

1. **Namespace errato**: Includere `app` nel namespace
2. **Path vista incongruente**: Non allineare il path dichiarato con la posizione del file
3. **Widget non registrato**: Dimenticare di registrare il widget nel ServiceProvider
4. **Mancata differenziazione dei contesti**: Non considerare i diversi percorsi per viste in base al contesto

## F. Esempio completo

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class LoginWidget extends XotBaseWidget
{
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     */
    protected static string $view = 'user::filament.widgets.login';
    
    protected int | string | array $columnSpan = 'full';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Email'))
                ->placeholder(__('Inserisci la tua email')),

            TextInput::make('password')
                ->password()
                ->required()
                ->label(__('Password')),

            Checkbox::make('remember')
                ->label(__('Ricordami'))
                ->default(false),
        ];
    }

    public function authenticate(): void
    {
        try {
            $this->validate();
            
            $data = $this->form->getState();
            if (!Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ], $data['remember'] ?? false)) {
                throw ValidationException::withMessages([
                    'email' => [__('Credenziali non valide.')],
                ]);
            }
            
            redirect(route('filament.admin.pages.dashboard'))->send();
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
        } catch (\Exception $e) {
            $this->addError('email', __('Si è verificato un errore.'));
        }
    }
}
```
