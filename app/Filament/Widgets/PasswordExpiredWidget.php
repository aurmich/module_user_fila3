<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Form;
=======
>>>>>>> 73101fd (.)
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
use Filament\Forms\Form as FilamentForm;
=======
use Filament\Forms\Form;
>>>>>>> 73101fd (.)
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Widgets\Widget;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Modules\User\Datas\PasswordData;
use Modules\User\Events\NewPasswordSet;
use Modules\User\Http\Response\PasswordResetResponse;
use Modules\User\Rules\CheckOtpExpiredRule;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Auth\Events\PasswordReset as PasswordResetResponseEvent;
=======
>>>>>>> 73101fd (.)
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;
>>>>>>> Stashed changes

/**
 * @property ComponentContainer $form
 */
<<<<<<< Updated upstream
<<<<<<< HEAD
class PasswordExpiredWidget extends XotBaseWidget implements HasForms
=======
class PasswordExpiredWidget extends Widget implements HasForms
>>>>>>> 73101fd (.)
=======
class PasswordExpiredWidget extends XotBaseWidget implements HasForms
>>>>>>> Stashed changes
{
    use InteractsWithForms;
    use TransTrait;

    public ?string $current_password = '';
    public ?string $password = '';
    public ?string $passwordConfirmation = '';
<<<<<<< Updated upstream

<<<<<<< HEAD
    public ?array $data = [];
=======
    public array $data = [];
>>>>>>> 73101fd (.)
=======
    public null|array $data = [];
>>>>>>> Stashed changes

    /**
     * @var view-string
     */
    protected static string $view = 'user::filament.widgets.password-expired';

    protected static bool $shouldRegisterNavigation = false;

<<<<<<< HEAD
    
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->columns(1)
            ->statePath('data');
    }
>>>>>>> 73101fd (.)

    /**
     * @return array<Component>
     */
    public function getFormSchema(): array
    {
        return [
            $this->getCurrentPasswordFormComponent(),
            ...PasswordData::make()->getPasswordFormComponents('password'),
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
            /*
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
            */
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
        ];
    }

    public function getResetPasswordFormAction(): Action
    {
        return Action::make('resetPassword')
            ->submit('resetPassword');
    }

    public function hasLogo(): bool
    {
        return false;
    }

    public function resetPassword(): ?PasswordResetResponse
    {
<<<<<<< HEAD
        $this->validate();

        if (! Hash::check($this->data['current_password'], auth()->user()->password)) {
            $this->addError('current_password', __('user::auth.password_current_incorrect'));
            return null;
        }

        $user = auth()->user();
        $user->password = Hash::make($this->data['password']);
        $user->save();

        return new PasswordResetResponse($user);
=======
        $data = $this->form->getState();
        Assert::string($current_password = Arr::get($data, 'current_password'));
        Assert::string($password = Arr::get($data, 'password'));
        $user = Auth::user();
        if ($user === null) {
            return null;
        }

        // check if current password is correct
        if ($user->password === null || ! Hash::check($current_password, $user->password)) {
            Notification::make()
                ->title(__('user::otp.notifications.wrong_password.title'))
                ->body(__('user::otp.notifications.wrong_password.body'))
                ->danger()
                ->send();

            return null;
        }

        // check if new password is different from the current password
        if ($user->password !== null && Hash::check($password, $user->password)) {
            Notification::make()
                ->title(__('user::otp.notifications.same_password.title'))
                ->body(__('user::otp.notifications.same_password.body'))
                ->danger()
                ->send();

            return null;
        }

        // check if both required columns exist in the database
        if (! Schema::hasColumn('users', 'password_expires_at')) {
            Notification::make()
                ->title(__('user::otp.notifications.column_not_found.title'))
                ->body(__('user::otp.notifications.column_not_found.body', [
                    'column_name' => 'password_expires_at',
                    'password_column_name' => 'password',
                    'table_name' => 'users',
                ]))
                ->danger()
                ->send();

            return null;
        }

        $pwd_data = PasswordData::make();
        // get OTP expiration minutes from PasswordData
        $otpExpirationMinutes = $pwd_data->otp_expiration_minutes;

        // Check if OTP is expired using updated_at
        if ($user->updated_at && now()->greaterThan($user->updated_at->addMinutes($otpExpirationMinutes))) {
            Notification::make()
                ->title(__('user::otp.notifications.otp_expired.title'))
                ->body(__('user::otp.notifications.otp_expired.body'))
                ->danger()
                ->send();

            return null;
        }

        // get password expiry date and time
        $passwordExpiryDateTime = now()->addDays($pwd_data->expires_in);

        // Verificare che l'utente esistente e che sia un modello Eloquent
        if (!($user instanceof \Illuminate\Database\Eloquent\Model)) {
            throw new \InvalidArgumentException('L\'utente deve essere un modello Eloquent con il metodo update');
        }
        
        // update password and password_expires_at
        $user->update([
            'password' => Hash::make($password),
            'password_expires_at' => $passwordExpiryDateTime,
        ]);

        // trigger the event
        event(new NewPasswordSet($user, $passwordExpiryDateTime));

        Notification::make()
            ->title(__('user::otp.notifications.password_changed.title'))
            ->body(__('user::otp.notifications.password_changed.body', [
                'expiration_days' => $pwd_data->expires_in,
            ]))
            ->success()
            ->send();

<<<<<<< Updated upstream
        return new PasswordResetResponse();
>>>>>>> 73101fd (.)
=======
        return new PasswordResetResponse($user);
>>>>>>> Stashed changes
    }

    public function getCurrentPasswordFormComponent(): TextInput
    {
        return TextInput::make('current_password')
            ->password()
            ->required()
            ->label(__('user::auth.current_password'))
            ->placeholder(__('user::auth.current_password_placeholder'))
            ->validationMessages([
                'required' => __('user::validation.required'),
            ]);
    }
}
