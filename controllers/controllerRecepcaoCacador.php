<?php
namespace controllers;

require_once('../DAO/DAORecepcaoCacador.php');

use DAO\DAORecepcaoCacador;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO da recepção de caçador
 * 
 * @author Arthur Alves
 */

class ControllerRecepcaoCacador{
    /**
     * Recebe um objeto do tipo Cacador, verifica se é apto para salvar, e envia para a DAO executar a operação solicitada
     * 
     * @param RecepcaoCacador $RecepcaoCacdor objeto do tipo RecepcaoCacador
     * @return TRUE|Exception 
     */
    public function salvarIndicadores($RecepcaoCacador){
        $daoCacador = new DAORecepcaoCacador;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoCacador->incluirIndicador($RecepcaoCacador->clinicos, $RecepcaoCacador->audiometria, $RecepcaoCacador->acuidade, $RecepcaoCacador->fonoaudiologia_clinica,
            $RecepcaoCacador->ecg, $RecepcaoCacador->eeg, $RecepcaoCacador->espirometria, $RecepcaoCacador->raio_x, $RecepcaoCacador->av_psicossocial, $RecepcaoCacador->av_medica,
            $RecepcaoCacador->laboratoriais, $RecepcaoCacador->pericias, $RecepcaoCacador->data);
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }
    }
}

?>