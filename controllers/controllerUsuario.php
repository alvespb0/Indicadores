<?php
namespace controllers;

require_once('../DAO/DAOusuario.php');

use DAO\DAOUsuario;

/**
 * essa classe é responsável para fazer o tratamento de dados e
 * envio para a DAO executar as funções no banco de dados
 * este específicamente trabalha em cima da DAO de usuario
 * 
 * @author Arthur Alves
 */

class ControllerUsuario{
    /**
     * Função que tenta fazer o login
     * @param $login
     * @param $senha
     * @return $usuario vai receber um objeto do tipo usuario proveniente da função logar da DAO
     */
    public function fazerLogin($login, $senha){
        $daoUsuario = new DAOUsuario();
  
        $usuario = $daoUsuario->logar($login, $senha);
        unset($daoUsuario);
        return $usuario;
    }

    /**
     * Função que faz o cadastro 
     * @param $login
     * @param $usuario
     * @param $tag
     * @return TRUE|Exception Retorna 
     */
    public function cadastrarUser($login, $senha, $tag){
        $daoUsuario = new DAOUsuario();

        try{
            $retorno = $daoUsuario->cadastrarUsuario($login, $senha, $tag);
            unset($daoUsuario);
            return $retorno;
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
    
}

?>