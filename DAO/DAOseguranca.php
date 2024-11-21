<?php
namespace DAO;

require_once('../models/seguranca.php');
use models\Seguranca;

/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções CRUD para a tabela de da seguranca
 * @author Arthur Alves
 * @package DAO
 */

class DAOSeguranca{
    /**
     * inclui indicadores
     * @param int $laudosEmitidos
     * @param int $laudosVendidos
     * @param int $qtdLevantamentosRealizados
     * @param int $treinamentosRealizados
     * @param string $data
     * 
     * 
     */
    public function incluirIndicador($laudosEmitidos, $laudosVendidos, $qtdLevantamentosRealizados, $treinamentosRealizados, $data){
        try{
            $conexaoDB = $this->conectarBanco();
        }catch(\Exception $e){
            die($e->getMessage());
        }
        
        $sqlInsert = $conexaoDB->prepare("INSERT INTO seguranca (`data`, LaudosEmitidos, LaudosVendidos, qtdLevantamentosRealizados, treinamentosRealizados)
                                        values (?,?,?,?,?)");
        $sqlInsert->bind_param("siiii", $data, $laudosEmitidos, $laudosVendidos, $qtdLevantamentosRealizados, $treinamentosRealizados);
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