<?php

// Application Settings

$config['site'] = array(
  'timezone' => 'America/Chicago'
)


// =======================================
// = Shortstack (MVC) Framework Settings =
// =======================================
$config['shortstack'] = array(
  'db' => array(
    'engine'   => 'sqlite', // Only one supported as yet
    'database' => 'app/data/database.sqlite3',
    'autoconnect' => true,
    'verify' => true,
  ),
  'models' => array(
    'folder' => 'app/models',
  ),
  'views' => array(
    'folder' => 'app/views',
    'force_short_tags' => false,
    'cache_folder' => 'app/views/_cache'
  ),
  'controllers' => array(
    'folder' => 'app/controllers',
    '404_handler'=>'home',
  ),
  'helpers' => array(
    'folder' => 'app/helpers',
    'autoload'=> array(),
  ),
);