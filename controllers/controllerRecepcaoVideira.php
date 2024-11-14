<?php
namespace controllers;

require_once('../DAO/DAOrecepcaoVideira.php');

use DAO\DAORecepcaoVideira;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO da recepção de Videira
 * 
 * @author Arthur Alves
 */

class ControllerRecepcaoVideira{
    /**
     * Recebe um objeto do tipo Videira, verifica se é apto para salvar, e envia para a DAO executar a operação solicitada
     * 
     * @param RecepcaoVideira $RecepcaoVideira objeto do tipo RecepcaoVideira
     * @return TRUE|Exception 
     */
    public function salvarIndicadores($RecepcaoVideira){
        $daoVideira = new DAORecepcaoVideira;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoVideira->incluirIndicador($RecepcaoVideira->clinico, $RecepcaoVideira->audiometria, $RecepcaoVideira->espirometria, $RecepcaoVideira->acuidade,
        $RecepcaoVideira->ecg, $RecepcaoVideira->eeg, $RecepcaoVideira->data);
            return true;
           
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }
    }
}

?>