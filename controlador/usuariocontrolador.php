<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/crud/usuariocrud.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/cancion.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cc = $_POST['cc'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];

    $cd = new UsuarioCrud();
    $u = $cd->agregar($cc, $pass, $nombre, $apellido, $genero, $email);

    if($u) {
        header('Location: ../webpages/view/usuarios/registrar.php?mensaje=Usuario registrado correctamente');
    } else {
        header('Location: ../webpages/view/usuarios/registrar.php?mensaje=Error al registrar el usuario');
    }

}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $cd = new UsuarioCrud();
    $us = $cd->listar();
    
}
?>








