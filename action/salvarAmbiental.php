<?php
namespace action;

require_once('../controllers/controllerAmbiental.php');
require_once('../models/ambiental.php'); 

use controllers\ControllerAmbiental;
use models\Ambiental;

$controllerAmbiental = new ControllerAmbiental;

if(isset($_POST['cadastrar'])){
    $ambiental = new Ambiental();
    $ambiental->qtdadeClientesNovos = $_POST['qtdadeClientesNovos'];
    $ambiental->qtdOrcamentoAprovado = $_POST['qtdOrcamentoAprovado'];
    $ambiental->qtdOrcamentosRealizados = $_POST['qtdOrcamentosRealizados'];
    $ambiental->data = $_POST['data'];
    $resultado = $controllerAmbiental->salvarIndicadores($ambiental);
        
    // Se o resultado for verdadeiro, redireciona para a página de sucesso
    if ($resultado === true) {
        header("Location: Salvo_com_sucesso.php"); // Redireciona para Salvo_com_sucesso.php
        exit; // Sempre é bom usar o exit após o header para evitar execução de código posterior
    }
}
?>
