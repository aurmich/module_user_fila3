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
<<<<<<< HEAD
                'max' => 'La password non può superare i 255 caratteri',
            ],
=======
                'max' => 'La password non può superare i 255 caratteri'
            ]
>>>>>>> 8055579 (.)
=======
                'max' => 'La password non può superare i 255 caratteri'
            ]
>>>>>>> 8d82f8c (.)
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
<<<<<<< HEAD
                'same' => 'Le password non coincidono',
            ],
        ],
    ],
];
=======
=======
>>>>>>> 8d82f8c (.)
                'same' => 'Le password non coincidono'
            ]
        ]
    ]
<<<<<<< HEAD
]; 
>>>>>>> 8055579 (.)
=======
]; 
>>>>>>> 8d82f8c (.)
