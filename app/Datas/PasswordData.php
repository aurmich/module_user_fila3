<?php

/**
<<<<<<< HEAD
 * Classe per la gestione delle configurazioni delle password.
=======
<<<<<<< HEAD
 * Classe per la gestione delle configurazioni delle password.
=======
 * ---.
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 */

declare(strict_types=1);

namespace Modules\User\Datas;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\Rules\Password;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * Classe per la gestione dei dati relativi alle password.
 */
class PasswordData extends Data
{
    public function __construct(
        public int $otp_expiration_minutes = 5,
        public int $otp_length = 6,
        public int $expires_in = 60,
        public int $min = 8,
        public bool $mixedCase = true,
        public bool $letters = true,
        public bool $numbers = true,
        public bool $symbols = true,
        public bool $uncompromised = true,
        public int $compromisedThreshold = 0,
        public ?string $failMessage = null,
        private ?string $field_name = null,
    ) {
    }

    private static ?self $instance = null;

    /**
     * Crea un'istanza della classe PasswordData.
     *
     * @return self
     */
    public static function make(): self
    {
        if (! self::$instance) {
            /** @var array<string, mixed> $data */
<<<<<<< HEAD
=======
=======
 * Undocumented class.
 */
class PasswordData extends Data
{
    public int $otp_expiration_minutes = 60; // Durata in minuti della validità della password temporanea

    public int $otp_length = 6;  // Lunghezza del codice OTP

    public int $expires_in = 30; // The number of days before the password expires.

    public int $min = 6; // The minimum size of the password.

    public bool $mixedCase = false; // If the password requires at least one uppercase and one lowercase letter.

    public bool $letters = false; // If the password requires at least one letter.

    public bool $numbers = false; // If the password requires at least one number.

    public bool $symbols = false; // If the password requires at least one symbol.

    public bool $uncompromised = false; // If the password should not have been compromised in data leaks.

    public int $compromisedThreshold = 0; // The number of times a password can appear in data leaks before being considered compromised.

    public ?string $failMessage = null;

    private static ?self $instance = null;

    private string $field_name = 'new_password';

    public static function make(): self
    {
        if (! self::$instance) {
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
            $data = TenantService::getConfig('password');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Get the password validation rule.
     */
    public function getPasswordRule(): Password
    {
        $pwd = Password::min($this->min);

<<<<<<< HEAD
=======
=======
    public function getPasswordRule(): Password
    {
        $pwd = Password::min($this->min);
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        if ($this->mixedCase) {
            $pwd = $pwd->mixedCase();
        }
        if ($this->letters) {
            $pwd = $pwd->letters();
        }
        if ($this->numbers) {
            $pwd = $pwd->numbers();
        }
        if ($this->symbols) {
            $pwd = $pwd->symbols();
        }
        if ($this->uncompromised) {
            $pwd = $pwd->uncompromised($this->compromisedThreshold);
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        return $pwd;
    }

    /**
     * Get the validation messages.
     *
     * @return array<string, string>
     */
    public function getValidationMessages(): array
    {
        return [
            'required' => __('user::validation.required'),
            'same' => __('user::validation.same'),
        ];
    }

    /**
     * Get the helper text.
     */
    public function getHelperText(): string
    {
        $msg = 'La password deve essere composta da minimo '.$this->min.' caratteri';

        if ($this->mixedCase) {
            $msg .= ', contenere almeno una lettera maiuscola e una minuscola';
        }

        if ($this->letters) {
            $msg .= ', contenere almeno una lettera';
        }

        if ($this->numbers) {
            $msg .= ', contenere almeno un numero';
        }

        if ($this->symbols) {
            $msg .= ', contenere almeno un carattere speciale';
        }

        if ($this->uncompromised) {
            $msg .= ', non essere stata compromessa in precedenti violazioni di dati';
        }
<<<<<<< HEAD
=======
=======
        // $pwd = $pwd->message(__('user::validation'));
        // Cannot access protected property Illuminate\Validation\Rules\Password::$messages
        // $pwd->messages = array_merge($pwd->messages, __('user::validation'));
        // $pwd->fail(__('user::validation'));
        return $pwd;
    }

    public function toArray(): array
    {
        return [
            'otp_expiration_minutes' => $this->otp_expiration_minutes,
            'otp_length' => $this->otp_length,
            'expires_in' => $this->expires_in,
            'min' => $this->min,
            'mixedCase' => $this->mixedCase,
            'letters' => $this->letters,
            'numbers' => $this->numbers,
            'symbols' => $this->symbols,
            'uncompromised' => $this->uncompromised,
            'compromisedThreshold' => $this->compromisedThreshold,
            'failMessage' => $this->failMessage,
        ];
    }

    public function getHelperText(): string
    {
        $msg = 'La password deve essere composta da minimo '.$this->min.' caratteri';
        $msg .= ', almeno una lettera maiuscola';
        $msg .= ', una minuscola';
        $msg .= ', un numero';
        $msg .= ' e un carattere speciale.';
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

        return $msg;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Set the field name.
     */
    public function setFieldName(string $field_name): self
    {
        $this->field_name = $field_name;
        return $this;
    }

    /**
     * Get the password form component.
     */
    public function getPasswordFormComponent(string $field_name): TextInput
    {
        return TextInput::make($field_name)
            ->password()
            ->required()
            ->label(__('Password'))
            ->placeholder(__('Inserisci la tua password'))
            ->validationMessages($this->getValidationMessages())
            ->helperText($this->getHelperText());
    }

    /**
     * Get the password confirmation form component.
     */
    public function getPasswordConfirmationFormComponent(): TextInput
    {
        if ($this->field_name === null) {
            throw new \RuntimeException('Il nome del campo password non è stato impostato. Utilizzare setFieldName() prima di chiamare questo metodo.');
        }

        return TextInput::make('password_confirmation')
            ->password()
            ->required()
            ->label(__('Conferma Password'))
            ->placeholder(__('Conferma la tua password'))
<<<<<<< HEAD
=======
=======
    public function getValidationMessages(): array
    {
        $messages = __('user::validation');

        return $messages;
    }

    public function getPasswordFormComponent(string $field_name = 'new_password'): Component
    {
        $this->field_name = $field_name;
        $field = TextInput::make($field_name)
            ->password()

            // ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()" tabindex="3"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
            ->placeholder(__('user::fields.new_password.placeholder'))
            // ->revealable(filament()->arePasswordsRevealable())
            ->revealable(true)
            ->autocomplete('current-password')
            ->required()
            ->extraInputAttributes(['tabindex' => 2])
            ->rule(Password::default())
            ->validationMessages($this->getValidationMessages())
            ->helperText($this->getHelperText());
        // ->live()

        return $field;
    }

    public function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')

            ->password()
            // ->revealable(filament()->arePasswordsRevealable())
            ->revealable(true)
            ->required()
            // ->visible(fn (Get $get): bool => filled($get($this->field_name)))
            // ->dehydrated(false)
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
            ->same($this->field_name)
            ->validationMessages($this->getValidationMessages());
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
     * Get both password form components.
     *
     * @return array<TextInput>
     */
    public function getPasswordFormComponents(string $field_name): array
    {
        if (empty($field_name)) {
            throw new \InvalidArgumentException('Il nome del campo password non può essere vuoto');
        }

        $this->setFieldName($field_name);
        
<<<<<<< HEAD
=======
=======
     * @return array<Component>
     */
    public function getPasswordFormComponents(string $field_name = 'new_password'): array
    {
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
        return [
            $this->getPasswordFormComponent($field_name),
            $this->getPasswordConfirmationFormComponent(),
        ];
    }
}
