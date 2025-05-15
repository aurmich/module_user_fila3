<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Form;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Form;
=======
>>>>>>> 73101fd (.)
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form as FilamentForm;
=======
use Filament\Forms\Form;
>>>>>>> 73101fd (.)
=======
use Filament\Forms\Form;
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
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
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Auth\Events\PasswordReset as PasswordResetResponseEvent;
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Auth\Events\PasswordReset as PasswordResetResponseEvent;
=======
>>>>>>> 73101fd (.)
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)

/**
 * @property ComponentContainer $form
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 019e694 (.)
class PasswordExpiredWidget extends XotBaseWidget implements HasForms
{
    use InteractsWithForms;

    // use InteractsWithFormActions;
    use TransTrait;

    public ?string $current_password = '';

    public ?string $password = '';

    public ?string $passwordConfirmation = '';

    public ?array $data = [];
<<<<<<< HEAD
=======
=======
    public array $data = [];
>>>>>>> 73101fd (.)
=======
    public null|array $data = [];
>>>>>>> Stashed changes
=======
class PasswordExpiredWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    // use InteractsWithFormActions;
    use TransTrait;

    public ?string $current_password = '';

    public ?string $password = '';

    public ?string $passwordConfirmation = '';

    public array $data = [];
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)

    /**
     * @var view-string
     */
    protected static string $view = 'user::filament.widgets.password-expired';

    protected static bool $shouldRegisterNavigation = false;

<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> 88efd6b (.)
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->columns(1)
            ->statePath('data');
    }
<<<<<<< HEAD
>>>>>>> 73101fd (.)
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)

    /**
     * @return array<Component>
     */
    public function getFormSchema(): array
    {
        return [
            $this->getCurrentPasswordFormComponent(),
            ...PasswordData::make()->getPasswordFormComponents('password'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
>>>>>>> 88efd6b (.)
            /*
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
            */
<<<<<<< HEAD
>>>>>>> 73101fd (.)
=======
>>>>>>> Stashed changes
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 019e694 (.)
        $this->validate();

        if (! Hash::check($this->data['current_password'], auth()->user()->password)) {
            $this->addError('current_password', __('user::auth.password_current_incorrect'));
            return null;
        }

        $user = auth()->user();
        $user->password = Hash::make($this->data['password']);
        $user->save();

        return new PasswordResetResponse($user);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 88efd6b (.)
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

<<<<<<< HEAD
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
>>>>>>> 019e694 (.)
    }

    protected function getCurrentPasswordFormComponent(): Component
    {
        $authUser = Filament::auth()->user();

        if ($authUser instanceof \Modules\User\Models\User) {
            return TextInput::make('current_password')
                ->password()
                ->revealable()
                ->required()
                ->rule(new CheckOtpExpiredRule($authUser))
                ->validationAttribute(static::trans('fields.current_password.validation_attribute'));
        }

        // Fallback nel caso l'utente non sia del tipo corretto
        return TextInput::make('current_password')
            ->password()
            ->revealable()
            ->required()
<<<<<<< HEAD
=======
            ->label(__('user::auth.current_password'))
            ->placeholder(__('user::auth.current_password_placeholder'))
            ->validationMessages([
                'required' => __('user::validation.required'),
            ]);
=======
        // Verificare che l'utente esistante e che sia un modello Eloquent
        if (!($user instanceof \Illuminate\Database\Eloquent\Model)) {
            throw new \InvalidArgumentException('L\'utente deve essere un modello Eloquent con il metodo update');
        }

        // set password expiry date and time
        $user->update([
            'password_expires_at' => $passwordExpiryDateTime,
            'is_otp' => false,
            'password' => Hash::make($password),
        ]);

        // Verificare che l'utente implementi l'interfaccia UserContract prima di passarlo all'evento
        if (!$user instanceof \Modules\Xot\Contracts\UserContract) {
            throw new \InvalidArgumentException('L\'utente deve implementare l\'interfaccia UserContract');
        }
        event(new NewPasswordSet($user));

        Notification::make()
            ->title(__('user::otp.notifications.password_reset.success'))
            ->success()
            ->send();

        return new PasswordResetResponse();
    }

    protected function getCurrentPasswordFormComponent(): Component
    {
        $authUser = Filament::auth()->user();

        if ($authUser instanceof \Modules\User\Models\User) {
            return TextInput::make('current_password')
                ->password()
                ->revealable()
                ->required()
                ->rule(new CheckOtpExpiredRule($authUser))
                ->validationAttribute(static::trans('fields.current_password.validation_attribute'));
        }

        // Fallback nel caso l'utente non sia del tipo corretto
        return TextInput::make('current_password')
            ->password()
            ->revealable()
            ->required()
>>>>>>> 019e694 (.)
            ->validationAttribute(static::trans('fields.current_password.validation_attribute'));
    }

    /*
    protected function getPasswordFormComponent(): Component
    {
        $validation_messages = __('user::validation');

        return TextInput::make('password')
            ->password()
            // ->revealable(filament()->arePasswordsRevealable())
            ->revealable()
            ->required()
            ->rule(PasswordRule::default())
            ->same('passwordConfirmation')
            ->validationMessages($validation_messages)
            ->validationAttribute(static::trans('fields.password.validation_attribute'));
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->password()
            // ->revealable(filament()->arePasswordsRevealable())
            ->revealable()
            ->required()
            ->dehydrated(false);
    }
    */

    /**
     * @return array<Action|ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [
            $this->getResetPasswordFormAction(),
        ];
<<<<<<< HEAD
=======
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
    }
}
