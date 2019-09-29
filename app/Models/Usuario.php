<?php 

namespace App\Models;

class Usuario
{
	private $nombre;

	public function __construct()
	{
		
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
}