<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 * EX XotBasePolicy.
 */

namespace Modules\User\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\ProfileContract;

// use Modules\Xot\Datas\XotData;

abstract class UserPermissionBasePolicy
{
    use HandlesAuthorization;

    public function before(ProfileContract $user, string $ability): ?bool
    {

        return null;
    }
}
