<?php
return [

	'facebook' => [
		'client_id' => getenv('AUTH_FB_CLIENT_ID'),
		'client_secret' => getenv('AUTH_FB_CLIENT_SECRET'),
		'redirect' => 'http://microstore.dev/auth/facebook/callback'
	],

];
