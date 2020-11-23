<?php

return [

	# defining databases
	'DATABASES'     => [
		'default' => [
			'database_name' => '_orm_test',
			'user'          => 'user',
			'password'      => 'root2',
			'host'          => '127.0.0.1',
			'port'          => '3306',
			'use_ssl'       => false,
		],
		'default_2' => [
			'database_name' => '_orm_test',
			'user'          => 'user',
			'password'      => 'root2',
			'host'          => '127.0.0.1',
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
