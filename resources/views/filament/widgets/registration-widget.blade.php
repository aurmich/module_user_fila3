<div>
    <form wire:submit.prevent="register">
        {{ $this->form }}
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes

        <x-filament::button type="submit" class="w-full">
            {{ __('user::registration.submit') }}
        </x-filament::button>
<<<<<<< Updated upstream
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        {{ __('user::registration.already_registered') }} 
        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500">
            {{ __('user::auth.login.title') }}
        </a>
=======
=======
>>>>>>> Stashed changes
    </form>

    <div class="text-sm text-center text-gray-600 mt-6">
<<<<<<< Updated upstream
        Hai già un account? <a href="{{ route('login') }}" class="text-blue-800 hover:underline">Accedi</a>
>>>>>>> 73101fd (.)
=======
        {{ __('user::registration.already_registered') }}
        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500">
            {{ __('user::auth.login.title') }}
        </a>
>>>>>>> Stashed changes
    </div>
</div>
