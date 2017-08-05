<?php

namespace App\Models;

class User
{
	private $container;

	public function __construct($container){
		$this->container = $container;
	}

	public function getAll(){
		return $this->container->db->table('users')
			->select('*')->get();
	}

	public function getUserForId($id){
		return $this->container->db->table('users')
			->select('*')->where('id','=',$id)->get();
	}

	public function addUser($name,$surname,$email,$fav = 0){
		$this->container->db->table('users')
			->insert([
					'nombre'=>$name,
					'apellido'=>$surname,
					'email'=>$email,
					'favorito'=>$fav
					]);
		echo "El usuario ". $name . " ha sido insertado con exito";
	}


}