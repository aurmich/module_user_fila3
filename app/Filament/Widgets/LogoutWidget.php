<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

<<<<<<< HEAD
use Filament\Forms\Components\Actions\Action;
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as FormAction;
>>>>>>> aurmich/dev
use Filament\Forms\Components\Component;
use Filament\Forms\Components\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

<<<<<<< HEAD
=======
/**
 * Logout widget for user logout functionality.
 */
>>>>>>> aurmich/dev
class LogoutWidget extends XotBaseWidget
{
    /**
     * Blade view del widget.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo.
     */
<<<<<<< HEAD
    protected static string $view = 'user::widgets.logout';

    /**
=======
    /** @phpstan-ignore-next-line */
    protected static string $view = 'user::widgets.logout';

    /**
     * Widget data array.
     * 
     * CRITICAL: Do not remove or redeclare this property - it's managed by XotBaseWidget.
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
>>>>>>> aurmich/dev
     * Stato del widget.
     */
    public bool $isLoggingOut = false;

    /**
<<<<<<< HEAD
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
=======
     * Mount the widget and initialize the form.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->form->fill();
    }

    /**
     * Implementazione del metodo astratto getFormSchema.
     * NON sovrascrivere il metodo form() che è dichiarato come final.
     *
     * @return array<string, Component>
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
     * Azione di logout.
<<<<<<< HEAD
=======
     * Gestisce il logout dell'utente con eventi, logging e reindirizzamento localizzato.
     *
     * @return void
>>>>>>> aurmich/dev
     */
    public function logout(): void
    {
        try {
            $this->isLoggingOut = true;

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
        }
    }

    /**
     * Azioni del form.
<<<<<<< HEAD
=======
     *
     * @return array<string, Action>
>>>>>>> aurmich/dev
     */
    public function getFormActions(): array
    {
        return [
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
                ->url(function () {
=======
                ->url(function (): string {
>>>>>>> aurmich/dev
                    $locale = app()->getLocale();
                    return '/' . $locale;
                }),
        ];
    }

<<<<<<< HEAD
=======
    /**
     * Get view data for the widget.
     *
     * @return array<string, string>
     */
>>>>>>> aurmich/dev
    protected function getViewData(): array
    {
        return [
            'title' => __('Logout'),
            'description' => __('Sei sicuro di voler uscire?'),
        ];
    }
}
