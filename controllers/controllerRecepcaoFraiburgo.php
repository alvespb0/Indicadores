<?php
namespace controllers;

require_once('../DAO/DAOrecepcaoFraiburgo.php');

use DAO\DAORecepcaoFraiburgo;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO da recepção de fraiburgo
 * 
 * @author Arthur Alves
 */

class ControllerRecepcaoFraiburgo{
    /**
     * Recebe um objeto do tipo fraiburgo, verifica se é apto para salvar, e envia para a DAO executar a operação solicitada
     * 
     * @param RecepcaoFraiburgo $RecepcaoFraiburgo objeto do tipo RecepcaoFraiburgo
     * @return TRUE|Exception 
     */
    public function salvarIndicadores($RecepcaoFraiburgo){
        $daoFraiburgo = new DAORecepcaoFraiburgo;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoFraiburgo->incluirIndicador($RecepcaoFraiburgo->clinico, $RecepcaoFraiburgo->audiometria, $RecepcaoFraiburgo->espirometria, $RecepcaoFraiburgo->acuidade,
        $RecepcaoFraiburgo->ecg, $RecepcaoFraiburgo->eeg, $RecepcaoFraiburgo->data);
            return true;
           
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }
    }
}

?>