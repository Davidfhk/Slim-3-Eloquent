<?php

namespace App\Controllers;
use App\Models\User;

class UserController
{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function getAll($request, $response){

		$user = new User($this->db);
		$datas = $user->getAll();
		$response = $response->withJson($datas);
		return $response;
	}

	public function getUserForId($request, $response, $args){
		$id = $args['id'];
		$user = new User($this->db);
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

		$user = new User($this->db);
		$user->addUser($name,$surname,$email,$fav);

	}

	public function putUser($request, $response, $args){
		$datasUpdate = $request->getParsedBody();

		$id = $args['id'];
		$name = $datasUpdate['name'];
		$surname = $datasUpdate['surname'];
		$email = $datasUpdate['email'];
		$fav = $datasUpdate['fav'];

		$user = new User($this->db);
		$user->putUser($id,$name,$surname,$email,$fav);

	}

	public function deleteUser($request, $response, $args){
		$id = $args['id'];

		$user = new User($this->db);
		$user->deleteUser($id);
		
	}
}