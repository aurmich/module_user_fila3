<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> 079c9da7 (.)
return [
    'fields' => [
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la password',
            'help' => 'La password deve essere di almeno 8 caratteri',
            'validation' => [
                'required' => 'La password è obbligatoria',
                'min' => 'La password deve essere di almeno 8 caratteri',
<<<<<<< HEAD
                'max' => 'La password non può superare i 255 caratteri',
=======
>>>>>>> 079c9da7 (.)
            ],
        ],
        'password_confirmation' => [
            'label' => 'Conferma Password',
            'placeholder' => 'Conferma la password',
            'help' => 'Reinserisci la password per confermare',
            'validation' => [
                'required' => 'La conferma della password è obbligatoria',
                'min' => 'La password deve essere di almeno 8 caratteri',
                'max' => 'La password non può superare i 255 caratteri',
<<<<<<< HEAD
                'same' => 'Le password non coincidono',
=======
>>>>>>> 079c9da7 (.)
            ],
        ],
    ],
];
