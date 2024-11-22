<?php
namespace action;

require_once('../controllers/controllerComercial.php');
require_once('../models/comercial.php'); 

use controllers\ControllerComercial;
use models\Comercial;

$controllerComercial = new ControllerComercial;

if(isset($_POST['cadastrar'])){
    $comercial = new Comercial();
    $comercial->propostasEnviadas = $_POST['PropostasEnviadas'];
    $comercial->propostasFechadas = $_POST['PropostasFechadas'];
    $comercial->contFechadasAtualComp = $_POST['FechadosComp'];
    $comercial->renovacaoAtualComp = $_POST['RenovacaoAtualCompt'];
    $comercial->ClientesNovosAtualComp = $_POST['ClientesNovos'];
    $comercial->valoresContratos = $_POST['Valor_Contratos'];
    $comercial->data = $_POST['data'];
    $resultado = $controllerComercial->salvarIndicadores($comercial);

    if ($resultado === true) {
        header("Location: ../view/indicadoresSalvos.php"); 
        exit;
    }
}
?>
