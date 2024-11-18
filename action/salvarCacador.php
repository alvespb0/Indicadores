<?php
namespace action;

require_once('../controllers/controllerRecepcaoCacador.php');
require_once('../models/recepcaoCacador.php'); 

use controllers\ControllerRecepcaoCacador;
use models\RecepcaoCacador;

$controllerCacador = new ControllerRecepcaoCacador;



if(isset($_POST['cadastrar'])){
    $recepcaoCacador = new RecepcaoCacador();
    $recepcaoCacador->clinicos = $_POST['clinicos'];
    $recepcaoCacador->audiometria = $_POST['audiometria'];
    $recepcaoCacador->acuidade = $_POST['acuidade'];
    $recepcaoCacador->fonoaudiologia_clinica = $_POST['fonoaudiologia'];
    $recepcaoCacador->ecg = $_POST['ecg'];
    $recepcaoCacador->eeg = $_POST['eeg'];
    $recepcaoCacador->espirometria = $_POST['espirometria'];
    $recepcaoCacador->raio_x = $_POST['raiox'];
    $recepcaoCacador->av_psicossocial = $_POST['av_psicossocial'];
    $recepcaoCacador->av_medica = $_POST['av_medica'];
    $recepcaoCacador->laboratoriais = $_POST['laboratoriais'];
    $recepcaoCacador->pericias = $_POST['pericias'];
    $recepcaoCacador->data = $_POST['data'];

    $controllerCacador->salvarIndicadores($recepcaoCacador);
}
?>