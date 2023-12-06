<?php

declare(strict_types=1);

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Carbon;
use Laravel\Passport\Client as PassportClient;

/**
 * Modules\User\Models\OauthClient.
 *
 * @property string                                                 $id
 * @property string|null                                            $user_id
 * @property string                                                 $name
 * @property string|null                                            $secret
 * @property string|null                                            $provider
 * @property string                                                 $redirect
 * @property bool                                                   $personal_access_client
 * @property bool                                                   $password_client
 * @property bool                                                   $revoked
 * @property Carbon|null                                            $created_at
 * @property Carbon|null                                            $updated_at
 * @property Collection<int, \Modules\User\Models\OauthAuthCode>    $authCodes
 * @property int|null                                               $auth_codes_count
 * @property string|null                                            $plain_secret
 * @property Collection<int, \Modules\User\Models\OauthAccessToken> $tokens
 * @property int|null                                               $tokens_count
 * @property \Modules\User\Models\User|null                         $user
 *
 * @method static \Laravel\Passport\Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static Builder|OauthClient                                newModelQuery()
 * @method static Builder|OauthClient                                newQuery()
 * @method static Builder|OauthClient                                query()
 * @method static Builder|OauthClient                                whereCreatedAt($value)
 * @method static Builder|OauthClient                                whereId($value)
 * @method static Builder|OauthClient                                whereName($value)
 * @method static Builder|OauthClient                                wherePasswordClient($value)
 * @method static Builder|OauthClient                                wherePersonalAccessClient($value)
 * @method static Builder|OauthClient                                whereProvider($value)
 * @method static Builder|OauthClient                                whereRedirect($value)
 * @method static Builder|OauthClient                                whereRevoked($value)
 * @method static Builder|OauthClient                                whereSecret($value)
 * @method static Builder|OauthClient                                whereUpdatedAt($value)
 * @method static Builder|OauthClient                                whereUserId($value)
 *
 * @mixin \Eloquent
 */
class OauthClient extends PassportClient
{
    use HasUuids;

    /**
     * @var string
     */
    protected $connection = 'user';

    // class OauthClient extends BaseModel {
    /*
     * ---.
     */
    /*
    protected $fillable = [
        'id', 'user_id', 'name', 'secret', 'provider', 'redirect',
        'personal_access_client', 'password_client', 'revoked',
    ];
    */
}
