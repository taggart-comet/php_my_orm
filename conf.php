<?php

return [

	# defining databases
	'DATABASES'     => [
		'default' => [
			'database_name' => 'database_name',
			'user'          => 'user',
			'password'      => 'pass',
			'host'          => '127.0.0.1',
			'port'          => '3306',
			'use_ssl'       => false,
		],
		'logs' => [
			'database_name' => 'database_name',
			'user'          => 'user',
			'password'      => 'pass',
			'host'          => '172.16.0.12',
			'port'          => '3306',
			'use_ssl'       => false,
		],
	],

	# defining models
	'MODEL_CLASSES' => [

		// test models
		'\PhpMyOrm\test\TestModel',
		'\PhpMyOrm\test\TestModelAuto',
		'\PhpMyOrm\test\TestModelMultiPrimary',
	],

	# if debug is enabled it will print in console queries on execution
	'SHOW_DEBUG' => false
];
