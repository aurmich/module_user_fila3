<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

use Illuminate\Database\Eloquent\Model;
use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Handles the creation of a new user from a socialite authentication.
 */
class CreateUserAction
{
    use QueueableAction;

    /**
     * Execute the action to create a new user from socialite authentication.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $provider  The socialite provider name (e.g., 'github', 'google')
     * @param  SocialiteUserContract  $oauthUser  The socialite user instance
=======
     * @param string $provider The socialite provider name (e.g., 'github', 'google')
     * @param SocialiteUserContract $oauthUser The socialite user instance
>>>>>>> 8055579 (.)
=======
     * @param string $provider The socialite provider name (e.g., 'github', 'google')
     * @param SocialiteUserContract $oauthUser The socialite user instance
>>>>>>> 8d82f8c (.)
     * @return UserContract The created user instance
     */
    public function execute(string $provider, SocialiteUserContract $oauthUser): UserContract
    {
        // Resolve user attributes from the identity provider
        $userAttributes = app(GetUserModelAttributesFromSocialiteAction::class, [
            'provider' => $provider,
            'oauthUser' => $oauthUser,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        // Get the user class from Xot configuration
        $userClass = XotData::make()->getUserClass();

=======
        
        // Get the user class from Xot configuration
        $userClass = XotData::make()->getUserClass();
        
>>>>>>> 8055579 (.)
=======
        
        // Get the user class from Xot configuration
        $userClass = XotData::make()->getUserClass();
        
>>>>>>> 8d82f8c (.)
        // Create the new user
        $newlyCreatedUser = $userClass::create([
            'name' => $userAttributes->name,
            'first_name' => $userAttributes->name,
            'last_name' => $userAttributes->last_name,
            'email' => $userAttributes->email,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        // Ensure the created user implements UserContract
        Assert::isInstanceOf($newlyCreatedUser, Model::class);
        Assert::isInstanceOf($newlyCreatedUser, UserContract::class);

=======
        
        // Ensure the created user implements UserContract
        Assert::isInstanceOf($newlyCreatedUser, Model::class);
        Assert::isInstanceOf($newlyCreatedUser, UserContract::class);
        
>>>>>>> 8055579 (.)
=======
        
        // Ensure the created user implements UserContract
        Assert::isInstanceOf($newlyCreatedUser, Model::class);
        Assert::isInstanceOf($newlyCreatedUser, UserContract::class);
        
>>>>>>> 8d82f8c (.)
        // Assign default roles to the new user
        app(SetDefaultRolesBySocialiteUserAction::class, [
            'provider' => $provider,
            'userModel' => $newlyCreatedUser,
        ])->execute(userModel: $newlyCreatedUser, oauthUser: $oauthUser);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        // Return the refreshed user instance
        /** @var UserContract $refreshedUser */
        $refreshedUser = $newlyCreatedUser->refresh();

        return $refreshedUser;
    }
}
