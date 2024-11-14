<?php
// Definindo o namespace para testes
namespace tests;

require_once('../controllers/ControllerRecepcaoCacador.php');
require_once('../models/recepcaoCacador.php'); 

use controllers\ControllerRecepcaoCacador;
use models\RecepcaoCacador;

        // Criar o objeto RecepcaoCacador com dados simulados
        $recepcaoCacador = new RecepcaoCacador();
        $recepcaoCacador->clinicos = 5;
        $recepcaoCacador->audiometria = 4;
        $recepcaoCacador->acuidade = 3;
        $recepcaoCacador->fonoaudiologia_clinica = 2;
        $recepcaoCacador->ecg = 1;
        $recepcaoCacador->eeg = 0;
        $recepcaoCacador->espirometria = 5;
        $recepcaoCacador->raio_x = 1;
        $recepcaoCacador->av_psicossocial = 4;
        $recepcaoCacador->av_medica = 3;
        $recepcaoCacador->laboratoriais = 2;
        $recepcaoCacador->pericias = 1;
        $recepcaoCacador->data = '2024-11-14';

        // Criar o objeto ControllerRecepcaoCacador
        $controller = new ControllerRecepcaoCacador();
        
        try {
            // Testar o método salvarIndicadores do controller
            $resultado = $controller->salvarIndicadores($recepcaoCacador);
            if ($resultado) {
                echo "Indicadores salvos com sucesso!";
            }
        } catch (\Exception $e) {
            // Se ocorrer algum erro, exibe a mensagem
            echo "Erro ao salvar indicadores: " . $e->getMessage();
        }

?>
