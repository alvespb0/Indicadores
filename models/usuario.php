<?php
namespace models;

/**
 * Classe model para a tabela usuario
 * Representa os dados do usuario
 */

class Usuario{
    /**
     * ID do usuario
     * @var int
     */
    public $id;

    /**
     * Login do usuario
     * @var string;
     */
    public $login;

    /**
     * Senha do usuario
     * @var string
     */
    public $senha;

    /**
     * Tag do usuario
     * @var string
     */
    public $tag;

    /**
     * construtor da classe usuario 
     * Instancia os dados
     */
    public function __construct($id = null, $login = null, $senha = null, $tag = null){
        $this->id = $id;
        $this->login = $login;
        $this->senha = $senha;
        $this->tag = $tag;
    }
}
?>