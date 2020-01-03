<?php
session_start();
include_once ("conexao.php");

$empresa = $_POST ['empresa'];
$despesa = $_POST ['despesa'] ;
$descricao = $_POST ['descricao'] ;
$vencimento =  $_POST ['vencimento'];
$valor = $_POST ['valor'];

$result_despesa = "Insert into despesa (empresa, despesa, descricao, vencimento, valor) VALUES ( :empresa, :despesa, :descricao, :vencimento, :valor)";

$resultado_despesa = mysqly_query($conexao, $result_despesa);

?>