<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Support\Carbon;
use Modules\User\Database\Factories\PasswordResetFactory;

/**
 * Modules\User\Models\PasswordReset.
 *
 * @property int $id
 * @property string $email
 * @property string $token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $user_id
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static PasswordResetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereUserId($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property string|null $uuid
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereUuid($value)
 * @method static PasswordReset|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, PasswordReset> get()
 * @method static PasswordReset create(array $attributes = [])
 * @method static PasswordReset firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperPasswordReset
 * @mixin \Eloquent
 */
class PasswordReset extends BaseModel
{
    /**
     * @var list<string>
     *
     * @psalm-var list{'email', 'token', 'created_at', 'updated_at', 'created_by', 'updated_by'}
     */
    protected $fillable = ['email', 'token', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'password_resets';
}// end class PasswordReset
