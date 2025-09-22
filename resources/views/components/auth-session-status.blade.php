<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 079c9da7 (.)
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
<<<<<<< HEAD
@endif
=======
@endif 
>>>>>>> 079c9da7 (.)
