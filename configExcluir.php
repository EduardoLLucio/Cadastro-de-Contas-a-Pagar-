<?php 
include_once ("conexao.php");

$desp_codigo = intval($_GET['empresa']);

$sql_code = "DELETE FROM despesa WHERE iddespesa = '$desp_codigo'";
$sql_query = $conexao->query($sql_code) or die($conexao->error);

if($sql_query)
    echo "
		<script>
			alert('O usu�rio foi deletado com sucesso.');
			location.href='visualizar.php?p=inicial';
		</script>";
    else
        echo "
	<script>
		alert('N�o foi poss�vel deletar o usu�rio.');
		location.href='visualizar.php?p=inicial';
	</script>";
        

?>