<?php
require_once('../controllers/controllerUsuario.php');
use controllers\ControllerUsuario;

$controller = new ControllerUsuario();

$controller->cadastrarUser("Carina", "123456", "seguranca");
/* $controller->fazerLogin("arthur", "123456"); */
?>