<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Support\Carbon;
use Laravel\Passport\RefreshToken as PassportRefreshToken;

/**
 * Modules\User\Models\OauthRefreshToken.
 *
 * @property OauthAccessToken|null $accessToken
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken query()
 *
=======
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken query()
>>>>>>> 8055579 (.)
=======
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken query()
>>>>>>> 8d82f8c (.)
 * @property string $id
 * @property string $access_token_id
 * @property bool $revoked
 * @property Carbon|null $expires_at
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthRefreshToken whereRevoked($value)
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
 * @mixin IdeHelperOauthRefreshToken
 * @mixin \Eloquent
 */
class OauthRefreshToken extends PassportRefreshToken
{
    /*
     * @var string
     */
    protected $connection = 'user';

    // protected $fillable = ['id', 'access_token_id', 'revoked', 'expires_at'];
}
