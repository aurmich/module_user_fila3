<x-layouts.app>
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-lg shadow">
            <h2 class="text-2xl font-bold text-gray-900">{{ __('Logout effettuato con successo') }}</h2>
            <a href="{{ route('home') }}" class="mt-6 block text-blue-500 underline">{{ __('Torna alla Home') }}</a>
        </div>
    </div>
</x-layouts.app>
