<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

class GetProviderScopesAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $provider): array
    {
        /**
         * @var array|\ArrayAccess
         */
        $services = config('services');
<<<<<<< HEAD
        $scopes = Arr::get($services, $provider . '.scopes');
        if (!\is_array($scopes)) {
=======
        $scopes = Arr::get($services, $provider.'.scopes');
        if (! \is_array($scopes)) {
>>>>>>> 079c9da7 (.)
            return [];
        }

        return $scopes;
    }
}
