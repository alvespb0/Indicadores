<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/controllerRecepcaovIDEIRA.php');
require_once('../models/recepcaoVideira.php'); 

use controllers\ControllerRecepcaoVideira;
use models\RecepcaoVideira;

        // Criar o objeto RecepcaoCacador com dados simulados
        $recepcaoVideira = new RecepcaoVideira();
        $recepcaoVideira->clinico = 10;
        $recepcaoVideira->audiometria = 15;
        $recepcaoVideira->espirometria = 25;
        $recepcaoVideira->acuidade = 46;
        $recepcaoVideira->ecg = 223;
        $recepcaoVideira->eeg = 43;
        $recepcaoVideira->data = '2026-11-16';


        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerRecepcaoVideira();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($recepcaoVideira);
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
