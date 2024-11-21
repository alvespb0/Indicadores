<?php
require_once('../DAO/DAOambiental.php');
use DAO\DAOAmbiental;

// Criando a instância da DAO
$dao = new DAOAmbiental();

// Exemplo de dados para incluir
$data = '2024-11-13';
$qtdadeClientesNovos = 5;
$qtdOrcamentoAprovado = 3;
$qtdOrcamentosRealizados = 2;

$dao->incluirIndicador($qtdadeClientesNovos, $qtdOrcamentoAprovado, $qtdOrcamentosRealizados, $data);
?>
