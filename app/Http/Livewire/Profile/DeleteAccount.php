<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\User\Actions\User\DeleteUserAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Contracts\UserContract;
=======
>>>>>>> aurmich/dev
=======
use Modules\User\Contracts\UserContract;
>>>>>>> 345f8677 (phpstan)

class DeleteAccount extends Component
{
    public string $delete_confirm_password = '';

    public function render(): View
    {
        return view('user::livewire.profile.delete-account');
    }

    public function destroy(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var \Modules\User\Models\User|null $user */
=======
>>>>>>> aurmich/dev
=======
        /** @var \Modules\User\Models\User|null $user */
>>>>>>> 345f8677 (phpstan)
        $user = Auth::user();
        if (!$user) {
            $this->dispatch('toast', [
                'message' => 'Utente non trovato',
                'type' => 'error'
            ]);
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        // Assicuriamoci che sia del tipo corretto per l'action
        if (!$user instanceof UserContract) {
            $this->dispatch('toast', [
                'message' => 'Tipo di utente non supportato',
                'type' => 'error'
            ]);
            return;
        }

<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
        $result = app(DeleteUserAction::class)->execute($user, $this->delete_confirm_password);

        if (!$result['success']) {
            $this->dispatch('toast', [
                'message' => $result['message'],
                'type' => 'error'
            ]);
            $this->reset(['delete_confirm_password']);
            return;
        }

        $this->redirect('/');
    }
}
