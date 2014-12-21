<?php

return [

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'sqlite',

	'connections' => [

		'sqlite' => [
			'driver'   => 'sqlite',
			'database' => storage_path().'/test.sqlite',
			'prefix'   => '',
		],

		'mysql' => [
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'forge',
			'username'  => 'forge',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		]

	],

	'migrations' => 'migrations'

];
