<?php
namespace action;

require_once('../controllers/controllerRecepcaoVideira.php');
require_once('../models/recepcaoVideira.php'); 

use controllers\ControllerRecepcaoVideira;
use models\RecepcaoVideira;

$controllerVideira = new ControllerRecepcaoVideira;

if(isset($_POST['cadastrar'])){
    $recepcaoVideira = new RecepcaoVideira();
    $recepcaoVideira->clinico = $_POST['clinico'];
    $recepcaoVideira->audiometria = $_POST['audiometria'];
    $recepcaoVideira->espirometria = $_POST['espirometria'];
    $recepcaoVideira->acuidade = $_POST['acuidade'];
    $recepcaoVideira->ecg = $_POST['ecg'];
    $recepcaoVideira->eeg = $_POST['eeg'];
    $recepcaoVideira->data = $_POST['data'];

    $controllerVideira->salvarIndicadores($recepcaoVideira);
}
?>