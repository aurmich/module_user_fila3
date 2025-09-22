<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 * EX XotBasePolicy.
 */

namespace Modules\User\Models\Policies;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Str;
use Modules\User\Models\Permission;
use Modules\Xot\Contracts\UserContract;
=======

>>>>>>> 079c9da7 (.)
=======

=======
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Modules\User\Models\Permission;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Auth\Access\HandlesAuthorization;
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======

>>>>>>> 8b2de289 (.)

// use Modules\Xot\Datas\XotData;

abstract class UserPermissionBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(UserContract $user, string $ability): null|bool
    {
        if ($user->hasRole('super-admin')) {
            return true;
        }

        $class_name = class_basename(static::class);
        $permission_name = Str::of($class_name)
            ->before('Policy')
            ->lower()
            ->append('.' . $ability)
            ->toString();

        try {
            Permission::firstOrCreate(['name' => $permission_name]);
        } catch (\Exception $e) {
            // dddx($e);
        }
        if ($user->hasPermissionTo($permission_name)) {
            return true;
        }
=======
    public function before(UserContract $user, string $ability): ?bool
    {

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 079c9da7 (.)
=======
=======
        
        if ($user->hasRole('super-admin')) {
            return true;
        }
       
        $class_name=class_basename(static::class);
        $permission_name=Str::of($class_name)
        ->before('Policy')
        ->lower()
        ->append('.'.$ability)
        ->toString();
        
        try {
            Permission::firstOrCreate(['name' => $permission_name]);
        } catch (\Exception $e) {
            //dddx($e);
        }
        if($user->hasPermissionTo($permission_name)){
            return true;
        }
        
>>>>>>> e5f94125 (.)
>>>>>>> 10cce5c4 (.)
=======
>>>>>>> 8b2de289 (.)

        return null;
    }
}
