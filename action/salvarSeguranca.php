<?php
namespace action;

require_once('../controllers/controllerSeguranca.php');
require_once('../models/seguranca.php'); 

use controllers\ControllerSeguranca;
use models\Seguranca;

$controllerSeguranca = new ControllerSeguranca;

if(isset($_POST['cadastrar'])){
    $seguranca = new Seguranca();
    $seguranca->laudosEmitidos = $_POST['LaudosEmitidos'];
    $seguranca->laudosVendidos = $_POST['LaudosVendidos'];
    $seguranca->qtdLevantamentosRealizados = $_POST['qtdLevantamentosRealizados'];
    $seguranca->treinamentosRealizados = $_POST['treinamentosRealizados'];
    $seguranca->data = $_POST['data'];
    $controllerSeguranca->salvarIndicadores($seguranca);
}
?>
