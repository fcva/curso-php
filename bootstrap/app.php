<?php 

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\Usuario;

$usuario = new Usuario();

$usuario->setNombre('Alan Turing');

echo "Nombre: ".$usuario->getNombre();