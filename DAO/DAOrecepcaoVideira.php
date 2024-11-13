<?php
namespace DAO;

require_once('../models/recepcaoVideira.php');
use models\RecepcaoVideira;

/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções CRUD para a tabela de recepção videira
 * @author Arthur Alves
 * @package DAO
 */
class DAORecepcaoVideira{
    /**
     * inclui indicadores
     * @param int $clinicos
     * @param int $audiometria
     * @param int $espirometria
     * @param int $acuidade
     * @param int $ecg
     * @param int $eeg
     * @param string $data;
     * @return TRUE|Exception
     */
    public function incluirIndicador($clinicos, $audiometria, $espirometria, $acuidade, $ecg, $eeg, $data){
        try{
            $conexaoDB = $this->conectarBanco();
        }catch(\Exception $e){
            die($e->getMessage());
        }

        $sqlInsert = $conexaoDB->prepare("INSERT into recepcao_videira (`data`, clinico, audiometria,
        espirometria, acuidade, ecg, eeg) values (?,?,?,?,?,?,?)");
        $sqlInsert->bind_param("siiiiii", $data, $clinicos, $audiometria, $espirometria, $acuidade, $ecg, $eeg);
        $sqlInsert->execute();

        if(!$sqlInsert->error){
            $retorno = TRUE;
         }else{
            throw new \Exception("Não foi possível incluir indicador!");
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