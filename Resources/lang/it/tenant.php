<?php return array (
  'navigation' => 
  array (
    'name' => 'Tenant',
    'plural' => 'Tenant',
    'group' => 
    array (
      'name' => 'Admin',
    ),
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
);