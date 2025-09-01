<?php

declare(strict_types=1);

namespace Modules\User\Actions\User;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\User;
=======
use Modules\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
>>>>>>> 8055579 (.)
=======
use Modules\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
>>>>>>> 8d82f8c (.)
use Spatie\QueueableAction\QueueableAction;

class DeleteUserAction
{
    use QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Elimina l'utente dopo aver verificato la password.
     *
     * @param  User  $user  L'utente da eliminare
     * @param  string  $confirmPassword  La password di conferma
=======
    /**
     * Elimina l'utente dopo aver verificato la password.
     *
     * @param User $user L'utente da eliminare
     * @param string $confirmPassword La password di conferma
     *
>>>>>>> 8055579 (.)
=======
    /**
     * Elimina l'utente dopo aver verificato la password.
     *
     * @param User $user L'utente da eliminare
     * @param string $confirmPassword La password di conferma
     *
>>>>>>> 8d82f8c (.)
     * @return array{success: bool, message: string} Risultato dell'operazione
     */
    public function execute(User $user, string $confirmPassword): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! Hash::check($confirmPassword, $user->password)) {
            return [
                'success' => false,
                'message' => 'La password inserita non è corretta',
=======
        if (!Hash::check($confirmPassword, $user->password)) {
            return [
                'success' => false,
                'message' => 'La password inserita non è corretta'
>>>>>>> 8055579 (.)
=======
        if (!Hash::check($confirmPassword, $user->password)) {
            return [
                'success' => false,
                'message' => 'La password inserita non è corretta'
>>>>>>> 8d82f8c (.)
            ];
        }

        try {
            Auth::logout();
            $user->delete();

            return [
                'success' => true,
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'Account eliminato con successo',
=======
                'message' => 'Account eliminato con successo'
>>>>>>> 8055579 (.)
=======
                'message' => 'Account eliminato con successo'
>>>>>>> 8d82f8c (.)
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'Si è verificato un errore durante l\'eliminazione dell\'account',
=======
                'message' => 'Si è verificato un errore durante l\'eliminazione dell\'account'
>>>>>>> 8055579 (.)
=======
                'message' => 'Si è verificato un errore durante l\'eliminazione dell\'account'
>>>>>>> 8d82f8c (.)
            ];
        }
    }
}
