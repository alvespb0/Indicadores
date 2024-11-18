<?php
namespace DAO;

require_once('../models/usuario.php');
use models\Usuario;

/**
 * Esta classe é responsável por fazer a couminicação entre o banco de dados,
 * provendo as funções necessárias de usuario
 * @author Arthur Alves
 * @package DAO
 */

class DAOUsuario{
    /**
     * Faz o login no sistema validando os dados do passados pelo formulário
     * @param string $login 
     * @param string $senha
     * @return Usuario objeto do tipo usuario.
     */
    public function logar($login, $senha){
        try {
            $conexaoDB = $this->conectarBanco();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        
        $sql = $conexaoDB->prepare("SELECT `login`, senha, tag from usuario
                                    where login = ? and senha = ?");
        $sql->bind_param("ss", $login, $senha);
        $sql->execute();

        $resultado = $sql->get_result();

        if($resultado->num_rows === 1){
            $usuarioData = $resultado->fetch_assoc();

            $usuario = new Usuario(
                $usuarioData['id'], 
                $usuarioData['login'], 
                $usuarioData['senha'], 
                $usuarioData['tag']
            );
    
            $sql->close();
            $conexaoDB->close();
    
            return $usuario;
            
            }else{
            throw new \Exception("Login não encontrado! Entre em contato com Arthur se o problema persistir");
            die;
        }
        $sql->close();
        $conexaoDB->close();
 
    }
    
    /**
     * faz o cadastro do usuario, apenas eu @author Arthur vou ter acesso a isso.
     * @param $login
     * @param $senha
     * @param $tag
     * @return TRUE|Exception
     */
    public function cadastrarUsuario($login, $senha, $tag){
       try {
           $conexaoDB = $this->conectarBanco();
       } catch (\Exception $e) {
           die($e->getMessage());
       }

       $sqlInsert = $conexaoDB->prepare("INSERT into usuario (`login`, senha, tag) values (?,?,?)");
       $sqlInsert->bind_param("sss", $login, $senha, $tag);
       $sqlInsert->execute();

       if(!$sqlInsert->error){
           $retorno = TRUE;
        }else{
           throw new \Exception("Não foi possível cadastrar usuario!");
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