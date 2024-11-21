<?php
namespace controllers;

require_once('../DAO/DAOambiental.php');

use DAO\DAOAmbiental;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO da ambiental
 * 
 * @author Arthur Alves
 */

class ControllerAmbiental{
    /**
     * Recebe um objeto do tipo ambiental, verifica se é apto para salvar, e envia para a DAO executar a operação solicitada
     * 
     * @param Ambiental $ambiental objeto do tipo ambiental
     * @return TRUE|Exception 
     */
    public function salvarIndicadores($ambiental){
        $daoAmbiental = new DAOAmbiental;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoAmbiental->incluirIndicador($ambiental->qtdadeClientesNovos, $ambiental->qtdOrcamentoAprovado, $ambiental->qtdOrcamentosRealizados, $ambiental->data);
            return true;
           
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }
    }
}

?>