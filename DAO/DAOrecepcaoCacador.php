<?php
namespace DAO;

require_once('../models/recepcaoCacador.php');
use models\RecepcaoCacador;

/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções CRUD para a tabela de recepção caçador
 * @author Arthur Alves
 * @package DAO
 */

class DAORecepcaoCacador{
    /**
     * Inclui os indicadores
     * @param int $clinicos
     * @param int $audiometria
     * @param int $acuidade
     * @param int $fonoaudiologia
     * @param int $ecg
     * @param int $eeg
     * @param int $espirometria
     * @param int $raio_x
     * @param int $av_psicossocial
     * @param int $av_medica
     * @param int $laboratoriais
     * @param int $pericias
     * @param string $data 
     * @return TRUE|Exception
     */
    public function incluirIndicador($clinicos, $audiometria, $acuidade,
    $fonoaudiologia, $ecg, $eeg, $espirometria, $raio_x, $av_psicossocial, $av_medica, $laboratoriais, $pericias, $data){
        try{
            $conexaoDB = $this->conectarBanco();
        }catch(\Exception $e){
            die($e->getMessage());
        }
        
        $sqlInsert = $conexaoDB->prepare("INSERT INTO recepcao_cacador
            (`data`, clinicos, audiometria, acuidade, fonoaudiologia_clinica, ecg, eeg, 
            espirometria, raio_x, av_psicossocial, av_medica, laboratoriais, pericias) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sqlInsert->bind_param("siiiiiiiiiiii",$data, $clinicos, $audiometria, $acuidade, 
        $fonoaudiologia, $ecg, $eeg, $espirometria, $raio_x, $av_psicossocial, $av_medica, $laboratoriais, $pericias);
        $sqlInsert->execute();

        if(!$sqlInsert->error){
            $retorno = TRUE;
        }else{
            throw new \Exception ("não foipossível incluir indicador");
            die;
        }
        $conexaoDB->close();
        $sqlInsert->close();
        return $retorno;
    }

    /**
     * Estabelece a conexão com o banco de dados.
     *
     * @return \MySQLi
     * @throws \Exception
     */
    private function conectarBanco() {
        if (!defined('DS')) {
            define('DS', DIRECTORY_SEPARATOR);
        }
        if (!defined('BASE_DIR')) {
            define('BASE_DIR', dirname(__FILE__) . DS);
        }

        require(BASE_DIR . 'configdb.php');  // Inclui as configurações do banco de dados

        try {
            $conn = new \MySQLi($dbhost, $user, $password, $banco);  // Cria a conexão
            return $conn;
        } catch (mysqli_sql_exception $e) {
            throw new \Exception("Erro na conexão com o banco de dados: " . $e->getMessage());  // Lança exceção se a conexão falhar
        }
    }
  
}
?>