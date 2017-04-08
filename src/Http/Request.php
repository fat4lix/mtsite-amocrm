<?php namespace Mtsite\AmoCRM\Http;


/**
* 
*/
class Request
{
	const API_BASE = 'https://%s.amocrm.ru/';

	private $base_uri = null;

	function __construct($subdomain, $user_login, $user_hash)
	{
		$this->base_uri = sprintf(self::API_BASE, $subdomain);

		$this->user_login = $user_login;

		$this->user_hash = $user_hash;
	}

}