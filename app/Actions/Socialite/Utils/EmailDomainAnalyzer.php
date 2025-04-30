<?php

declare(strict_types=1);

namespace Modules\User\Actions\Socialite\Utils;

use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\User;
use Webmozart\Assert\Assert;

final class EmailDomainAnalyzer
{
    private User $ssoUser;

    public function __construct(
        private readonly string $ssoProvider,
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    ) {
        if (empty($ssoProvider)) {
            throw new \InvalidArgumentException('Il provider SSO non può essere vuoto');
        }
    }

    public function setUser(User $ssoUser): self
    {
        //if ($ssoUser === null) {
        //    throw new \InvalidArgumentException('L\'utente SSO non può essere null');
        //}
        $this->ssoUser = $ssoUser;
<<<<<<< HEAD
=======
=======
    ) {}

    public function setUser(User $ssoUser): self
    {
        $this->ssoUser = $ssoUser;

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        return $this;
    }

    public function hasUnrecognizedDomain(): bool
    {
        return ! $this->hasFirstPartyDomain() && ! $this->hasClientDomain();
    }

    public function hasFirstPartyDomain(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (!isset($this->ssoUser)) {
            throw new \RuntimeException('L\'utente SSO non è stato impostato. Utilizzare setUser() prima di chiamare questo metodo.');
        }

        $email = $this->ssoUser->getEmail();
        if (!is_string($email) || empty($email)) {
            return false;
        }

        $domain = $this->firstPartyDomain();
        if ($domain === null || empty($domain)) {
            return false;
        }

        $emailDomain = Str::of($email)->after('@')->toString();
        $configDomain = Str::of($domain)->after('@')->toString();

        return $emailDomain === $configDomain;
<<<<<<< HEAD
=======
=======
        return Str::of((string) $this->firstPartyDomain())
            ->after('@')
            ->exactly(
                Str::of((string) $this->ssoUser->getEmail())->after('@'),
            );
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    public function hasClientDomain(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (!isset($this->ssoUser)) {
            throw new \RuntimeException('L\'utente SSO non è stato impostato. Utilizzare setUser() prima di chiamare questo metodo.');
        }

        $email = $this->ssoUser->getEmail();
        if (!is_string($email) || empty($email)) {
            return false;
        }

        $clientEmailDomain = $this->clientDomain();
        if ($clientEmailDomain === null || empty($clientEmailDomain)) {
            return false;
        }

        $emailDomain = Str::of($email)->after('@')->toString();
        $configDomain = Str::of($clientEmailDomain)->after('@')->toString();

        return $emailDomain === $configDomain;
<<<<<<< HEAD
=======
=======
        $clientEmailDomain = $this->clientDomain();

        if ($clientEmailDomain === null || $clientEmailDomain === '') {
            return false;
        }

        return Str::of($clientEmailDomain)
            ->after('@')
            ->exactly(
                Str::of((string) $this->ssoUser->getEmail())->after('@'),
            );
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }

    private function firstPartyDomain(): ?string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $res = config(sprintf('services.%s.email_domains.first_party.tld', $this->ssoProvider));
        if (!is_string($res) && $res !== null) {
            return null;
        }
<<<<<<< HEAD
=======
=======
        Assert::nullOrString($res = config(sprintf('services.%s.email_domains.first_party.tld', $this->ssoProvider)));

>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        return $res;
    }

    private function clientDomain(): ?string
    {
        $domain = config(sprintf('services.%s.email_domains.client.tld', $this->ssoProvider));
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (!is_string($domain) && $domain !== null) {
            return null;
        }
        return $domain;
<<<<<<< HEAD
=======
=======
        if (is_string($domain)) {
            return $domain;
        }

        if (is_null($domain)) {
            return $domain;
        }

        throw new \Exception('wip');
        /*
        return empty($domain)
            ? null
            : $domain;
            */
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
    }
}
