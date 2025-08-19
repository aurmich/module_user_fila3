<?php

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
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'tooltip' => 'Nome del tenant',
      'description' => 'Nome di battesimo del tenant',
      'helper_text' => '',
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'tooltip' => 'Cognome del tenant',
      'description' => 'Cognome di famiglia del tenant',
      'helper_text' => '',
    ),
    'secondary_color' => 
    array (
      'label' => 'Colore Secondario',
      'placeholder' => 'Seleziona colore secondario',
      'tooltip' => 'Colore secondario del tema',
      'description' => 'Colore utilizzato come tono secondario nell\'interfaccia',
      'helper_text' => '',
    ),
    'slug' => 
    array (
      'label' => 'Slug',
      'placeholder' => 'inserisci-slug-univoco',
      'tooltip' => 'Identificatore URL-friendly',
      'description' => 'Identificatore univoco utilizzato negli URL',
      'helper_text' => '',
    ),
    'name' => 
    array (
      'label' => 'Nome Tenant',
      'placeholder' => 'Inserisci nome del tenant',
      'tooltip' => 'Nome identificativo del tenant',
      'description' => 'Nome completo o ragione sociale del tenant',
      'helper_text' => '',
    ),
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'ID univoco',
      'tooltip' => 'Identificatore univoco',
      'description' => 'Chiave primaria del tenant nel database',
      'helper_text' => '',
    ),
    'message' => 
    array (
      'label' => 'Messaggio',
      'placeholder' => 'Inserisci un messaggio',
      'tooltip' => 'Messaggio informativo',
      'description' => 'Messaggio di comunicazione per il tenant',
      'helper_text' => '',
    ),
    'resetFilters' => 
    array (
      'label' => 'Azzera Filtri',
      'placeholder' => 'Clicca per azzerare',
      'tooltip' => 'Rimuove tutti i filtri applicati',
      'description' => 'Azione per rimuovere tutti i filtri attivi',
      'helper_text' => '',
    ),
    'applyFilters' => 
    array (
      'label' => 'Applica Filtri',
      'placeholder' => 'Clicca per applicare',
      'tooltip' => 'Applica i filtri selezionati',
      'description' => 'Azione per applicare i filtri configurati',
      'helper_text' => '',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'recordId' => 
    array (
      'description' => 'recordId',
      'label' => 'recordId',
      'placeholder' => 'recordId',
      'helper_text' => 'recordId',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
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
