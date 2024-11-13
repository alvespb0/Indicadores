<?php
require_once('../DAO/DAORecepcaoCacador.php');
use DAO\DAORecepcaoCacador;

// Criando a instância da DAO
$dao = new DAORecepcaoCacador();

// Exemplo de dados para incluir
$data = '2024-11-13';
$clinicos = 5;
$audiometria = 3;
$acuidade = 2;
$fonoaudiologia = 4;
$ecg = 6;
$eeg = 7;
$espirometria = 3;
$raio_x = 1;
$av_psicossocial = 2;
$av_medica = 4;
$laboratoriais = 5;
$pericias = 1;

$dao->incluirIndicador($clinicos, $audiometria, $acuidade, $fonoaudiologia, $ecg, $eeg, $espirometria, $raio_x, $av_psicossocial, $av_medica, $laboratoriais, $pericias, $data);
?>
