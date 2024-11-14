<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/controllerRecepcaoFraiburgo.php');
require_once('../models/recepcaoFraiburgo.php'); 

use controllers\ControllerRecepcaoFraiburgo;
use models\RecepcaoFraiburgo;

        // Criar o objeto RecepcaoCacador com dados simulados
        $recepcaoFraiburgo = new RecepcaoFraiburgo();
        $recepcaoFraiburgo->clinico = 5;
        $recepcaoFraiburgo->audiometria = 6;
        $recepcaoFraiburgo->espirometria = 11;
        $recepcaoFraiburgo->acuidade = 4;
        $recepcaoFraiburgo->ecg = 2;
        $recepcaoFraiburgo->eeg = 3;
        $recepcaoFraiburgo->data = '2024-11-16';


        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerRecepcaoFraiburgo();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($recepcaoFraiburgo);
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
