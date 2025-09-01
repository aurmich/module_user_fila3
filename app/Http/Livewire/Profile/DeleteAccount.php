<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\User\Actions\User\DeleteUserAction;
use Modules\User\Contracts\UserContract;

class DeleteAccount extends Component
{
    public string $delete_confirm_password = '';

    public function render(): View
    {
        return view('user::livewire.profile.delete-account');
    }

    public function destroy(): void
    {
        /** @var \Modules\User\Models\User|null $user */
        $user = Auth::user();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $user) {
=======
        if (!$user) {
>>>>>>> 8d82f8c (.)
            $this->dispatch('toast', [
                'message' => 'Utente non trovato',
                'type' => 'error'
            ]);
<<<<<<< HEAD

=======
        if (!$user) {
            $this->dispatch('toast', [
                'message' => 'Utente non trovato',
                'type' => 'error'
            ]);
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
            return;
        }

        // Assicuriamoci che sia del tipo corretto per l'action
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $user instanceof UserContract) {
=======
        if (!$user instanceof UserContract) {
>>>>>>> 8d82f8c (.)
            $this->dispatch('toast', [
                'message' => 'Tipo di utente non supportato',
                'type' => 'error'
            ]);
<<<<<<< HEAD

=======
        if (!$user instanceof UserContract) {
            $this->dispatch('toast', [
                'message' => 'Tipo di utente non supportato',
                'type' => 'error'
            ]);
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
            return;
        }

        $result = app(DeleteUserAction::class)->execute($user, $this->delete_confirm_password);

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $result['success']) {
=======
        if (!$result['success']) {
>>>>>>> 8d82f8c (.)
            $this->dispatch('toast', [
                'message' => $result['message'],
                'type' => 'error'
            ]);
            $this->reset(['delete_confirm_password']);
<<<<<<< HEAD

=======
        if (!$result['success']) {
            $this->dispatch('toast', [
                'message' => $result['message'],
                'type' => 'error'
            ]);
            $this->reset(['delete_confirm_password']);
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
            return;
        }

        $this->redirect('/');
    }
}
