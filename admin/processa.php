<?php

require_once 'admin.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
}else
{
	removeVisitante();
}

$UserManager = Users::getInstance();
$id = $UserManager::getUserId($usuario,$senha);


if(is_null($id))
{
	removeVisitante();
}

$_SESSION['usuario']=$usuario;
$_SESSION['senha']=$senha;

header('location:index.php');


