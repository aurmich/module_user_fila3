@section('title', __('Accedi al tuo account'))

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                {{ __('Accedi al tuo account') }}
            </h2>
            @if (Route::has('register'))
                <p class="mt-2 text-sm text-center text-gray-600">
                    {{ __('Non hai un account?') }}
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        {{ __('Registrati') }}
                    </a>
                </p>
            @endif
        </div>

        <div class="mt-8 bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate" class="space-y-6">
                <div>
                    {{ $form }}
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model="remember" id="remember" type="checkbox" 
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            {{ __('Ricordami') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-blue-600 hover:text-blue-500">
                                {{ __('Password dimenticata?') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        {{ __('Accedi') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
