<?php

declare(strict_types=1);

namespace Modules\Setting\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Modules\Setting\Database\Factories\SettingFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Modules\Setting\Models\Setting.
 *
 * @property int $id
 * @property string $group
 * @property string $name
 * @property int $locked
 * @property mixed $payload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Modules\Setting\Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereGroup($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereLocked($value)
 * @method static Builder|Setting whereName($value)
 * @method static Builder|Setting wherePayload($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Setting extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [''];
    
    // use HasUuids;
}
