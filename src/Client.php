<?php namespace Mtsite\AmoCRM;

use Mtsite\AmoCRM\Http\Request;

class Client
{
 	public $request = null;

	function __construct($subdomain, $user_login, $user_hash)
	{
		$this->request = new Request($subdomain, $user_login, $user_hash);
	}

	public function __get($entity)
	{
		$className = '\\Mtsite\\AmoCRM\\Entity\\' . ucfirst($entity);

		return new $className();
	}
}