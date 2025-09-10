<?php

<<<<<<< HEAD
return array (
  'fields' => 
  array (
    'uuid' => 
    array (
      'label' => 'UUID',
      'placeholder' => 'Inserisci l\'UUID del dispositivo',
      'help' => 'Identificativo univoco del dispositivo',
    ),
    'mobile_id' => 
    array (
      'label' => 'Mobile ID',
      'placeholder' => 'Inserisci l\'ID mobile',
      'help' => 'Identificativo mobile del dispositivo',
    ),
    'languages' => 
    array (
      'label' => 'Lingue',
      'placeholder' => 'Aggiungi una lingua',
      'help' => 'Seleziona o digita i codici delle lingue (es. it, en, es)',
    ),
    'device' => 
    array (
      'label' => 'Nome Dispositivo',
      'placeholder' => 'Inserisci il nome del dispositivo',
      'help' => 'Nome del dispositivo',
    ),
    'platform' => 
    array (
      'label' => 'Piattaforma',
      'placeholder' => 'Inserisci la piattaforma',
      'help' => 'Piattaforma del dispositivo',
    ),
    'browser' => 
    array (
      'label' => 'Browser',
      'placeholder' => 'Inserisci il browser',
      'help' => 'Browser utilizzato',
    ),
    'version' => 
    array (
      'label' => 'Versione',
      'placeholder' => 'Inserisci la versione',
      'help' => 'Versione del browser o sistema',
    ),
    'is_robot' => 
    array (
      'label' => 'È Robot',
      'placeholder' => 'Seleziona se è un robot',
      'help' => 'Indica se il dispositivo è un robot',
    ),
    'robot' => 
    array (
      'label' => 'Robot',
      'placeholder' => 'Inserisci il tipo di robot',
      'help' => 'Tipo di robot se applicabile',
    ),
    'is_desktop' => 
    array (
      'label' => 'È Desktop',
      'placeholder' => 'Seleziona se è desktop',
      'help' => 'Indica se è un dispositivo desktop',
    ),
    'is_mobile' => 
    array (
      'label' => 'È Mobile',
      'placeholder' => 'Seleziona se è mobile',
      'help' => 'Indica se è un dispositivo mobile',
    ),
    'is_tablet' => 
    array (
      'label' => 'È Tablet',
      'placeholder' => 'Seleziona se è tablet',
      'help' => 'Indica se è un tablet',
    ),
    'is_phone' => 
    array (
      'label' => 'È Telefono',
      'placeholder' => 'Seleziona se è telefono',
      'help' => 'Indica se è un telefono',
    ),
  ),
  'navigation' => 
  array (
    'sort' => 50,
    'label' => 'Dispositivi',
    'group' => 'Sicurezza',
    'icon' => 'heroicon-o-device-phone-mobile',
  ),
);
=======
return [
    'fields' => [
        'is_robot' => [
            'label' => 'È Robot',
            'helper_text' => 'Indica se il dispositivo è un robot',
        ],
        'is_desktop' => [
            'label' => 'È Desktop',
            'helper_text' => 'Indica se il dispositivo è un desktop',
        ],
        'is_mobile' => [
            'label' => 'È Mobile',
            'helper_text' => 'Indica se il dispositivo è mobile',
        ],
        'is_tablet' => [
            'label' => 'È Tablet',
            'helper_text' => 'Indica se il dispositivo è un tablet',
        ],
        'is_phone' => [
            'label' => 'È Telefono',
            'helper_text' => 'Indica se il dispositivo è un telefono',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Dispositivo',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
        ],
        'edit' => [
            'label' => 'Modifica Dispositivo',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
        ],
        'delete' => [
            'label' => 'Elimina Dispositivo',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
        ],
    ],
];
>>>>>>> d95d1a6 (.)
