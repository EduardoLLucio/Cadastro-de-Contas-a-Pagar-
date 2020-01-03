<?php
session_start();
include 'conexao.php';
$consulta = "SELECT * FROM despesa";
$con = $conexao->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html lang="utf-8">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.6">
    <script src="/js/jquery-3.4.1.min.js"></script>
     <script src="/js/jquery-3.4.1.js"></script>
    

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Bootstrap JavaScript -->
<script src="/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>Painel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="cssdatabela.css" />
  

 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
  </head>
  <body>
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a href="cadastroDividas.php" class="py-2 d-none d-md-inline-block" href="#">Cadastrar Contas a pagar</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Visualizar Contas a pagar</a>
    <a  class="py-2 d-none d-md-inline-block" href="#">Grafico</a>
    <a href="logout.php" class="py-2 d-none d-md-inline-block" href="#">Sair</a>
  </div>
</nav>

<div class="row container">
<div class="col s12">
<h5 class="light">Dividas</h5><hr>

 <div class="table-responsive">
<table class="table table-sm table-dark ">

  <thead>
    <tr>
    
     
    <th scope="col">#</th>    
    <th scope="col">Empresa</th>
    <th scope="col">despesa</th>
    <th scope="col">descricao</th>
    <th scope="col">vencimento</th>
  	<th scope="col">valor</th>
  		
      
     </tr>
  <?php while($dado = $con->fetch_array()) { ?>
  
  <tr>
  
  <td> <?php echo $dado["iddespesa"]?></td> 
  <td> <?php echo $dado["empresa"]?></td> 
  <td> <?php echo $dado["despesa"]?> </td> 
  <td> <?php echo $dado["descricao"]?> </td>
  <td> <?php echo  date("d/m/Y", strtotime ($dado["vencimento"]));?> </td> 
  <td> <?php echo $dado["valor"]?> </td> 
  
 <th><a  style="color: #7FFFD4" href="javascript: if(confirm('Tem certeza que deseja deletar a conta da empresa <?php echo $dado["empresa"]; ?>?'))
			location.href='configExcluir.php?p=deletar&empresa=<?php echo $dado["iddespesa"]; ?>';">Pago</a></th>
			
	
  
  
 </tr>
 
  <?php } ?>
  
  
  </thead>
 
  </table>
     <style>
    body {
    background-color: #BA55D3;
    }
      </style>     
    </div>
    </div>
  
   </div>
    </div>
  </body>

</html>
