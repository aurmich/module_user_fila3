# RegistrationWidget e l'uso della proprietà `$data`

## Overview

Il widget `RegistrationWidget` è un componente Filament che gestisce la registrazione degli utenti nel sistema. È un esempio fondamentale di come i form Livewire interagiscono con la proprietà `$data` definita in `XotBaseWidget`.

## Struttura

```php
namespace Modules\User\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
// Altri import...

class RegistrationWidget extends XotBaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public string $type;
    public string $resource;
    protected static string $view = 'pub_theme::filament.widgets.registration';

    public function mount(string $type): void
    {
        $this->type = $type;
        $this->resource = XotData::make()->getUserTypeResourceClass($type);
        $this->form->fill();
    }

    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }
}
```

## Utilizzo della proprietà `$data`

Il `RegistrationWidget` utilizza implicitamente la proprietà `$data` ereditata da `XotBaseWidget` per gestire i dati del form. Questa proprietà è fondamentale perché:

1. I campi nel form Blade usano `wire:model="data.*"` per il binding dei dati
2. Quando il form viene inviato, i dati sono disponibili tramite `$this->data`
3. La proprietà è già dichiarata in `XotBaseWidget` come `public ?array $data = []`

## Template Blade

Nel file `registration.blade.php`, il form utilizza la direttiva `wire:submit.prevent="register"` per inviare i dati:

```blade
<form wire:submit.prevent="register" class="space-y-6">
    {{ $this->form }}
</form>
```

I campi generati dal form Filament saranno automaticamente collegati utilizzando `wire:model="data.*"`.

## Errori comuni

### 1. Errore di proprietà non esistente

```
Livewire: [wire:model="data.first_name"] property does not exist on component: [modules.user.filament.widgets.registration-widget]
```

Questo errore si verificherebbe se:
- La proprietà `$data` non fosse dichiarata in `XotBaseWidget`
- Ci fosse un tentativo di ridichiarare `$data` nel widget, causando conflitti

### 2. Accesso errato ai dati

```php
// ERRATO ❌
public function register()
{
    $firstName = $this->first_name; // La proprietà non esiste
}

// CORRETTO ✅
public function register()
{
    $firstName = $this->data['first_name'];
}
```

## Best Practices

1. **Non ridichiarare la proprietà `$data`** - È già fornita da `XotBaseWidget`
2. **Accedere ai campi tramite `$this->data['campo']`** - Non come proprietà dirette
3. **Validare i dati prima dell'uso** - Utilizzare i metodi di validazione di Livewire
4. **Utilizzare `$this->form->fill()`** nel metodo `mount()` per inizializzare il form
5. **Evitare binding diretti** come `wire:model="first_name"` che non usano la struttura `data.*`

## Collegamenti

- [Documentazione sulla proprietà `$data` in XotBaseWidget](../../../Xot/docs/filament/widgets/data-property.md)
- [Filament Forms Documentation](https://filamentphp.com/docs/3.x/forms/installation)
- [Livewire Data Binding](https://livewire.laravel.com/docs/properties)
