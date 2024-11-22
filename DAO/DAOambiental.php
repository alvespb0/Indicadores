<?php
namespace DAO;

require_once('../models/ambiental.php');
use models\Ambiental;

/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções CRUD para a tabela de ambiental
 * @author Arthur Alves
 * @package DAO
 */
class DAOAmbiental{
    /**
     * inclui indicadores
     * @param int $qtdadeClientesNovos
     * @param int $qtdOrcamentoAprovado
     * @param int $qtdOrcamentosRealizados
     * @param string $data
     * @return TRUE|Exception
     */
    public function incluirIndicador($qtdadeClientesNovos, $qtdOrcamentoAprovado, $qtdOrcamentosRealizados, $data){
        try{
            $conexaoDB = $this->conectarBanco();
        }catch(\Exception $e){
            die($e->getMessage());
        }

        $sqlInsert = $conexaoDB->prepare("INSERT INTO ambiental(`data`, qtdadeClientesNovos, qtdOrcamentoAprovado, qtdOrcamentosRealizados)
                                         values (?, ?, ?, ?)");
        $sqlInsert->bind_param("siii", $data, $qtdadeClientesNovos, $qtdOrcamentoAprovado, $qtdOrcamentosRealizados);
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