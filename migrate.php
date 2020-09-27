<?php

require_once __DIR__ . '/init.php';
require_once __DIR__ . '/main/migrate/init.php';

/**
 * !!! WARNING !!!
 * !!! MAKE SURE YOUR CLASSES ARE INCLUDED FOR THIS SCRIPT !!!
 * !!! WARNING !!!
 */
require_once __DIR__ . '/test/models.php';


$run = new \PhpMyOrm\migrate\MigrateManager();

// removing the script name
$arguments = $argv;
unset($arguments[0]);

//
$run->handle($arguments);

