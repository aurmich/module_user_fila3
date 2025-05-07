<x-filament::widget>
    <x-filament::card>
        <form wire:submit="authenticate" class="space-y-4">
            {{ $this->form }}
            
            <x-filament::button
                type="submit"
                class="w-full"
                wire:loading.attr="disabled"
                wire:target="authenticate"
            >
                <span wire:loading.remove wire:target="authenticate">
                    {{ __('Login') }}
                </span>
                
                <span wire:loading wire:target="authenticate">
                    {{ __('Autenticazione in corso...') }}
                </span>
            </x-filament::button>

            @if($errors->has('email'))
                <p class="mt-2 text-sm text-danger-600">
                    {{ $errors->first('email') }}
                </p>
            @endif
        </form>
    </x-filament::card>
</x-filament::widget> 