<?php
<<<<<<< HEAD

declare(strict_types=1);


use Livewire\Volt\Component;

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;
use function Laravel\Folio\render;
use function Laravel\Folio\withTrashed;
=======
use Livewire\Volt\Component;

use function Laravel\Folio\{withTrashed, middleware, name, render};
>>>>>>> 079c9da7 (.)

//withTrashed();
middleware(['auth']);
name('errors.password-expired');
//Expression "new class extends \Livewire\Volt\Component…" on a separate line does not do anything.
// @phpstan-ignore expr.resultUnused
<<<<<<< HEAD
new class() extends Component {};
=======
new class () extends Component {};
>>>>>>> 079c9da7 (.)

?>
<x-layouts.marketing>
    {{--  
    @volt('errors.password-expired')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50 py-12">
        <h1>..</h1>
        
        
    </div>
    @endvolt
    --}}
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-md">

            @livewire(\Modules\User\Filament\Widgets\PasswordExpiredWidget::class)
        </div>
    </div>
</x-layouts.marketing>
