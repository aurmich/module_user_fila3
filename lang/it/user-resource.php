<?php

return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Il nome dell\'utente',
            'validation' => [
                'required' => 'Il nome è obbligatorio',
<<<<<<< HEAD
<<<<<<< HEAD
                'max' => 'Il nome non può superare i 255 caratteri',
            ],
=======
                'max' => 'Il nome non può superare i 255 caratteri'
            ]
>>>>>>> 8055579 (.)
=======
                'max' => 'Il nome non può superare i 255 caratteri'
            ]
>>>>>>> 8d82f8c (.)
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'help' => 'Il cognome dell\'utente',
            'validation' => [
                'required' => 'Il cognome è obbligatorio',
<<<<<<< HEAD
<<<<<<< HEAD
                'max' => 'Il cognome non può superare i 255 caratteri',
            ],
=======
                'max' => 'Il cognome non può superare i 255 caratteri'
            ]
>>>>>>> 8055579 (.)
=======
                'max' => 'Il cognome non può superare i 255 caratteri'
            ]
>>>>>>> 8d82f8c (.)
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci l\'email',
            'help' => 'L\'email dell\'utente',
            'validation' => [
                'required' => 'L\'email è obbligatoria',
                'email' => 'Inserisci un\'email valida',
                'max' => 'L\'email non può superare i 255 caratteri',
<<<<<<< HEAD
<<<<<<< HEAD
                'unique' => 'Questa email è già registrata',
            ],
=======
                'unique' => 'Questa email è già registrata'
            ]
>>>>>>> 8055579 (.)
=======
                'unique' => 'Questa email è già registrata'
            ]
>>>>>>> 8d82f8c (.)
        ],
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
        'remember_me' => [
            'label' => 'Ricordami',
            'help' => 'Mantieni la sessione attiva',
        ],
=======
                'same' => 'Le password non coincidono'
            ]
        ],
        'remember_me' => [
            'label' => 'Ricordami',
            'help' => 'Mantieni la sessione attiva'
        ]
>>>>>>> 8055579 (.)
=======
                'same' => 'Le password non coincidono'
            ]
        ],
        'remember_me' => [
            'label' => 'Ricordami',
            'help' => 'Mantieni la sessione attiva'
        ]
>>>>>>> 8d82f8c (.)
    ],
    'actions' => [
        'create' => [
            'label' => 'Nuovo Utente',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Crea un nuovo utente',
=======
            'tooltip' => 'Crea un nuovo utente'
>>>>>>> 8d82f8c (.)
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica l\'utente'
        ],
        'delete' => [
            'label' => 'Elimina',
<<<<<<< HEAD
            'tooltip' => 'Elimina l\'utente',
        ],
=======
            'tooltip' => 'Crea un nuovo utente'
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica l\'utente'
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina l\'utente'
        ]
>>>>>>> 8055579 (.)
=======
            'tooltip' => 'Elimina l\'utente'
        ]
>>>>>>> 8d82f8c (.)
    ],
    'teams' => [
        'personal_team' => [
            'label' => 'Team Personale',
<<<<<<< HEAD
<<<<<<< HEAD
            'help' => 'Il team personale dell\'utente',
        ],
=======
            'help' => 'Il team personale dell\'utente'
        ]
>>>>>>> 8055579 (.)
=======
            'help' => 'Il team personale dell\'utente'
        ]
>>>>>>> 8d82f8c (.)
    ],
    'devices' => [
        'fields' => [
            'uuid' => [
                'label' => 'UUID',
<<<<<<< HEAD
<<<<<<< HEAD
                'help' => 'Identificativo univoco del dispositivo',
=======
                'help' => 'Identificativo univoco del dispositivo'
>>>>>>> 8d82f8c (.)
            ],
            'mobile_id' => [
                'label' => 'Mobile ID',
                'help' => 'Identificativo del dispositivo mobile'
            ],
            'languages' => [
                'label' => 'Lingue',
                'help' => 'Le lingue supportate dal dispositivo'
            ],
            'device_name' => [
                'label' => 'Nome Dispositivo',
<<<<<<< HEAD
                'help' => 'Il nome del dispositivo',
            ],
        ],
=======
                'help' => 'Identificativo univoco del dispositivo'
            ],
            'mobile_id' => [
                'label' => 'Mobile ID',
                'help' => 'Identificativo del dispositivo mobile'
            ],
            'languages' => [
                'label' => 'Lingue',
                'help' => 'Le lingue supportate dal dispositivo'
            ],
            'device_name' => [
                'label' => 'Nome Dispositivo',
                'help' => 'Il nome del dispositivo'
            ]
        ]
>>>>>>> 8055579 (.)
=======
                'help' => 'Il nome del dispositivo'
            ]
        ]
>>>>>>> 8d82f8c (.)
    ],
    'permissions' => [
        'fields' => [
            'name' => [
                'label' => 'Nome',
<<<<<<< HEAD
<<<<<<< HEAD
                'help' => 'Il nome del permesso',
=======
                'help' => 'Il nome del permesso'
>>>>>>> 8d82f8c (.)
            ],
            'guard_name' => [
                'label' => 'Guard Name',
                'help' => 'Il nome della guardia'
            ],
            'active' => [
                'label' => 'Attivo',
                'help' => 'Stato di attivazione del permesso'
            ],
            'created_at' => [
                'label' => 'Data Creazione',
<<<<<<< HEAD
                'help' => 'Data di creazione del permesso',
            ],
        ],
=======
                'help' => 'Il nome del permesso'
            ],
            'guard_name' => [
                'label' => 'Guard Name',
                'help' => 'Il nome della guardia'
            ],
            'active' => [
                'label' => 'Attivo',
                'help' => 'Stato di attivazione del permesso'
            ],
            'created_at' => [
                'label' => 'Data Creazione',
                'help' => 'Data di creazione del permesso'
            ]
        ]
>>>>>>> 8055579 (.)
=======
                'help' => 'Data di creazione del permesso'
            ]
        ]
>>>>>>> 8d82f8c (.)
    ],
    'widgets' => [
        'recent_logins' => [
            'fields' => [
                'user' => [
                    'label' => 'Utente',
<<<<<<< HEAD
<<<<<<< HEAD
                    'help' => 'L\'utente che ha effettuato l\'accesso',
=======
                    'help' => 'L\'utente che ha effettuato l\'accesso'
>>>>>>> 8d82f8c (.)
                ],
                'login_at' => [
                    'label' => 'Data Accesso',
                    'help' => 'Data e ora dell\'accesso'
                ],
                'ip_address' => [
                    'label' => 'Indirizzo IP',
                    'help' => 'L\'indirizzo IP dell\'utente'
                ],
                'user_agent' => [
                    'label' => 'User Agent',
<<<<<<< HEAD
                    'help' => 'Il browser dell\'utente',
                ],
            ],
        ],
    ],
=======
                    'help' => 'L\'utente che ha effettuato l\'accesso'
                ],
                'login_at' => [
                    'label' => 'Data Accesso',
                    'help' => 'Data e ora dell\'accesso'
                ],
                'ip_address' => [
                    'label' => 'Indirizzo IP',
                    'help' => 'L\'indirizzo IP dell\'utente'
                ],
                'user_agent' => [
                    'label' => 'User Agent',
=======
>>>>>>> 8d82f8c (.)
                    'help' => 'Il browser dell\'utente'
                ]
            ]
        ]
    ]
<<<<<<< HEAD
>>>>>>> 8055579 (.)
=======
>>>>>>> 8d82f8c (.)
];
