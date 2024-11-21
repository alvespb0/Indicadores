<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/controllerAmbiental.php');
require_once('../models/ambiental.php'); 

use controllers\ControllerAmbiental;
use models\Ambiental;

        // Criar o objeto RecepcaoCacador com dados simulados
        $ambiental = new Ambiental();
        $ambiental->qtdadeClientesNovos = 10;
        $ambiental->qtdOrcamentoAprovado = 12;
        $ambiental->qtdOrcamentosRealizados = 11;
        $ambiental->data = '2024-11-16';


        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerAmbiental();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($ambiental);
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
