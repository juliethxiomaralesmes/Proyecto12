<?php


try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'senatareas';

$coneccion = mysqli_connect($servidor, $usuario, $password,$bd);
echo'desde conexion';
} catch (\Throwable $th) {
    var_dump($th);
}