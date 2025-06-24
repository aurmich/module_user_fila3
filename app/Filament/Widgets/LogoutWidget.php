<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\View;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Throwable;

/**
 * Provides a widget for user logout functionality within Filament admin panels.
 * 
 * This widget handles the user logout process including session invalidation,
 * event dispatching, and proper redirection with localization support.
 * 
 * @method void mount() Initialize the widget and form state.
 * @method array<string, Component> getFormSchema() Define the form schema for the logout confirmation.
 * @method void logout() Handle the user logout process.
 * @method array<string, Action> getFormActions() Define the form actions (logout and cancel buttons).
 * @method array<string, string> getViewData() Get additional data to pass to the view.
 * 
 * @property array<string, mixed>|null $data Widget data array managed by XotBaseWidget.
 * @property bool $isLoggingOut Flag indicating if logout is in progress.
 */
class LogoutWidget extends XotBaseWidget
{
    /**
     * The view that should be used to render the widget.
     * 
     * IMPORTANT: When using @livewire() directly in Blade templates,
     * the path should be without the module namespace.
     * 
     * @var string
     * 
     * @phpstan-ignore-next-line 
     */
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Actions\Action;
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as FormAction;
>>>>>>> aurmich/dev
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as FormAction;
>>>>>>> a3f7230 (.)
use Filament\Forms\Components\Component;
use Filament\Forms\Components\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * Logout widget for user logout functionality.
 */
>>>>>>> aurmich/dev
=======
/**
 * Logout widget for user logout functionality.
 */
>>>>>>> a3f7230 (.)
class LogoutWidget extends XotBaseWidget
{
    /**
     * Blade view del widget.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $view = 'user::widgets.logout';

    /**
=======
=======
>>>>>>> a3f7230 (.)
    /** @phpstan-ignore-next-line */
>>>>>>> aurmich/dev
    protected static string $view = 'user::widgets.logout';

    /**
     * Widget data array.
     * 
<<<<<<< HEAD
     * CRITICAL: This property is managed by XotBaseWidget.
     * Do not remove or redeclare it.
=======
     * CRITICAL: Do not remove or redeclare this property - it's managed by XotBaseWidget.
>>>>>>> aurmich/dev
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
<<<<<<< HEAD
     * Indicates if the logout process is in progress.
     *
     * @var bool
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
     * Stato del widget.
>>>>>>> aurmich/dev
     */
    public bool $isLoggingOut = false;

    /**
<<<<<<< HEAD
     * Mount the widget and initialize the form.
     * 
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
=======
=======
>>>>>>> a3f7230 (.)
     * Mount the widget and initialize the form.
     *
>>>>>>> aurmich/dev
     * @return void
     */
    public function mount(): void
    {
        $this->form->fill();
    }

    /**
<<<<<<< HEAD
     * Get the form schema for the logout confirmation.
     * 
     * This method implements the abstract method from XotBaseWidget.
     * Do not override the form() method as it's declared as final.
     *
     * @return array<string, Component>
=======
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
     *
     * @return array<string, Component>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> aurmich/dev
     */
    public function getFormSchema(): array
    {
        return [
            'message' => View::make('filament.widgets.auth.logout-message')
                ->columnSpanFull(),
        ];
    }

    /**
<<<<<<< HEAD
     * Handle the user logout process.
     * 
     * This method performs the following actions:
     * 1. Validates the current user session
     * 2. Dispatches pre-logout events
     * 3. Performs the actual logout
     * 4. Invalidates the session
     * 5. Dispatches post-logout events
     * 6. Logs the operation
     * 7. Handles redirection with proper localization
     *
     * @return void
     * 
     * @throws \RuntimeException If the logout process fails
=======
     * Azione di logout.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Gestisce il logout dell'utente con eventi, logging e reindirizzamento localizzato.
     *
     * @return void
>>>>>>> aurmich/dev
=======
     * Gestisce il logout dell'utente con eventi, logging e reindirizzamento localizzato.
     *
     * @return void
>>>>>>> a3f7230 (.)
>>>>>>> aurmich/dev
     */
    public function logout(): void
    {
        try {
            $this->isLoggingOut = true;

<<<<<<< HEAD
            // Get the authenticated user before logging out
            $user = $this->getAuthenticatedUser();
            if ($user === null) {
                $this->handleNoUserScenario();
                return;
            }

            $this->dispatchPreLogoutEvent($user);
            $this->performLogout();
            $this->dispatchPostLogoutEvent();
            $this->logLogoutSuccess($user);
            $this->redirectAfterLogout();
        } catch (Throwable $e) {
            $this->handleLogoutError($e);
=======
            // Ottieni l'utente prima del logout per il logging
            $user = Auth::user();

            if (!$user) {
                $this->isLoggingOut = false;
                return;
            }

            // Evento pre-logout
            Event::dispatch('auth.logout.attempting', [$user]);

            // Esegui il logout
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            // Evento post-logout
            Event::dispatch('auth.logout.successful');

            // Log dell'operazione
            Log::info('Utente disconnesso', [
                'user_id' => $user->id,
                'timestamp' => now()
            ]);

            // Reindirizzamento con localizzazione
            $locale = app()->getLocale();
            redirect()->to('/' . $locale)
                ->with('success', __('Logout effettuato con successo'));

        } catch (\Exception $e) {
            Log::error('Errore durante il logout: ' . $e->getMessage());
            $this->isLoggingOut = false;
            session()->flash('error', __('Errore durante il logout'));
>>>>>>> aurmich/dev
        }
    }

    /**
<<<<<<< HEAD
     * Get the form actions for the widget.
     *
     * @return array<string, Action>
=======
     * Azioni del form.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array<string, Action>
>>>>>>> aurmich/dev
=======
     *
     * @return array<string, Action>
>>>>>>> a3f7230 (.)
>>>>>>> aurmich/dev
     */
    public function getFormActions(): array
    {
        return [
<<<<<<< HEAD
            'logout' => $this->getLogoutAction(),
            'cancel' => $this->getCancelAction(),
        ];
    }

    /**
     * Get the logout action configuration.
     *
     * @return Action
     */
    protected function getLogoutAction(): Action
    {
        return Action::make('logout')
            ->translateLabel()
            ->color('danger')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center'])
            ->action(fn () => $this->logout());
    }

    /**
     * Get the cancel action configuration.
     *
     * @return Action
     */
    protected function getCancelAction(): Action
    {
        return Action::make('cancel')
            ->translateLabel()
            ->color('gray')
            ->size('lg')
            ->extraAttributes(['class' => 'w-full justify-center mt-2'])
            ->url($this->getLocalizedHomeUrl());
    }

    /**
     * Get localized home URL based on current locale.
     *
     * @return string
     */
    protected function getLocalizedHomeUrl(): string
    {
        $locale = App::getLocale();
        return '/' . ltrim($locale, '/');
    }

    /**
     * Get the authenticated user instance.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    protected function getAuthenticatedUser(): ?Authenticatable
    {
        return Auth::user();
    }

    /**
     * Handle scenario when no user is authenticated.
     *
     * @return void
     */
    protected function handleNoUserScenario(): void
    {
        $this->isLoggingOut = false;
        Log::warning('Logout attempted with no authenticated user');
    }

    /**
     * Dispatch pre-logout events.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    protected function dispatchPreLogoutEvent(Authenticatable $user): void
    {
        Event::dispatch('auth.logout.attempting', [$user]);
    }

    /**
     * Perform the actual logout operations.
     *
     * @return void
     */
    protected function performLogout(): void
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
    }

    /**
     * Dispatch post-logout events.
     *
     * @return void
     */
    protected function dispatchPostLogoutEvent(): void
    {
        Event::dispatch('auth.logout.successful');
    }

    /**
     * Log successful logout operation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    protected function logLogoutSuccess(Authenticatable $user): void
    {
        Log::info('User logged out', [
            'user_id' => $user->getAuthIdentifier(),
            'timestamp' => now()->toDateTimeString(),
        ]);
    }

    /**
     * Handle redirect after successful logout.
     *
     * @return void
     */
    protected function redirectAfterLogout(): void
    {
        $redirect = redirect($this->getLocalizedHomeUrl())
            ->with('success', __('user::auth.logout_success'));
            
        $redirect->send();
        exit;
    }

    /**
     * Handle any errors that occur during logout.
     *
     * @param  \Throwable  $e
     * @return void
     * 
     * @throws \RuntimeException
     */
    protected function handleLogoutError(Throwable $e): void
    {
        Log::error('Logout error: ' . $e->getMessage(), [
            'exception' => get_class($e),
            'trace' => $e->getTraceAsString(),
        ]);

        $this->isLoggingOut = false;
        Session::flash('error', __('user::auth.logout_error'));
    }

    /**
     * Get view data for the widget.
     *
     * @return array{
     *     title: string,
     *     description: string
     * }
     */
    protected function getViewData(): array
    {
        return [
            'title' => __('user::auth.logout_title'),
            'description' => __('user::auth.logout_confirmation'),
=======
            'logout' => Action::make('logout')
                ->color('danger')
                ->size('lg')
                ->extraAttributes(['class' => 'w-full justify-center'])
                ->action(fn () => $this->logout()),
            'cancel' => Action::make('cancel')
                ->color('gray')
                ->size('lg')
                ->extraAttributes(['class' => 'w-full justify-center mt-2'])
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(function () {
=======
                ->url(function (): string {
>>>>>>> aurmich/dev
=======
                ->url(function (): string {
>>>>>>> a3f7230 (.)
                    $locale = app()->getLocale();
                    return '/' . $locale;
                }),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a3f7230 (.)
    /**
     * Get view data for the widget.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
    protected function getViewData(): array
    {
        return [
            'title' => __('Logout'),
            'description' => __('Sei sicuro di voler uscire?'),
>>>>>>> aurmich/dev
        ];
    }
}
