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
>>>>>>> 67cd443 (.)

// use Rappasoft\LaravelAuthenticationLog\Notifications\FailedLogin;
// use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class FailedLoginListener
{
<<<<<<< HEAD
    protected Request $request;

    /**
     * @param Request $request
     */
=======
    public Request $request;

>>>>>>> 67cd443 (.)
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

<<<<<<< HEAD
    /**
     * Handle the event.
     */
    public function handle(Failed $event): void
    {
        if ($event->user && $event->user instanceof HasAuthentications) {
=======
    public function handle(Failed $event): void
    {
        if ($event->user) {
>>>>>>> 67cd443 (.)
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
