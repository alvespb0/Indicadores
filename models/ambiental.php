<?php
namespace models;

/**
 * Classe Model para a tabela ambiental
 * Representa os dados da tabela ambiental
 */

class Ambiental{
    /**
     * id do registro
     * @var $id
     */
    public $id;

    /**
     * quantidade de clientes novos
     * @var $qtdadeClientesNovos
     */
    public $qtdadeClientesNovos;

    /**
     * quantidade de orçamentos aprovados
     * @var $qtdOrcamentoAprovado
     */
    public $qtdOrcamentoAprovado;

    /**
     * Quantidade de orçamentos realizados
     * @var $qtdOrcamentosRealizados
     */
    public $qtdOrcamentosRealizados;

    /**
     * Data do registro
     * @var string (formato YYYY-MM-DD)
     */
    public $data;

    public function __construct($id = null, $qtdadeClientesNovos = null, $qtdOrcamentoAprovado = null, $qtdOrcamentosRealizados = null, $data = null){
        $this->id = $id;
        $this->qtdadeClientesNovos = $qtdadeClientesNovos;
        $this->qtdOrcamentoAprovado = $qtdOrcamentoAprovado;
        $this->qtdOrcamentosRealizados = $qtdOrcamentosRealizados;
        $this->data = $data;
    }
}

?>