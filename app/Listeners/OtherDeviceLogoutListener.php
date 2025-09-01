<?php

declare(strict_types=1);

namespace Modules\User\Listeners;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Auth\Events\Login;
=======
>>>>>>> 8d82f8c (.)
use Illuminate\Auth\Events\OtherDeviceLogout;
use Illuminate\Http\Request;
use Modules\User\Models\AuthenticationLog;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\OtherDeviceLogout;
use Illuminate\Http\Request;
use Modules\User\Models\AuthenticationLog;
=======
>>>>>>> 8d82f8c (.)
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Modules\User\Contracts\HasAuthentications;
<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)

// use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class OtherDeviceLogoutListener
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle(OtherDeviceLogout $event): void
    {
        if ($event->user && $event->user instanceof HasAuthentications) {
            $user = $event->user;
            $ip = $this->request->ip();

            $userAgent = $this->request->userAgent();
            $authenticationLog = $user->authentications()->whereIpAddress($ip)->whereUserAgent($userAgent)->first();

            if (! $authenticationLog) {
                $authenticationLog = new AuthenticationLog([
                    'ip_address' => $ip,
                    'user_agent' => $userAgent,
                ]);
            }

            foreach ($user->authentications()->whereLoginSuccessful(true)->whereNull('logout_at')->get() as $log) {
                if ($log->getKey() !== $authenticationLog->getKey()) {
                    $log->update([
                        'cleared_by_user' => true,
                        'logout_at' => now(),
                    ]);
                }
            }
        }
    }

    /**
     * Handle the event.
     */
    public function handleLogin(Login $event): void
    {
        if (! config('authentication-log.notify_other_devices', false)) {
            return;
        }

        $newIP = $this->request->ip();
        $newUserAgent = $this->request->userAgent();

        $user = $event->user;
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $user || ! ($user instanceof HasAuthentications)) {
=======
        if (!$user || !($user instanceof HasAuthentications)) {
>>>>>>> 8055579 (.)
=======
        if (!$user || !($user instanceof HasAuthentications)) {
>>>>>>> 8d82f8c (.)
            return;
        }

        $logs = $user->authentications()
            ->orderByDesc('login_at')
            ->where(function ($query) use ($newIP, $newUserAgent) {
                $query->where('ip_address', '!=', $newIP)
                    ->orWhere('user_agent', '!=', $newUserAgent);
            })
            ->where('login_successful', true)
            ->get();
    }
}
