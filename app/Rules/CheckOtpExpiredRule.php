<?php

declare(strict_types=1);

namespace Modules\User\Rules;

<<<<<<< HEAD
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Modules\User\Datas\PasswordData;
use Modules\User\Models\User;

/**
 * Regola di validazione per verificare se un codice OTP è scaduto.
 */
class CheckOtpExpiredRule implements ValidationRule
{
    private string $message = 'Il codice OTP è scaduto. Richiedi un nuovo codice.';

    public function __construct(private User $user)
    {
    }

    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->user->updated_at === null) {
            $fail($this->message);
            return;
        }

        $pwd_data = PasswordData::make();
        $otpExpirationMinutes = $pwd_data->otp_expiration_minutes;
        $otp_expires_at = $this->user->updated_at->addMinutes($otpExpirationMinutes);

        if (now()->greaterThan($otp_expires_at)) {
            $fail($this->message);
=======
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Modules\User\Datas\PasswordData;

class CheckOtpExpiredRule implements ValidationRule
{
    /**
     * Determina se la regola di validazione si applica.
     */
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        $user = Auth::user();
        if ($user === null) {
            $fail('utente non loggato');

            return;
        }
        if ($user->updated_at === null) {
            return;
        }

        // Get OTP expiration minutes from PasswordData
        $pwd_data = PasswordData::make();
        $otpExpirationMinutes = $pwd_data->otp_expiration_minutes;
        $otp_expires_at = $user->updated_at->addMinutes($otpExpirationMinutes);

        // Check if OTP is expired using updated_at
        if (now()->greaterThan($otp_expires_at)) {
            $fail($this->message());
>>>>>>> 67cd443 (.)
        }
    }

    /**
     * Ottiene il messaggio di errore da visualizzare.
     *
<<<<<<< HEAD
     * @return string Il messaggio di errore
     */
    public function message(): string
=======
     * @return string
     */
    public function message()
>>>>>>> 67cd443 (.)
    {
        return __('user::otp.notifications.otp_expired.body');
    }
}
