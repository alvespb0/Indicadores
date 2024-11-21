<?php
namespace controllers;

require_once('../DAO/DAOseguranca.php');

use DAO\DAOSeguranca;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO da área técnica
 * 
 * @author Arthur Alves
 */

class ControllerSeguranca{
    /**
     * Recebe um objeto do tipo Seguranca, verifica se é apto para salvar, e envia para a DAO executar a operação solicitada
     * 
     * @param Seguranca $Seguranca objeto do tipo seguranca
     * @return TRUE|Exception 
     */
    public function salvarIndicadores($seguranca){
        $daoSeguranca = new DAOSeguranca;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoSeguranca->incluirIndicador($seguranca->laudosEmitidos, $seguranca->laudosVendidos, $seguranca->qtdLevantamentosRealizados,
            $seguranca->treinamentosRealizados, $seguranca->data);
            return true;
           
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }
    }
}

?>