<?php

declare(strict_types=1);

namespace Modules\User\Models;

<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\User\Contracts\UserContract;
>>>>>>> 4b721437 (.)
use Modules\User\Database\Factories\ProfileFactory;
use Modules\User\Models\Pivots\DeviceProfile;
use Modules\User\Models\Pivots\ProfileTeam;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait as HasSchemalessAttributes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * User Profile Model
 * 
 * Represents a user profile with relationships to devices, teams, and roles.
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $user_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $bio
 * @property string|null $avatar
 * @property string|null $timezone
 * @property string|null $locale
 * @property array $preferences
 * @property string $status
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra
 * @property-read string $avatar
 * @property-read ProfileContract|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser> $deviceUsers
 * @property-read int|null $device_users_count
 * @property-read \Modules\User\Models\ProfileTeam|\Modules\User\Models\DeviceProfile|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $devices
 * @property-read int|null $devices_count
 * @property-read string|null $first_name
 * @property-read string|null $full_name
 * @property-read string|null $last_name
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser> $mobileDeviceUsers
 * @property-read int|null $mobile_device_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device> $mobileDevices
 * @property-read int|null $mobile_devices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read ProfileContract|null $updater
 * @property-read UserContract|null $user
 * @property-read string|null $user_name
 * @method static \Modules\User\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile withoutRole($roles, $guard = null)
 * @mixin IdeHelperProfile
<<<<<<< HEAD
 * @property string|null $post_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $firstname
 * @property string|null $surname
 * @property string|null $address
 * @property int|null $user_id
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $googleplace_url
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $campground
 * @property string|null $campground_short
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereUserId($value)
=======
>>>>>>> 4b721437 (.)
 * @mixin \Eloquent
 */
class Profile extends BaseProfile implements HasMedia
{
    use HasRoles;
    use InteractsWithMedia;
    use HasSchemalessAttributes;

    /**
     * The schemaless attributes.
     *
     * @var list<string>
     */
    protected $schemalessAttributes = [
        'extra',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';
}
