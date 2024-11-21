<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/controllerSeguranca.php');
require_once('../models/seguranca.php'); 

use controllers\ControllerSeguranca;
use models\Seguranca;

        // Criar o objeto RecepcaoCacador com dados simulados
        $seguranca = new Seguranca();
        $seguranca->laudosEmitidos = 5;
        $seguranca->laudosVendidos = 6;
        $seguranca->qtdLevantamentosRealizados = 7;
        $seguranca->treinamentosRealizados = 8;
        $seguranca->data = '2024-11-16';


        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerSeguranca();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($seguranca);
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
