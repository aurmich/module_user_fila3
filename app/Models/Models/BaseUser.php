<?php

declare(strict_types=1);

namespace Modules\User\Models\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

abstract class BaseUser extends Authenticatable
{
    use Notifiable;

    /**
     * Get the entity's notifications.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     */
    public function notifications(): MorphMany
    {
        return $this->morphMany(config('notifications.notification_model', \Illuminate\Notifications\DatabaseNotification::class), 'notifiable');
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
     *
     * @return MorphMany<\Illuminate\Notifications\DatabaseNotification, $this>
     */
    public function notifications(): MorphMany
    {
        /** @var class-string<\Illuminate\Notifications\DatabaseNotification> $notificationClass */
        $notificationClass = config('notifications.notification_model', \Illuminate\Notifications\DatabaseNotification::class);
        
        return $this->morphMany($notificationClass, 'notifiable');
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 15cb84fb (fix collisions)
     */
    public function notifications(): MorphMany
    {
        return $this->morphMany(config('notifications.notification_model', \Illuminate\Notifications\DatabaseNotification::class), 'notifiable');
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
     *
     * @return MorphMany<\Illuminate\Notifications\DatabaseNotification, $this>
     */
    public function notifications(): MorphMany
    {
        /** @var class-string<\Illuminate\Notifications\DatabaseNotification> $notificationClass */
        $notificationClass = config('notifications.notification_model', \Illuminate\Notifications\DatabaseNotification::class);
        
        return $this->morphMany($notificationClass, 'notifiable');
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> fb6fbaa2 (move resources/lang to lang)
    }
}
