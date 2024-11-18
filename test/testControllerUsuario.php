<?php
require_once('../controllers/controllerUsuario.php');
use controllers\ControllerUsuario;

$controller = new ControllerUsuario();

$controller->cadastrarUser("Camila", "123456", "recepcao_videira");
/* $controller->fazerLogin("arthur", "123456"); */
?>