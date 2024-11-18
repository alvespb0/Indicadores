<?php
require_once('../DAO/DAOusuario.php');
use DAO\DAOUsuario;

$dao = new DAOUsuario();
/* $dao->cadastrarUsuario("arthur", "123456", "recepcao"); */
$dao->logar("arthur1", "123456");
?>
