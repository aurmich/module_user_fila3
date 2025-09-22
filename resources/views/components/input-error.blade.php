<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 079c9da7 (.)
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
<<<<<<< HEAD
@endif
=======
@endif 
>>>>>>> 079c9da7 (.)
