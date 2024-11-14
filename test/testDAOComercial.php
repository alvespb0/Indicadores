<?php
require_once('../DAO/DAOcomercial.php');
use DAO\DAOcomercial;

// Criando a instância da DAO
$dao = new DAOcomercial();

// Exemplo de dados para incluir
$data = '2024-11-13';
$propostasEnviadas = 25;
$propostasFechadas = 15;
$contFechadosAtualComp = 20;
$renovacaoAtualComp = 10;
$clientesNovosAtualComp = 10;
$valoresContratos = 21.00;

$dao->incluirIndicador($propostasEnviadas, $propostasFechadas, $contFechadosAtualComp,
$renovacaoAtualComp, $clientesNovosAtualComp, $valoresContratos, $data);
?>
