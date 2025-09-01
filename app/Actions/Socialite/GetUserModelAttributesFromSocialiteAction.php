<?php

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

use Laravel\Socialite\Contracts\User as SocialiteUserContract;
use Modules\User\Actions\Socialite\Utils\UserNameFieldsResolver;
use Spatie\QueueableAction\QueueableAction;

class GetUserModelAttributesFromSocialiteAction
{
    use QueueableAction;

    public readonly string $name;

    public readonly string $first_name;

    public readonly string $last_name;

    public readonly string $email;

    public function __construct(
        private readonly string $provider,
        private readonly SocialiteUserContract $oauthUser,
    ) {
        if (empty($provider)) {
            throw new \InvalidArgumentException('Il provider non può essere vuoto');
        }

        $nameFieldsResolver = app(UserNameFieldsResolver::class, ['user' => $this->oauthUser]);
        if ($nameFieldsResolver === null) {
            throw new \RuntimeException('Impossibile istanziare UserNameFieldsResolver');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($nameFieldsResolver->name)) {
            throw new \RuntimeException('Il nome deve essere una stringa');
        }
        if (! is_string($nameFieldsResolver->last_name)) {
=======
        if (!is_string($nameFieldsResolver->name)) {
            throw new \RuntimeException('Il nome deve essere una stringa');
        }
        if (!is_string($nameFieldsResolver->last_name)) {
>>>>>>> 8055579 (.)
=======
        if (!is_string($nameFieldsResolver->name)) {
            throw new \RuntimeException('Il nome deve essere una stringa');
        }
        if (!is_string($nameFieldsResolver->last_name)) {
>>>>>>> 8d82f8c (.)
            throw new \RuntimeException('Il cognome deve essere una stringa');
        }

        $this->name = $nameFieldsResolver->name;
        $this->first_name = $nameFieldsResolver->name;
        $this->last_name = $nameFieldsResolver->last_name;

        $email = $this->oauthUser->getEmail();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($email) || empty($email)) {
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8055579 (.)
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8d82f8c (.)
            throw new \RuntimeException('L\'email deve essere una stringa non vuota');
        }
        $this->email = $email;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }
}
