<?php

declare(strict_types=1);

namespace Modules\User\Actions\Socialite\Utils;

use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
>>>>>>> 8055579 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 8d82f8c (.)

final class EmailDomainAnalyzer
{
    private User $ssoUser;

    public function __construct(
        private readonly string $ssoProvider,
    ) {
        if (empty($ssoProvider)) {
            throw new \InvalidArgumentException('Il provider SSO non può essere vuoto');
        }
    }

    public function setUser(User $ssoUser): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // if ($ssoUser === null) {
=======
        //if ($ssoUser === null) {
>>>>>>> 8d82f8c (.)
        //    throw new \InvalidArgumentException('L\'utente SSO non può essere null');
        //}
        $this->ssoUser = $ssoUser;
<<<<<<< HEAD

=======
        //if ($ssoUser === null) {
        //    throw new \InvalidArgumentException('L\'utente SSO non può essere null');
        //}
        $this->ssoUser = $ssoUser;
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
        return $this;
    }

    public function hasUnrecognizedDomain(): bool
    {
        return ! $this->hasFirstPartyDomain() && ! $this->hasClientDomain();
    }

    public function hasFirstPartyDomain(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! isset($this->ssoUser)) {
=======
        if (!isset($this->ssoUser)) {
>>>>>>> 8055579 (.)
=======
        if (!isset($this->ssoUser)) {
>>>>>>> 8d82f8c (.)
            throw new \RuntimeException('L\'utente SSO non è stato impostato. Utilizzare setUser() prima di chiamare questo metodo.');
        }

        $email = $this->ssoUser->getEmail();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($email) || empty($email)) {
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8055579 (.)
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8d82f8c (.)
            return false;
        }

        $domain = $this->firstPartyDomain();
        if ($domain === null || empty($domain)) {
            return false;
        }

        $emailDomain = Str::of($email)->after('@')->toString();
        $configDomain = Str::of($domain)->after('@')->toString();

        return $emailDomain === $configDomain;
    }

    public function hasClientDomain(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! isset($this->ssoUser)) {
=======
        if (!isset($this->ssoUser)) {
>>>>>>> 8055579 (.)
=======
        if (!isset($this->ssoUser)) {
>>>>>>> 8d82f8c (.)
            throw new \RuntimeException('L\'utente SSO non è stato impostato. Utilizzare setUser() prima di chiamare questo metodo.');
        }

        $email = $this->ssoUser->getEmail();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($email) || empty($email)) {
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8055579 (.)
=======
        if (!is_string($email) || empty($email)) {
>>>>>>> 8d82f8c (.)
            return false;
        }

        $clientEmailDomain = $this->clientDomain();
        if ($clientEmailDomain === null || empty($clientEmailDomain)) {
            return false;
        }

        $emailDomain = Str::of($email)->after('@')->toString();
        $configDomain = Str::of($clientEmailDomain)->after('@')->toString();

        return $emailDomain === $configDomain;
    }

    private function firstPartyDomain(): ?string
    {
        $res = config(sprintf('services.%s.email_domains.first_party.tld', $this->ssoProvider));
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($res) && $res !== null) {
            return null;
        }

=======
        if (!is_string($res) && $res !== null) {
            return null;
        }
>>>>>>> 8055579 (.)
=======
        if (!is_string($res) && $res !== null) {
            return null;
        }
>>>>>>> 8d82f8c (.)
        return $res;
    }

    private function clientDomain(): ?string
    {
        $domain = config(sprintf('services.%s.email_domains.client.tld', $this->ssoProvider));
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($domain) && $domain !== null) {
            return null;
        }

=======
        if (!is_string($domain) && $domain !== null) {
            return null;
        }
>>>>>>> 8055579 (.)
=======
        if (!is_string($domain) && $domain !== null) {
            return null;
        }
>>>>>>> 8d82f8c (.)
        return $domain;
    }
}
