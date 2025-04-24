<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions;

// use DutchCodingCompany\FilamentSocialite\FilamentSocialite;
use Jenssegers\Agent\Agent;
use Modules\User\Models\Device;
use Spatie\QueueableAction\QueueableAction;

class GetCurrentDeviceAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(?string $mobile_id = null): Device
    {
<<<<<<< HEAD
        $agent = new Agent();

        $device = $agent->device();
        $platform = $agent->platform();
        $browser = $agent->browser();

        $data = [
            'device' => is_string($device) ? $device : 'unknown',
            'platform' => is_string($platform) ? $platform : 'unknown',
            'browser' => is_string($browser) ? $browser : 'unknown',
=======
        $agent = new Agent;

        $data = [
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' => $agent->browser(),
            // 'version' => $agent->version($agent->browser()),
>>>>>>> 67cd443 (.)
            'is_desktop' => $agent->isDesktop(),
            'is_mobile' => $agent->isMobile(),
            'is_tablet' => $agent->isTablet(),
            'is_phone' => $agent->isPhone(),
            'is_robot' => $agent->isRobot(),
<<<<<<< HEAD
        ];

        $up = [
            'version' => is_string($browser) ? $agent->version($browser) : 'unknown',
            'robot' => is_string($agent->robot()) ? $agent->robot() : 'unknown',
        ];

        if ($mobile_id !== null) {
            if (empty($mobile_id)) {
                throw new \InvalidArgumentException('L\'ID mobile non può essere vuoto');
            }

            $device = Device::firstOrCreate(['mobile_id' => $mobile_id]);
            if ($device === null) {
                throw new \RuntimeException('Impossibile creare o trovare il dispositivo');
            }
=======
            // 'robot' => $agent->robot(),
        ];
        $up = [
            'version' => $agent->version((string) $agent->browser()),
            'robot' => $agent->robot(),
        ];
        if ($mobile_id !== null) {
            $device = Device::firstOrCreate(['mobile_id' => $mobile_id]);
>>>>>>> 67cd443 (.)
            $device->update([...$data, ...$up]);

            return $device;
        }

        $device = Device::firstOrCreate($data);
<<<<<<< HEAD
        if ($device === null) {
            throw new \RuntimeException('Impossibile creare o trovare il dispositivo');
        }
=======
>>>>>>> 67cd443 (.)
        $device->update($up);

        return $device;
    }
}
