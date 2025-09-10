<?php

<<<<<<< HEAD
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Nome del tenant',
            'helper_text' => 'Inserisci il nome del tenant',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Slug del tenant',
            'helper_text' => 'Lo slug verrà generato automaticamente dal nome',
        ],
        'domain' => [
            'label' => 'Dominio',
            'placeholder' => 'dominio',
            'helper_text' => 'Il dominio del tenant',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'email@example.com',
            'helper_text' => 'Indirizzo email del tenant',
        ],
        'phone' => [
            'label' => 'Telefono',
            'placeholder' => 'Telefono',
            'helper_text' => 'Numero di telefono del tenant',
        ],
        'mobile' => [
            'label' => 'Cellulare',
            'placeholder' => 'Cellulare',
            'helper_text' => 'Numero di cellulare del tenant',
        ],
        'address' => [
            'label' => 'Indirizzo',
            'placeholder' => 'Indirizzo',
            'helper_text' => 'Indirizzo del tenant',
        ],
        'primary_color' => [
            'label' => 'Colore Primario',
            'helper_text' => 'Colore primario del tenant',
        ],
        'secondary_color' => [
            'label' => 'Colore Secondario',
            'helper_text' => 'Colore secondario del tenant',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Tenant',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
        ],
        'edit' => [
            'label' => 'Modifica Tenant',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
        ],
        'delete' => [
            'label' => 'Elimina Tenant',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
        ],
=======
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Tenant',
        'plural' => 'Tenants',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione dei tenant e delle loro configurazioni',
        ],
        'label' => 'tenant',
        'sort' => 30,
        'icon' => 'user-user-tenant',
    ],
    'table' => [
        'heading' => 'Tenant',
    ],
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome del tenant',
            'description' => 'Nome di battesimo del tenant',
            'helper_text' => '',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome',
            'tooltip' => 'Cognome del tenant',
            'description' => 'Cognome di famiglia del tenant',
            'helper_text' => '',
        ],
        'secondary_color' => [
            'label' => 'Colore Secondario',
            'placeholder' => 'Seleziona colore secondario',
            'tooltip' => 'Colore secondario del tema',
            'description' => 'Colore utilizzato come tono secondario nell\'interfaccia',
            'helper_text' => '',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'inserisci-slug-univoco',
            'tooltip' => 'Identificatore URL-friendly',
            'description' => 'Identificatore univoco utilizzato negli URL',
            'helper_text' => '',
        ],
        'name' => [
            'label' => 'Nome Tenant',
            'placeholder' => 'Inserisci nome del tenant',
            'tooltip' => 'Nome identificativo del tenant',
            'description' => 'Nome completo o ragione sociale del tenant',
            'helper_text' => '',
        ],
        'id' => [
            'label' => 'ID',
            'placeholder' => 'ID univoco',
            'tooltip' => 'Identificatore univoco',
            'description' => 'Chiave primaria del tenant nel database',
            'helper_text' => '',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Inserisci un messaggio',
            'tooltip' => 'Messaggio informativo',
            'description' => 'Messaggio di comunicazione per il tenant',
            'helper_text' => '',
        ],
        'resetFilters' => [
            'label' => 'Azzera Filtri',
            'placeholder' => 'Clicca per azzerare',
            'tooltip' => 'Rimuove tutti i filtri applicati',
            'description' => 'Azione per rimuovere tutti i filtri attivi',
            'helper_text' => '',
        ],
        'applyFilters' => [
            'label' => 'Applica Filtri',
            'placeholder' => 'Clicca per applicare',
            'tooltip' => 'Applica i filtri selezionati',
            'description' => 'Azione per applicare i filtri configurati',
            'helper_text' => '',
        ],
    ],
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
        'change_password' => 'Cambio password',
>>>>>>> 4b721437 (.)
    ],
];
