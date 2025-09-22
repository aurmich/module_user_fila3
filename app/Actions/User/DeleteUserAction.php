<?php

declare(strict_types=1);

namespace Modules\User\Actions\User;

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\User;
=======
use Modules\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
>>>>>>> 079c9da7 (.)
use Spatie\QueueableAction\QueueableAction;

class DeleteUserAction
{
    use QueueableAction;
<<<<<<< HEAD

=======
>>>>>>> 079c9da7 (.)
    /**
     * Elimina l'utente dopo aver verificato la password.
     *
     * @param User $user L'utente da eliminare
     * @param string $confirmPassword La password di conferma
     *
     * @return array{success: bool, message: string} Risultato dell'operazione
     */
    public function execute(User $user, string $confirmPassword): array
    {
        if (!Hash::check($confirmPassword, $user->password)) {
            return [
                'success' => false,
<<<<<<< HEAD
                'message' => 'La password inserita non è corretta',
=======
                'message' => 'La password inserita non è corretta'
>>>>>>> 079c9da7 (.)
            ];
        }

        try {
            Auth::logout();
            $user->delete();

            return [
                'success' => true,
<<<<<<< HEAD
                'message' => 'Account eliminato con successo',
=======
                'message' => 'Account eliminato con successo'
>>>>>>> 079c9da7 (.)
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
<<<<<<< HEAD
                'message' => 'Si è verificato un errore durante l\'eliminazione dell\'account',
=======
                'message' => 'Si è verificato un errore durante l\'eliminazione dell\'account'
>>>>>>> 079c9da7 (.)
            ];
        }
    }
}
