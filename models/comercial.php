<?php
namespace models;

/**
 * Classe model para a tabela comercial
 * Representa os dados do comercial
 */

class Comercial{
    /**
     * ID do registro
     * @var int
     */
    public $id;
    
    /**
     * Data do registro
     * @var string (formato YYYY-MM-DD)
     */
    public $data;

    /**
     * Propostas enviadas 
     * @var int 
     */
    public $propostasEnviadas;

    /**
     * propostas fechadas
     * @var int
     */
    public $propostasFechadas;

    /**
     * Contratos Fechadas na atual competência
     * @var int
     */
    public $contFechadasAtualComp;

    /**
     * renovações na atual competência
     * @var int
     */
    public $renovacaoAtualComp;

    /**
     * Clientes novos na atual competência
     * @var int
     */
    public $ClientesNovosAtualComp;

    /**
     * valores dos contratos
     * @var float
     */
    public $valoresContratos;

    /**
     * Construtor da classe comercial
     * Inicializa os dados de um registro.
     */

    public function __construct($id, $data, $propostasEnviadas, $propostasFechadas, $contFechadasAtualComp, $renovacaoAtualComp,
        $ClientesNovosAtualComp, $valoresContratos){
            $this->id = $id;
            $this->data = $data;
            $this->propostasEnviadas = $propostasEnviadas;
            $this->propostasFechadas = $propostasFechadas;
            $this->contFechadasAtualComp = $contFechadasAtualComp;
            $this->renovacaoAtualComp = $renovacaoAtualComp;
            $this->ClientesNovosAtualComp = $ClientesNovosAtualComp;
            $this->valoresContratos = $valoresContratos;
    }
}
?>