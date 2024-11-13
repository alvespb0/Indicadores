<?php
namespace controllers;

require_once('../DAO/DAORecepcaoCacador');

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
     */
    public function salvarIndicadores($RecepcaoCacador){
        $daoCacador = new DAORecepcaoCacador;

        if ($RecepcaoCacador->)
    }
}

?>