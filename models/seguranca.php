<?php
namespace models;

/**
 * Classe Model para a tabela seguranca
 * Representa os dados de recepção para a área técnica.
 */
class Seguranca{
    /**
     * id do registro
     * @var $id;
     */
    public $id;

    /**
     * Laudos Emitidos do registro
     * @var $LaudosEmitidos
     */
    public $laudosEmitidos;

    /**
     * Laudos Vendidos do registro
     * @var $laudosVendidos
     */
    public $laudosVendidos;

    /**
     * Quantidade de levantamentos realizados do registro
     * @var $qtdLevantamentosRealizados
     */
    public $qtdLevantamentosRealizados;

    /**
     * Treinamentos realizados do registro
     * @var $treinamentosRealizados
     */
    public $treinamentosRealizados;

    /**
     * Data do registro
     * @var string (formato YYYY-MM-DD)
     */
    public $data;

    public function __construct($id = null, $laudosEmitidos = null, $laudosVendidos = null,
            $qtdLevantamentosRealizados = null, $treinamentosRealizados = null, $data = null){
        $this->id = $id;
        $this->laudosEmitidos = $laudosEmitidos;
        $this->laudosVendidos = $laudosVendidos;
        $this->qtdLevantamentosRealizados = $qtdLevantamentosRealizados;
        $this->treinamentosRealizados = $treinamentosRealizados;
        $this->data = $data;
    }   
}
?>