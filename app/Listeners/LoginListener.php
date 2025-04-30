<?php

declare(strict_types=1);

namespace Modules\User\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Modules\User\Actions\GetCurrentDeviceAction;
use Modules\User\Models\DeviceUser;
<<<<<<< HEAD
use Modules\User\Contracts\HasAuthentications;
=======
<<<<<<< HEAD
use Modules\User\Contracts\HasAuthentications;
=======
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

class LoginListener
{
    public Request $request;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        // Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
        $device = app(GetCurrentDeviceAction::class)->execute();
        $user = $event->user;
<<<<<<< HEAD
        // $user->devices()->syncWithoutDetaching($device->,['login_at'=>now(),'logout_at'=>null]);
        // $res= $user->devices()->syncWithPivotValues($device->,['login_at'=>now(),'logout_at'=>null]);
=======
<<<<<<< HEAD
        // $user->devices()->syncWithoutDetaching($device->,['login_at'=>now(),'logout_at'=>null]);
        // $res= $user->devices()->syncWithPivotValues($device->,['login_at'=>now(),'logout_at'=>null]);
=======
        // $user->devices()->syncWithoutDetaching($device->id,['login_at'=>now(),'logout_at'=>null]);
        // $res= $user->devices()->syncWithPivotValues($device->id,['login_at'=>now(),'logout_at'=>null]);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        $pivot = DeviceUser::firstOrCreate(['user_id' => $user->getAuthIdentifier(), 'device_id' => $device->id]);
        $pivot->update(['login_at' => now(), 'logout_at' => null]);

        // -----
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if ($user && $user instanceof HasAuthentications) {
            $ip = $this->request->ip();
            $userAgent = $this->request->userAgent();
            //$location = optional(geoip()->getLocation($ip))->toArray();
            $location = [];

            $log = $user->authentications()->create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'login_at' => now(),
                'login_successful' => true,
                'location' => $location,
            ]);
        }
<<<<<<< HEAD
=======
=======
        $userAgent = $this->request->userAgent();
        $ip = $this->request->ip();
        // $location = optional(geoip()->getLocation($ip))->toArray();
        $location = [];
        $log = $user->authentications()->create([
            'ip_address' => $ip,
            'user_agent' => $userAgent,
            'login_at' => now(),
            'login_successful' => true,
            'location' => $location,
        ]);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }
}
