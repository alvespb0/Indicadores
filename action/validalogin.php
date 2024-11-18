<?php
namespace action;

require_once('../controllers/controllerUsuario.php');

use controllers\ControllerUsuario;




if (isset($_POST['login']) && isset($_POST['senha'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $controllerUser = new controllerUsuario;
    $user = $controllerUser->fazerLogin($login, $senha);
    if($user){
        session_start();
        if ($user->tag == 'recepcao_cacador') {
            $_SESSION['recepcao_cacador'] = $user->login;  // Salva o login na sessão
            header("Location: ../view/indicadoresCacador.php");  // Redireciona para a página de recepção
            exit;
        } else if ($user->tag == 'comercial') {
            $_SESSION['comercial'] = $user->login;  // Salva o login na sessão
            header("Location: ../view/comercial.php");  // Redireciona para a página comercial
            exit;
        }else if($user->tag == 'recepcao_fraiburgo'){
            $_SESSION['recepcao_fraiuburgo'] = $user->login;  // Salva o login na sessão
            header("Location: ../view/indicadoresfraiburgo.php");  // Redireciona para a página de recepção
            exit;
        }
    }else{
        session_start();
        $_SESSION['Login404'] = "Login não encontrado! Entre em contato com Arthur se o problema persistir";
        header("Location: ../view/login.php");
    }
}else {
    $_SESSION['erroLogin'] = "Você precisa fazer login para acessar o sistema.";
    header("Location: ../index.php");
}
    
?>