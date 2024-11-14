<?php
namespace models;

/**
 * Classe Model para a tabela recepcao_fraiburgo
 * Representa os dados de recepção para a unidade Fraiburgo.
 */
class RecepcaoFraiburgo {
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
     * Quantidade de clínicos atendidos
     * @var int
     */
    public $clinico;

    /**
     * Quantidade de exames de audiometria realizados
     * @var int
     */
    public $audiometria;

    /**
     * Quantidade de exames de espirometria realizados
     * @var int
     */
    public $espirometria;

    /**
     * Quantidade de exames de acuidade realizados
     * @var int
     */
    public $acuidade;

    /**
     * Quantidade de exames de ECG realizados
     * @var int
     */
    public $ecg;

    /**
     * Quantidade de exames de EEG realizados
     * @var int
     */
    public $eeg;

    /**
     * Construtor da classe RecepcaoFraiburgo
     * Inicializa os dados de um registro.
     */
    public function __construct($id = null, $data = null, $clinico = null, $audiometria = null,
        $espirometria = null, $acuidade = null, $ecg = null, $eeg = null) {
        $this->id = $id;
        $this->data = $data;
        $this->clinico = $clinico;
        $this->audiometria = $audiometria;
        $this->espirometria = $espirometria;
        $this->acuidade = $acuidade;
        $this->ecg = $ecg;
        $this->eeg = $eeg;
    }
}
?>
