<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 079c9da7 (.)
<x-filament-panels::page>

    <x-filament-panels::form wire:submit="updateData">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getUpdateFormActions()"
        />

    </x-filament-panels::form>

</x-filament-panels::page>
