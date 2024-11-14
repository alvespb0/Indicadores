<?php
namespace controllers;

require_once('../DAO/DAOcomercial.php');

use DAO\DAOcomercial;

/**
 * essa classe é responsável para fazer o tratamento de dados para apresentação e/ou
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO do comercial
 * 
 * @author Arthur Alves
 */

class ControllerComercial{
    /**
     * recebe um objeto do tipo comercial, verifica se é apto para salvar, e envia para a DAO realizar a operação de inclusão
     * 
     * @param Comercial $comercial objeto da classe comercial
     * @return TRUE|Exception
     */

    public function salvarIndicadores($comercial){
        $daoComercial = new DAOcomercial;
        /**
         * Tenta incluir indicador no caso de falha
         * retorna a excessão
         */
        try{
            $daoComercial->incluirIndicador($comercial->propostasEnviadas, $comercial->propostasFechadas, $comercial->contFechadasAtualComp,
            $comercial->renovacaoAtualComp, $comercial->ClientesNovosAtualComp, $comercial->valoresContratos, $comercial->data);
            return true;
        }catch(\Exception $e){
            throw new \Exception($e->getmessage());
        }

    }
}
?>