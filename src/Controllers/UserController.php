<?php

namespace App\Controllers;
use App\Models\User;

class UserController
{
	private $container;

	public function __construct($container){
		$this->container = $container;
	}

	public function getAll($request, $response){

		$datas = new User($this->container);
		$show = $datas->getAll();
		$response = $response->withJson($show);
		return $response;
	}
}