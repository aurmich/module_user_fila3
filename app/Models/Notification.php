<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\DatabaseNotification as BaseNotification;

/**
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $notifiable
 *
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification read()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification unread()
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static Notification create(array $attributes = [])
 * @method static Notification firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperNotification
 * @mixin \Eloquent
 */
class Notification extends BaseNotification
{
    use HasFactory;

    /** @var string */
    protected $connection = 'user';

    // protected $fillable = ['id', 'user_id', 'client_id', 'name', 'scopes', 'revoked', 'expires_at'];
}
