<?php

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
                'max' => 'La password non può superare i 255 caratteri'
            ]
=======
                'max' => 'La password non può superare i 255 caratteri',
            ],
>>>>>>> d95d1a6 (.)
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
                'same' => 'Le password non coincidono'
            ]
        ]
    ]
]; 
=======
                'same' => 'Le password non coincidono',
            ],
        ],
    ],
];
>>>>>>> d95d1a6 (.)
