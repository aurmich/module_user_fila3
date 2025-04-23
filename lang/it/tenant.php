<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 890be7f (fix: auto resolve conflict)
return array (
  'navigation' => 
  array (
    'name' => 'Tenant',
    'plural' => 'Tenants',
    'group' => 
    array (
      'name' => 'Gestione Utenti',
      'description' => 'Gestione dei tenant e delle loro configurazioni',
    ),
    'label' => 'tenant',
    'sort' => 30,
    'icon' => 'user-user-tenant',
  ),
  'table' => 
  array (
    'heading' => 'Tenant',
  ),
  'fields' => 
  array (
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'secondary_color' => 
    array (
      'label' => 'secondary_color',
    ),
    'slug' => 
    array (
      'label' => 'slug',
    ),
    'name' => 
    array (
      'label' => 'name',
    ),
    'id' => 
    array (
      'label' => 'id',
    ),
    'message' => 
    array (
      'label' => 'message',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'recordId' => 
    array (
      'label' => 'recordId',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'change_password' => 'Cambio password',
  ),
  'model' => 
  array (
    'label' => 'tenant.model',
  ),
);
<<<<<<< HEAD
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
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'secondary_color' => [
            'label' => 'secondary_color',
        ],
        'slug' => [
            'label' => 'slug',
        ],
        'name' => [
            'label' => 'name',
        ],
        'id' => [
            'label' => 'id',
        ],
        'message' => [
            'label' => 'message',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
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
    ],
];
>>>>>>> 40b5428 (Merge remote-tracking branch 'origin/dev' into dev)
=======
>>>>>>> 890be7f (fix: auto resolve conflict)
