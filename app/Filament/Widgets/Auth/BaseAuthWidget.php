<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

abstract class BaseAuthWidget extends Widget
{
    public ?array $data = [];

    public function mount(): void
    {
        if (Auth::check()) {
            redirect()->intended(route('dashboard'));
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
     * Restituisce i dati per la view.
     * In Filament v3/Xot, il form va gestito tramite getFormSchema().
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'form' => $this->getFormSchema(),
=======
=======
>>>>>>> 2c9cce9 (.)
=======
>>>>>>> 1f6ff45 (.)

        $this->form->fill();
    }

    /**
     * Restituisce i dati per la view.
     * In Filament v3/Xot, il form va gestito tramite getFormSchema().
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'form' => $this->form,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 2c9cce9 (.)
=======
>>>>>>> 1f6ff45 (.)
        ];
    }
}
