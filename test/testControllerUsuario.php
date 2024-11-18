<?php
require_once('../controllers/controllerUsuario.php');
use controllers\ControllerUsuario;

$controller = new ControllerUsuario();

$controller->cadastrarUser("Elis", "comercial", "comercial");
/* $controller->fazerLogin("arthur", "123456"); */
?>