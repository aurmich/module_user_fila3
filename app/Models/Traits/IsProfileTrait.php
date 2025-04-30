<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
/**
 * Modulo User - Trait per il profilo utente
 *
 * Questo trait implementa funzionalità comuni per i modelli di profilo utente nell'applicazione,
 * tra cui relazioni con utenti, dispositivi e team, gestione dei ruoli, e accessori per attributi
 * comuni come nome, cognome e avatar.
 *
 * Il trait supporta:
 * - Relazione con il modello utente
 * - Gestione dei ruoli utente (incluso super-admin)
 * - Gestione dispositivi collegati (mobile e altri)
 * - Relazioni con team
 * - Accessori per attributi derivati (nome completo, username, avatar)
 * - Integrazione con MediaLibrary per la gestione degli avatar
 */

<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
namespace Modules\User\Models\Traits;

use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Modules\User\Models\Device;
use Modules\User\Models\DeviceUser;
use Modules\User\Models\Role;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Exceptions\RoleDoesNotExist;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
/**
 * Trait per aggiungere funzionalità di profilo ai modelli utente.
 *
 * Questo trait può essere utilizzato da qualsiasi modello che deve funzionare
 * come profilo utente nell'applicazione.
 */
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
trait IsProfileTrait
{
    use InteractsWithMedia;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * Relazione con l'utente a cui appartiene il profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\UserContract, static>
     */
    public function user(): BelongsTo
    {
        /** @var class-string<\Illuminate\Database\Eloquent\Model&\Modules\Xot\Contracts\UserContract> $userClass */
        $userClass = XotData::make()->getUserClass();

        // @phpstan-ignore-next-line
        return $this->belongsTo($userClass);
    }

    /**
     * Ottiene il nome completo dell'utente.
     * Utilizza prima i dati del profilo, altrimenti ricade sul nome dell'utente.
     *
     * @param string|null $value Il valore attuale dell'attributo
     * 
     * @return string|null Il nome completo dell'utente
     */
<<<<<<< HEAD
=======
=======
     * Undocumented function.
     * return BelongsTo<UserContract>.
     */
    public function user(): BelongsTo
    {
        $userClass = XotData::make()->getUserClass();

        return $this->belongsTo($userClass);
    }

    // ---- mutators
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function getFullNameAttribute(?string $value): ?string
    {
        if ($value !== null) {
            return $value;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $user = $this->user;
        if ($user === null) {
            return null;
        }

        $res = $this->first_name . ' ' . $this->last_name;
<<<<<<< HEAD
=======
=======
        $res = $this->first_name.' '.$this->last_name;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        if (mb_strlen($res) > 2) {
            return $res;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return $user->name;
    }

    /**
     * Ottiene il nome dell'utente.
     * Se non presente nel profilo, lo recupera dall'utente collegato.
     *
     * @param string|null $value Il valore attuale dell'attributo
     * 
     * @return string|null Il nome dell'utente
     */
<<<<<<< HEAD
=======
=======
        return $this->user?->name;
    }

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function getFirstNameAttribute(?string $value): ?string
    {
        if ($value !== null) {
            return $value;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev

        $user = $this->user;
        if ($user === null) {
            return null;
        }

        $value = $user->first_name;
        if ($value === null) {
            return null;
        }
<<<<<<< HEAD
=======
=======
        $value = $this->user?->first_name;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        $this->update(['first_name' => $value]);

        return $value;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Ottiene il cognome dell'utente.
     * Se non presente nel profilo, lo recupera dall'utente collegato.
     *
     * @param string|null $value Il valore attuale dell'attributo
     * 
     * @return string|null Il cognome dell'utente
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function getLastNameAttribute(?string $value): ?string
    {
        if ($value !== null) {
            return $value;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev

        $user = $this->user;
        if ($user === null) {
            return null;
        }

        $value = $user->last_name;
        if ($value === null) {
            return null;
        }
<<<<<<< HEAD
=======
=======
        $value = $this->user?->last_name;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        $this->update(['last_name' => $value]);

        return $value;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Verifica se l'utente ha il ruolo di super-admin.
     *
     * @return bool True se l'utente è super-admin, altrimenti false
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function isSuperAdmin(): bool
    {
        if ($this->user === null) {
            return false;
        }

        return $this->user->hasRole('super-admin');
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Verifica se l'utente ha il ruolo che nega i super-admin.
     *
     * @return bool True se l'utente ha il ruolo negate-super-admin, altrimenti false
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function isNegateSuperAdmin(): bool
    {
        if ($this->user === null) {
            return false;
        }

        return $this->user->hasRole('negate-super-admin');
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Toggle del ruolo super-admin per l'utente.
     * Se l'utente è super-admin, rimuove questo ruolo e assegna negate-super-admin.
     * Se l'utente non è super-admin, assegna super-admin e rimuove negate-super-admin.
     *
     * @throws \Exception Se l'utente non è disponibile
     * 
     * @return void
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function toggleSuperAdmin(): void
    {
        $user = $this->user;
        if ($user === null) {
<<<<<<< HEAD
            throw new \Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
            throw new \Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        }
        $to_assign = 'super-admin';
        $to_remove = 'negate-super-admin';
        if ($this->isSuperAdmin()) {
            $to_assign = 'negate-super-admin';
            $to_remove = 'super-admin';
        }

        try {
            $user->assignRole($to_assign);
            $user->removeRole($to_remove);
        } catch (RoleDoesNotExist $e) {
            $role_assign = Role::updateOrCreate(['name' => $to_assign], ['team_id' => null]);
            $role_remove = Role::updateOrCreate(['name' => $to_remove], ['team_id' => null]);
            $user->roles()->attach($role_assign);
            $user->roles()->detach($role_remove);
        } catch (\Exception $e) {
            Notification::make()
                ->title('Exception !')
                ->danger()
                ->persistent()
                ->body($e->getMessage())
                ->send();
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Relazione con i dispositivi mobili associati al profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Modules\User\Models\Device, static>
     */
    public function mobileDevices(): BelongsToMany
    {
        // @phpstan-ignore-next-line
        return $this->belongsToMany(Device::class, 'mobile_device_users', 'profile_id', 'device_id')
            ->withPivot('token')
            ->withTimestamps();
    }

    /**
     * Relazione con tutti i dispositivi associati al profilo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Modules\User\Models\Device, static>
     */
    public function devices(): BelongsToMany
    {
        // @phpstan-ignore-next-line
        return $this->belongsToMany(Device::class, 'device_users', 'profile_id', 'device_id')
            ->withPivot('token')
            ->withTimestamps();
    }

    /**
     * Relazione con gli utenti di dispositivi mobili.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\DeviceUser, static>
     */
    public function mobileDeviceUsers(): HasMany
    {
        // @phpstan-ignore-next-line
        return $this->hasMany(DeviceUser::class, 'profile_id')->where('type', 'mobile');
    }

    /**
     * Relazione con gli utenti di dispositivi generici.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\User\Models\DeviceUser, static>
     */
    public function deviceUsers(): HasMany
    {
        // @phpstan-ignore-next-line
        return $this->hasMany(DeviceUser::class, 'profile_id');
    }

    /**
     * Ottiene i token dei dispositivi mobili.
     *
     * @return \Illuminate\Support\Collection<int|string, string>
     */
    public function getMobileDeviceTokens(): Collection
    {
        // PHPStan livello 9 richiede il controllo che il risultato sia del tipo corretto
        $tokens = $this->mobileDeviceUsers()
            ->pluck('token')
            ->filter(fn($value) => $value !== null && is_string($value));

        /** @var \Illuminate\Support\Collection<int|string, string> */
        return $tokens;
    }



    /**
     * Get the user's user_name.
     * Ottiene il nome utente dal modello utente collegato.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute<string|null, never>
<<<<<<< HEAD
=======
=======
    public function mobileDevices(): BelongsToMany
    {
        return $this->devices();
    }

    public function devices(): BelongsToMany
    {
        return $this
            ->belongsToManyX(
                related: Device::class,
                table: null,
                foreignPivotKey: 'user_id',
                relatedPivotKey: null,
                parentKey: 'user_id',
                relatedKey: null,
                relation: null,
            );
    }

    public function mobileDeviceUsers(): HasMany
    {
        return $this->deviceUsers();
    }

    public function deviceUsers(): HasMany
    {
        return $this->hasMany(
            related: DeviceUser::class,
            foreignKey: 'user_id',
            localKey: 'user_id',
        );
    }

    /**
     * @return Collection<(int|string), mixed>
     */
    public function getMobileDeviceTokens(): Collection
    {
        return $this
            ->mobileDeviceUsers()
            ->whereNotNull('push_notifications_token')
            ->where('push_notifications_enabled', '=', true)
            ->get()
            ->pluck('push_notifications_token');
    }

    /**
     * Get all of the teams the user belongs to.
     */
    public function teams(): BelongsToMany
    {
        $xot = XotData::make();
        $teamClass = $xot->getTeamClass();

        // $this->setConnection('mysql');
        return $this->belongsToManyX($teamClass, null, 'user_id', 'team_id', 'user_id');
        // ->as('membership')
    }

    /**
     * Get the user's user_name.
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    protected function userName(): Attribute
    {
        return Attribute::make(
            get: function (): ?string {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
                $user = $this->user;
                if ($user === null) {
                    return null;
                }
                return $user->name;
<<<<<<< HEAD
=======
=======
                return $this->user?->name;
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
            }
        );
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * Get the user's avatar URL.
     * Recupera l'URL dell'avatar dell'utente dalla MediaLibrary.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute<string, never>
<<<<<<< HEAD
=======
=======
     * Get the user's avatar.
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: function (): string {
                $value = $this->getFirstMediaUrl('avatar');

                return $value;
            }
        );
    }
}
