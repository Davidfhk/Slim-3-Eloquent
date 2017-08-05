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

		$user = new User($this->container);
		$datas = $user->getAll();
		$response = $response->withJson($datas);
		return $response;
	}

	public function getUserForId($request, $response, $args){
		$id = $args['id'];
		$user = new User($this->container);
		$datas = $user->getUserForId($id);
		$response = $response->withJson($datas);
		return $response;

	}

	public function addUser($request, $response, $args){
		$newDatas = $request->getParsedBody();

		$name = $newDatas['name'];
		$surname = $newDatas['surname'];
		$email = $newDatas['email'];
		$fav = $newDatas['fav'];

		$user = new User($this->container);
		$user->addUser($name,$surname,$email,$fav);

	}
}