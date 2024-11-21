<?php
require_once('../controllers/controllerUsuario.php');
use controllers\ControllerUsuario;

$controller = new ControllerUsuario();

$controller->cadastrarUser("Mari", "123456", "ambiental");
/* $controller->fazerLogin("arthur", "123456"); */
?>