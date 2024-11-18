<?php
namespace action;

require_once('../controllers/controllerRecepcaoFraiburgo.php');
require_once('../models/recepcaoFraiburgo.php'); 

use controllers\controllerRecepcaoFraiburgo;
use models\RecepcaoFraiburgo;

$controllerFraiburgo = new ControllerRecepcaoFraiburgo;

if(isset($_POST['cadastrar'])){
    $recepcaoFraiburgo = new RecepcaoFraiburgo();
    $recepcaoFraiburgo->clinico = $_POST['clinico'];
    $recepcaoFraiburgo->audiometria = $_POST['audiometria'];
    $recepcaoFraiburgo->espirometria = $_POST['espirometria'];
    $recepcaoFraiburgo->acuidade = $_POST['acuidade'];
    $recepcaoFraiburgo->ecg = $_POST['ecg'];
    $recepcaoFraiburgo->eeg = $_POST['eeg'];
    $recepcaoFraiburgo->data = $_POST['data'];

    $controllerFraiburgo->salvarIndicadores($recepcaoFraiburgo);
}
?>