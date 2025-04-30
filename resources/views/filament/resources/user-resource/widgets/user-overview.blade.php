<x-filament::widget>
    <x-filament::card>
        @if($record)
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <x-filament::avatar
                            :src="$record->profile?->avatar_url"
                            :alt="$record->name"
                            size="lg"
                        />
                    </div>
                    <div>
                        <h2 class="text-lg font-medium">{{ __('user::user.fields.id.label') }}</h2>
                        <p class="mt-1">{{ $record?->id }}</p>
                        <h2 class="text-lg font-medium mt-4">{{ __('user::user.fields.email.label') }}</h2>
                        <p class="mt-1">{{ $record?->email }}</p>
                        <h2 class="text-lg font-medium mt-4">{{ __('user::user.fields.email_verified_at.label') }}</h2>
                        <p class="mt-1">{{ $record?->email_verified_at?->format('d/m/Y H:i') ?? __('user::user.fields.unverified.label') }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Ruolo</p>
                        <p class="mt-1">
                            {{ $record->roles->first()?->name ?? 'Nessun ruolo' }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Ultimo accesso</p>
                        <p class="mt-1">
                            {{ $record->last_login_at?->diffForHumans() ?? 'Mai' }}
                        </p>
                    </div>
                </div>

                @if($record->profile)
                    <div>
                        <p class="text-sm font-medium text-gray-500">Profilo</p>
                        <p class="mt-1">
                            {{ $record->profile->bio ?? 'Nessuna bio' }}
                        </p>
                    </div>
                @endif
            </div>
        @else
            <div class="flex flex-col items-center justify-center p-6 text-center">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gray-100">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-sm font-medium text-gray-900">Nessun utente selezionato</h3>
                <p class="mt-1 text-sm text-gray-500">Seleziona un utente per visualizzare i dettagli</p>
            </div>
        @endif
    </x-filament::card>
</x-filament::widget>
