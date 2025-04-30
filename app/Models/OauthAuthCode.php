<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Support\Carbon;
use Laravel\Passport\AuthCode as PassportAuthCode;

/**
 * Modules\User\Models\OauthAuthCode.
 *
 * @property OauthClient|null $client
<<<<<<< HEAD
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode query()
=======
<<<<<<< HEAD
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode query()
=======
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode query()
 *
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @property string $id
 * @property string|null $user_id
 * @property string|null $client_id
 * @property string|null $scopes
 * @property bool $revoked
 * @property Carbon|null $expires_at
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 *
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAuthCode whereUserId($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
 *
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 * @mixin \Eloquent
 */
class OauthAuthCode extends PassportAuthCode
{
    /** @var string */
    protected $connection = 'user';

    // protected $fillable = ['id', 'user_id', 'client_id', 'scopes', 'revoked', 'expires_at'];
}
