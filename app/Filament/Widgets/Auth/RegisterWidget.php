<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\ComponentContainer;
>>>>>>> 8055579 (.)
=======
use Filament\Forms\ComponentContainer;
>>>>>>> 8d82f8c (.)
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\RedirectResponse;
>>>>>>> 8055579 (.)
=======
use Illuminate\Http\RedirectResponse;
>>>>>>> 8d82f8c (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Modules\User\Models\User;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
>>>>>>> 8055579 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 8d82f8c (.)

class RegisterWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.register-widget';
<<<<<<< HEAD
<<<<<<< HEAD

    protected static ?int $sort = 2;

=======
    protected static ?int $sort = 2;
>>>>>>> 8055579 (.)
=======
    protected static ?int $sort = 2;
>>>>>>> 8d82f8c (.)
    protected static ?string $maxHeight = '600px';

    public static function canView(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return ! Auth::check();
=======
        return !Auth::check();
>>>>>>> 8055579 (.)
=======
        return !Auth::check();
>>>>>>> 8d82f8c (.)
    }

    public function mount(): void
    {
        $this->form->fill([]);
        Log::debug('Registration form initialized', [
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function getFormSchema(): array
    {
        return [
            'user_info' => Section::make()
                ->schema([
                    'first_name' => TextInput::make('first_name')
                        ->label(__('user::auth.fields.first_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('given-name')
                        ->validationAttribute(__('user::auth.fields.first_name')),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> 8055579 (.)
=======
                    
>>>>>>> 8d82f8c (.)
                    'last_name' => TextInput::make('last_name')
                        ->label(__('user::auth.fields.last_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('family-name')
                        ->validationAttribute(__('user::auth.fields.last_name')),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> 8055579 (.)
=======
                    
>>>>>>> 8d82f8c (.)
                    'email' => TextInput::make('email')
                        ->label(__('user::auth.fields.email'))
                        ->required()
                        ->email()
                        ->maxLength(255)
                        ->unique(User::class, 'email')
                        ->autocomplete('email')
                        ->validationAttribute(__('user::auth.fields.email'))
                        ->helperText(__('user::auth.help.email')),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> 8055579 (.)
=======
                    
>>>>>>> 8d82f8c (.)
                    'password_grid' => Grid::make(2)
                        ->schema([
                            'password' => TextInput::make('password')
                                ->label(__('user::auth.fields.password'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->rules([
                                    'required',
                                    'string',
                                    'min:12',
                                    'regex:/[A-Z]/',
                                    'regex:/[a-z]/',
                                    'regex:/[0-9]/',
<<<<<<< HEAD
<<<<<<< HEAD
                                    'regex:/[^A-Za-z0-9]/',
=======
                                    'regex:/[^A-Za-z0-9]/'
>>>>>>> 8055579 (.)
=======
                                    'regex:/[^A-Za-z0-9]/'
>>>>>>> 8d82f8c (.)
                                ])
                                ->validationMessages([
                                    'password.regex' => __('user::auth.validation.password.complexity'),
                                ])
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password'))
                                ->helperText(__('user::auth.help.password'))
                                ->confirmed(),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                            
>>>>>>> 8055579 (.)
=======
                            
>>>>>>> 8d82f8c (.)
                            'password_confirmation' => TextInput::make('password_confirmation')
                                ->label(__('user::auth.fields.password_confirmation'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password_confirmation'))
                                ->dehydrated(false)
                                ->same('password'),
                        ]),
                ]),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data')
            ->operation('create');
    }

    public function submit(): void
    {
        try {
            $validatedData = $this->validateForm();
            $this->logRegistrationAttempt($validatedData);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 8d82f8c (.)
            $user = DB::transaction(function () use ($validatedData) {
                $user = $this->createUser($validatedData);
                $this->afterUserCreated($user);
                return $user;
            });
            
            $this->handleSuccessfulRegistration($user);
<<<<<<< HEAD

=======
            
            $user = DB::transaction(function () use ($validatedData) {
                $user = $this->createUser($validatedData);
                $this->afterUserCreated($user);
                return $user;
            });
            
            $this->handleSuccessfulRegistration($user);
            
>>>>>>> 8055579 (.)
=======
            
>>>>>>> 8d82f8c (.)
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            $this->handleRegistrationError($e);
        }
    }

    protected function validateForm(): array
    {
        $data = $this->form->getState();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        return [
            'first_name' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['first_name']),
            'last_name' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['last_name']),
            'email' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['email']),
            'password' => Hash::make(app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['password'])),
            'type' => 'standard',
            'state' => 'pending',
            'email_verified_at' => null,
        ];
    }

    protected function logRegistrationAttempt(array $data): void
    {
        $email = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['email']);
        Log::info('Registration attempt', [
            'email_hash' => hash('sha256', $email),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    protected function createUser(array $data): User
    {
        return User::create($data);
    }

    protected function afterUserCreated(User $user): void
    {
        activity()
            ->causedBy($user)
            ->performedOn($user)
            ->withProperties([
                'type' => $user->type,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ])
            ->log('User registered via RegisterWidget');
    }

    protected function handleSuccessfulRegistration(User $user): void
    {
        if (config('auth.must_verify_email')) {
            $user->sendEmailVerificationNotification();
        }

        Auth::login($user);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8055579 (.)
=======
        
>>>>>>> 8d82f8c (.)
        Notification::make()
            ->title(__('user::auth.registration.success'))
            ->success()
            ->send();
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 8055579 (.)
=======
            
>>>>>>> 8d82f8c (.)
        $this->redirect(route('dashboard'));
    }

    protected function handleRegistrationError(\Exception $e): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Log::error('Registration failed: '.$e->getMessage(), [
=======
        Log::error('Registration failed: ' . $e->getMessage(), [
>>>>>>> 8055579 (.)
=======
        Log::error('Registration failed: ' . $e->getMessage(), [
>>>>>>> 8d82f8c (.)
            'exception' => $e,
            'trace' => $e->getTraceAsString(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        throw new \RuntimeException(__('user::auth.registration.error_occurred'));
    }
}
