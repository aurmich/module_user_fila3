<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Modules\Xot\Contracts\ProfileContract;

/**
<<<<<<< HEAD
 * 
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam query()
=======
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProfileTeam query()
 *
>>>>>>> 67cd443 (.)
 * @mixin \Eloquent
 */
class ProfileTeam extends TeamUser {}
