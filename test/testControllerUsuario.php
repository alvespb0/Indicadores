<?php
require_once('../controllers/controllerUsuario.php');
use controllers\ControllerUsuario;

$controller = new ControllerUsuario();

$controller->cadastrarUser("Samara", "123456", "recepcao_fraiburgo");
/* $controller->fazerLogin("arthur", "123456"); */
?>