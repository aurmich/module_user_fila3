<div>
    <form wire:submit.prevent="register">
        {{ $this->form }}
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> 019e694 (.)

        <x-filament::button type="submit" class="w-full">
            {{ __('user::registration.submit') }}
        </x-filament::button>
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        {{ __('user::registration.already_registered') }} 
        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500">
            {{ __('user::auth.login.title') }}
        </a>
<<<<<<< HEAD
=======
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
=======
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        Hai già un account? <a href="{{ route('login') }}" class="text-blue-800 hover:underline">Accedi</a>
>>>>>>> 88efd6b (.)
>>>>>>> 019e694 (.)
    </div>
</div>
