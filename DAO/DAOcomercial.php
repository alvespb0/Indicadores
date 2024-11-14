<?php
namespace DAO;

require_once('../models/comercial.php');
use models\Comercial;


/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções CRUD para a tabela de comercial
 * @author Arthur Alves
 * @package DAO
 */

class DAOcomercial{
    /**
     * inclui os indicadores
     * @param int $propostasEnviadas
     * @param int $propostasFechadas
     * @param int $contFechadosAtualComp
     * @param int $renovacaoAtualComp
     * @param int $clientesNovosAtualComp
     * @param float $valoresContratos
     * @param string $data; 
     * @return TRUE|Exception
     */

     public function incluirIndicador($propostasEnviadas, $propostasFechadas, $contFechadosAtualComp,
        $renovacaoAtualComp, $clientesNovosAtualComp, $valoresContratos, $data){
        try{
            $conexaoDB = $this->conectarBanco();
        }catch(\Exception $e){
            die($e->getMessage());
        }

        $sqlInsert = $conexaoDB->prepare("INSERT INTO comercial (`data`, propostasEnviadas, propostasFechadas,
            ContratosFechadosAtualComp, RenovaçãoAtualComp, ClientesNovosAtualComp, ValoresContratos) values (?,?,?,?,?,?,?)");
        $sqlInsert->bind_param("siiiiid", $data, $propostasEnviadas, $propostasFechadas, $contFechadosAtualComp, $renovacaoAtualComp, 
        $clientesNovosAtualComp, $valoresContratos);
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