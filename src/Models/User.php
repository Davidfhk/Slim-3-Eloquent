<?php

namespace App\Models;

class User
{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function getAll(){
		return $this->db->table('users')
			->select('*')->get();
	}

	public function getUserForId($id){
		return $this->db->table('users')
			->select('*')->where('id',$id)->get();
	}

	public function addUser($name,$surname,$email,$fav = 0){
		$this->db->table('users')
			->insert([
					'nombre'=>$name,
					'apellido'=>$surname,
					'email'=>$email,
					'favorito'=>$fav
					]);
		echo "El usuario ". $name . " ha sido insertado con exito";
	}

	public function putUser($id,$name,$surname,$email,$fav = 0){
		$this->db->table('users')
			->where('id',$id)
			->update([
					'nombre'=>$name,
					'apellido'=>$surname,
					'email'=>$email,
					'favorito'=>$fav
					]);
		echo "El usuario ". $name . " ha sido modificado con exito";
	}

	public function deleteUser($id){
		$this->db->table('users')
			->where('id',$id)
			->delete();

		echo "Usuario eliminado con exito";
	}
}