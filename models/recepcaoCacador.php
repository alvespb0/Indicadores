<?php
namespace models;

/**
 * Classe Model para a tabela recepcao_cacador
 * Representa os dados de recepção para a unidade Cacador.
 */
class RecepcaoCacador {
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
    public $clinicos;

    /**
     * Quantidade de exames de audiometria realizados
     * @var int
     */
    public $audiometria;

    /**
     * Quantidade de exames de acuidade realizados
     * @var int
     */
    public $acuidade;

    /**
     * Quantidade de atendimentos de fonoaudiologia clínica realizados
     * @var int
     */
    public $fonoaudiologia_clinica;

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
     * Quantidade de exames de espirometria realizados
     * @var int
     */
    public $espirometria;

    /**
     * Quantidade de exames de raio X realizados
     * @var int
     */
    public $raio_x;

    /**
     * Quantidade de avaliações psicossociais realizadas
     * @var int
     */
    public $av_psicossocial;

    /**
     * Quantidade de avaliações médicas realizadas
     * @var int
     */
    public $av_medica;

    /**
     * Quantidade de exames laboratoriais realizados
     * @var int
     */
    public $laboratoriais;

    /**
     * Quantidade de perícias realizadas
     * @var int
     */
    public $pericias;

    /**
     * Construtor da classe RecepcaoCacador
     * Inicializa os dados de um registro.
     */
    public function __construct($id = null, $data = null, $clinicos = null, $audiometria = null, $acuidade = null, $fonoaudiologia_clinica = null,
     $ecg = null, $eeg = null, $espirometria = null, $raio_x = null, $av_psicossocial = null, $av_medica = null, $laboratoriais = null, $pericias = null) {
        $this->id = $id;
        $this->data = $data;
        $this->clinicos = $clinicos;
        $this->audiometria = $audiometria;
        $this->acuidade = $acuidade;
        $this->fonoaudiologia_clinica = $fonoaudiologia_clinica;
        $this->ecg = $ecg;
        $this->eeg = $eeg;
        $this->espirometria = $espirometria;
        $this->raio_x = $raio_x;
        $this->av_psicossocial = $av_psicossocial;
        $this->av_medica = $av_medica;
        $this->laboratoriais = $laboratoriais;
        $this->pericias = $pericias;
    }
}
?>
