<?php
require_once('../DAO/DAOrecepcaoFraiburgo.php');
use DAO\DAORecepcaoFraiburgo;

// Criando a instância da DAO
$dao = new DAORecepcaoFraiburgo();

// Exemplo de dados para incluir
$data = '2024-11-13';
$clinicos = 5;
$audiometria = 3;
$acuidade = 2;
$ecg = 6;
$eeg = 7;
$espirometria = 3;


$dao->incluirIndicador($clinicos, $audiometria, $espirometria, $acuidade, $ecg, $eeg, $data);
?>
