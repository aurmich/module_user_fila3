<div>
    <form wire:submit.prevent="register">
        {{ $this->form }}
<<<<<<< HEAD

        <x-filament::button type="submit" class="w-full">
            {{ __('user::registration.submit') }}
        </x-filament::button>
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        {{ __('user::registration.already_registered') }} 
        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500">
            {{ __('user::auth.login.title') }}
        </a>
=======
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        Hai già un account? <a href="{{ route('login') }}" class="text-blue-800 hover:underline">Accedi</a>
>>>>>>> ba18491 (.)
    </div>
</div>
