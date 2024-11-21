<?php
require_once('../DAO/DAOseguranca.php');
use DAO\DAOSeguranca;

// Criando a instância da DAO
$dao = new DAOSeguranca();

// Exemplo de dados para incluir
$data = '2024-11-13';
$laudosEmitidos = 5;
$laudosVendidos = 3;
$qtdLevantamentosRealizados = 2;
$treinamentosRealizados = 6;

$dao->incluirIndicador($laudosEmitidos, $laudosVendidos, $qtdLevantamentosRealizados, $treinamentosRealizados, $data);
?>
