<?php

include  ("conexao.php");

$idusuario = $_POST['idusuario'];
$empresa = $_POST['empresa'];
$despesa = $_POST['despesa'];
$descricao = $_POST['descricao'];
$vencimento = $_POST['vencimento'];
$valor = $_POST['valor'];

echo "Nome da empresa é : ".$empresa."<br>";

if ( $empresa != "" && $despesa != "" && $descricao != "" && $vencimento != "" && $valor != "" ){
    
    mysqli_query($conexao, "INSERT into despesa ( empresa, despesa, descricao, vencimento, valor) VALUES ('$empresa', '$despesa', '$descricao', '$vencimento', '$valor')");
    
    ECHO "Dados cadastrados com sucesso !";
    header("Location: cadastroDividas.php");
    
}else {
    echo  "não foi possivel o cadastro! ";
    header("Location: cadastroDividas.php");
    
    
}




// $insetdespesa = "insert into despesa (empresa, despesa, descricao, vencimento, valor) VALUES ($empresa, $despesa, $descricao, $vencimento, $valor)";





?>