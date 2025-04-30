<?php

declare(strict_types=1);

/**
 * @see https://github.com/rappasoft/laravel-authentication-log/blob/main/src/Listeners/FailedLoginListener.php
 */

namespace Modules\User\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Modules\User\Contracts\HasAuthentications;
=======
<<<<<<< HEAD
use Modules\User\Contracts\HasAuthentications;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

// use Rappasoft\LaravelAuthenticationLog\Notifications\FailedLogin;
// use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class FailedLoginListener
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    protected Request $request;

    /**
     * @param Request $request
     */
<<<<<<< HEAD
=======
=======
    public Request $request;

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Handle the event.
     */
    public function handle(Failed $event): void
    {
        if ($event->user && $event->user instanceof HasAuthentications) {
<<<<<<< HEAD
=======
=======
    public function handle(Failed $event): void
    {
        if ($event->user) {
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
            $ip = $this->request->ip();
            $userAgent = $this->request->userAgent();
            // $location = optional(geoip()->getLocation($ip))->toArray();
            $location = [];

            $log = $event->user->authentications()->create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'login_at' => now(),
                'login_successful' => false,
                'location' => $location,
            ]);

            // if (config('authentication-log.notifications.failed-login.enabled')) {
            //    $failedLogin = config('authentication-log.notifications.failed-login.template') ?? FailedLogin::class;
            //    $event->user->notify(new $failedLogin($log));
            // }
        }
    }
}
