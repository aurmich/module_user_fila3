<?php

/**
 * @see https://github.com/ryangjchandler/filament-user-resource/blob/main/src/resources/UserResource/Pages/EditUser.php
<<<<<<< HEAD
 * Pagina di modifica utente per Filament.
=======
>>>>>>> 67cd443 (.)
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Models\User;
use Webmozart\Assert\Assert;

use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

/**
 * Pagina per la modifica degli utenti con particolare gestione della password.
 */
=======
use Modules\User\Filament\Resources\UserResource;

>>>>>>> 67cd443 (.)
class EditUser extends EditRecord
{
    // //
    protected static string $resource = UserResource::class;

<<<<<<< HEAD
    protected function mutateFormDataBeforeSave(array $data): array
    {
        Assert::isArray($data);
        if (! array_key_exists('new_password', $data) || ! filled($data['new_password'])) {
            return $data;
        }

        // Verifichiamo che record sia un'istanza valida di User
        Assert::notNull($this->record);
        Assert::isInstanceOf($this->record, User::class);
        
        // Gestione sicura del tipo di password per evitare errori di cast
        $newPassword = $data['new_password'];
        
        // Verifichiamo il tipo e convertiamo in modo sicuro
        if (!is_string($newPassword)) {
            if (!is_scalar($newPassword)) {
                throw new \InvalidArgumentException('La password deve essere una stringa');
            }
            $newPassword = (string) $newPassword;
        }
            
        $this->record->update(['password' => Hash::make($newPassword)]);
        return $data;
    }

=======
    /* --- dovrebbe fare il mutator da controllare
    public function beforeSave(): void
    {
        Assert::isArray($this->data);
        if (! array_key_exists('new_password', $this->data) || ! filled($this->data['new_password'])) {
            return;
        }

        $this->record->password = Hash::make($this->data['new_password']);
    }
    */
>>>>>>> 67cd443 (.)
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
