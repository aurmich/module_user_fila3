<div>
    <form wire:submit.prevent="register">
        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('Register') }}
        </x-filament::button>
    </form>
    
    <div class="text-sm text-center text-gray-600 mt-6">
        {{ __('Already have an account?') }} 
        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500">
            {{ __('Log in') }}
        </a>
    </div>
</div>
