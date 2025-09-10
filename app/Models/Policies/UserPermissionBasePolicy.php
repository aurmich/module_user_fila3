<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 * EX XotBasePolicy.
 */

namespace Modules\User\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Str;
use Modules\User\Models\Permission;
use Modules\Xot\Contracts\UserContract;

// use Modules\Xot\Datas\XotData;

abstract class UserPermissionBasePolicy extends UserBasePolicy
{
   
}
