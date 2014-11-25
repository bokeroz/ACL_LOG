<?php
define('ROOT_PATHSE', dirname(dirname(__DIR__)));
session_save_path(ROOT_PATHSE.'/data/session');
return array(
    'phpSettings'   => array(
        'display_startup_errors'        => true,
        'display_errors'                => true,
        'max_execution_time'            => 60,
        'date.timezone'                 => 'America/Mexico_City',
        'mbstring.internal_encoding'    => 'UTF-8',
    ),
);