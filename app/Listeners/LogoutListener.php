<?php

declare(strict_types=1);

/**
 * @see https://github.com/rappasoft/laravel-authentication-log/blob/main/src/Listeners/LogoutListener.php
 */

namespace Modules\User\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
>>>>>>> 8d82f8c (.)
use Modules\User\Actions\GetCurrentDeviceAction;
use Modules\User\Models\AuthenticationLog;
use Modules\User\Models\DeviceUser;
<<<<<<< HEAD
=======
use Modules\User\Actions\GetCurrentDeviceAction;
use Modules\User\Models\AuthenticationLog;
use Modules\User\Models\DeviceUser;
use Modules\User\Contracts\HasAuthentications;
use Illuminate\Support\Facades\Log;
use Modules\User\Traits\HasAuthentications as HasAuthenticationsTrait;
>>>>>>> 8055579 (.)
=======
use Modules\User\Contracts\HasAuthentications;
use Illuminate\Support\Facades\Log;
use Modules\User\Traits\HasAuthentications as HasAuthenticationsTrait;
>>>>>>> 8d82f8c (.)

class LogoutListener
{
    protected Request $request;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     */
    public function handle(Logout $event): void
    {
        try {
            // Verifica se l'utente esiste prima di procedere
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $event->user) {
                Log::warning('Tentativo di logout per un utente non autenticato');

=======
            if (!$event->user) {
                Log::warning('Tentativo di logout per un utente non autenticato');
>>>>>>> 8055579 (.)
=======
            if (!$event->user) {
                Log::warning('Tentativo di logout per un utente non autenticato');
>>>>>>> 8d82f8c (.)
                return;
            }

            $device = app(GetCurrentDeviceAction::class)->execute();

            // Aggiorna il pivot solo se abbiamo sia l'utente che il device
            if ($device) {
                try {
                    $pivot = DeviceUser::firstOrCreate([
                        'user_id' => $event->user->getAuthIdentifier(),
<<<<<<< HEAD
<<<<<<< HEAD
                        'device_id' => $device->id,
=======
                        'device_id' => $device->id
>>>>>>> 8055579 (.)
=======
                        'device_id' => $device->id
>>>>>>> 8d82f8c (.)
                    ]);
                    $pivot->update(['logout_at' => now()]);
                } catch (\Exception $e) {
                    Log::error('Errore durante l\'aggiornamento del pivot device-user', [
                        'error' => $e->getMessage(),
                        'user_id' => $event->user->getAuthIdentifier(),
<<<<<<< HEAD
<<<<<<< HEAD
                        'device_id' => $device->id,
=======
                        'device_id' => $device->id
>>>>>>> 8055579 (.)
=======
                        'device_id' => $device->id
>>>>>>> 8d82f8c (.)
                    ]);
                }
            }

            // Gestione delle autenticazioni
            if ($event->user instanceof HasAuthentications) {
                try {
                    $event->user->authentications()->create([
                        'type' => 'logout',
                        'ip_address' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ]);
                } catch (\Exception $e) {
                    Log::error('Errore durante la creazione del log di autenticazione', [
                        'error' => $e->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                        'user_id' => $event->user->getAuthIdentifier(),
=======
                        'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8055579 (.)
=======
                        'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8d82f8c (.)
                    ]);
                }
            }

            // Log dell'evento
            Log::info('Logout effettuato', [
                'user_id' => $event->user->getAuthIdentifier(),
                'device_id' => $device->id,
<<<<<<< HEAD
<<<<<<< HEAD
                'timestamp' => now(),
=======
                'timestamp' => now()
>>>>>>> 8055579 (.)
=======
                'timestamp' => now()
>>>>>>> 8d82f8c (.)
            ]);

        } catch (\Exception $e) {
            Log::error('Errore durante il logout', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
<<<<<<< HEAD
<<<<<<< HEAD
                'user_id' => $event->user->getAuthIdentifier(),
=======
                'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8055579 (.)
=======
                'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8d82f8c (.)
            ]);
        }
    }

    /**
     * Rimuove i remember tokens.
     */
    public function forgetRememberTokens(Logout $event): void
    {
        if ($event->user && $event->user instanceof HasAuthentications) {
            try {
                $event->user->authentications()->whereNotNull('remember_token')->update([
                    'remember_token' => null,
                ]);
            } catch (\Exception $e) {
                Log::error('Errore durante la rimozione dei remember tokens', [
                    'error' => $e->getMessage(),
<<<<<<< HEAD
<<<<<<< HEAD
                    'user_id' => $event->user->getAuthIdentifier(),
=======
                    'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8055579 (.)
=======
                    'user_id' => $event->user->getAuthIdentifier()
>>>>>>> 8d82f8c (.)
                ]);
            }
        }
    }
}
