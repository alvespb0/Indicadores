<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/controllerComercial.php');
require_once('../models/comercial.php'); 

use controllers\ControllerComercial;
use models\Comercial;

        // Criar o objeto RecepcaoCacador com dados simulados
        $comercial = new Comercial();
        $comercial->propostasEnviadas = 5;
        $comercial->propostasFechadas = 6;
        $comercial->contFechadasAtualComp = 11;
        $comercial->renovacaoAtualComp = 4;
        $comercial->ClientesNovosAtualComp = 2;
        $comercial->valoresContratos = 100.50;
        $comercial->data = '2024-11-16';


        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerComercial();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($comercial);
            echo $resultado;
            if ($resultado) {
                echo "Indicadores salvos com sucesso!";
            }else{
                echo "por que entrou aqui?";
            }
        } catch (\Exception $e) {
            // Se ocorrer algum erro, exibe a mensagem
            echo "Erro ao salvar indicadores: " . $e->getMessage();
        }

?>
