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
}