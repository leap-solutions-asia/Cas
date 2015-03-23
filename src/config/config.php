<?php

return array(
	'default' => array(

		/*
		|--------------------------------------------------------------------------
		| PHPCas Hostname
		|--------------------------------------------------------------------------
		|
		| Exemple: 'cas.myuniv.edu'.
		|
		*/

		'cas_hostname' => 'cas.domain.fr',

		/*
		|--------------------------------------------------------------------------
		| Use as Cas proxy ?
		|--------------------------------------------------------------------------
		*/

		'cas_proxy' => false,

		/*
		|--------------------------------------------------------------------------
		| Enable service to be proxied
		|--------------------------------------------------------------------------
		|
		| Example:
		| phpCAS::allowProxyChain(new CAS_ProxyChain(array(
		|                                 '/^https:\/\/app[0-9]\.example\.com\/rest\//',
		|                                 'http://client.example.com/'
		|                         )));
		| For the exemple above:
		|	'cas_service' => array('/^https:\/\/app[0-9]\.example\.com\/rest\//','http://client.example.com/'),
		*/

		'cas_service' => array(),

		/*
		|--------------------------------------------------------------------------
		| Cas Port
		|--------------------------------------------------------------------------
		|
		| Usually 443 is default
		|
		*/

		'cas_port' => 443,

		/*
		|--------------------------------------------------------------------------
		| CAS URI
		|--------------------------------------------------------------------------
		|
		| Sometimes is /cas
		|
		*/

		'cas_uri' => '',

		/*
		|--------------------------------------------------------------------------
		| CAS Validation
		|--------------------------------------------------------------------------
		|
		| CAS server SSL validation: 'self' for self-signed certificate, 'ca' for
		| certificate from a CA, empty for no SSL validation.
		|
		*/

		'cas_validation' => '',
		
		/*
		|--------------------------------------------------------------------------
		| CAS Certificate
		|--------------------------------------------------------------------------
		|
		| Path to the CAS certificate file
		|
		*/
		
		'cas_cert' => '/path/to/cert/file',
		
		/*
		|--------------------------------------------------------------------------
		| CAS Login URI
		|--------------------------------------------------------------------------
		|
		| Empty is fine
		|
		*/
		
		'cas_login_url' => '',
		
		/*
		|--------------------------------------------------------------------------
		| CAS Logout URI
		|--------------------------------------------------------------------------
		*/
		
		'cas_logout_url' => 'https://cas.domain.fr/logout?service=%s',
		
		/*
		|--------------------------------------------------------------------------
		| CAS Post Authenticate Callback
		|--------------------------------------------------------------------------
		|
		| This function is called after authentication is successful and takes in 
		| the ticket as an argument.
		|
		*/
		'cas_post_authenticate_callback' => '',
	)
);
