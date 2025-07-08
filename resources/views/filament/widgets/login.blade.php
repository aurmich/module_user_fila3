{{--
    View: user::filament.widgets.login
    Scopo: Widget di login Filament conforme a Windsurf/Xot
    Modifica liberamente questa struttura per UX custom
--}}
<div class="filament-widget-login space-y-6">
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form wire:submit.prevent="save" class="space-y-4">
        {{ $this->form }}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        <button type="submit" class="w-full py-3 rounded bg-[#FF5F7E] text-white font-bold">
            {{ __('Accedi') }}
            <x-filament::loading-indicator class="h-5 w-5" wire:loading/>
        </button>
<<<<<<< HEAD
=======
=======
        <button type="submit" class="w-full py-3 rounded bg-blue-600 text-white font-bold hover:bg-blue-700 transition">{{ __('Accedi') }}</button>
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    </form>
    <div class="text-center text-sm text-gray-500 mt-2">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="underline hover:text-blue-700">{{ __('Password dimenticata?') }}</a>
        @endif
    </div>
</div>
