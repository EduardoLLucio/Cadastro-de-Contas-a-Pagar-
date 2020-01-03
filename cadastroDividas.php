<?php
session_start();
?>

<!doctype html>
<html lang="utf-8">
  <head>


  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Painel</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  

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
    <a href="visualizar.php" class="py-2 d-none d-md-inline-block" href="#">Visualizar Contas a pagar</a>
    <a  class="py-2 d-none d-md-inline-block" href="#">Grafico</a>
    <a href="logout.php" class="py-2 d-none d-md-inline-block" href="#">Sair</a>
  </div>
</nav>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
 <div class="box">
 
 <form action="confgCadastrar.php" method="POST">



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empresa">Nome da empresa</label>
      <input type="text" class="form-control" id="empresa" name = "empresa" placeholder="empresa">
    
    </div>
    
    <div class="form-group col-md-6">
      <label for="despesa">Nome da despesa</label>
      <input type="text" class="form-control" id="despesa" name = "despesa"  placeholder="Nome da despesa">
    </div>
  </div>
  <div class="form-group">
    <label for="descricao">Descricao</label>
    <input type="text" class="form-control" id= "descricao" name = "descricao" placeholder="Descricao">
  </div>
  
     <div class="form-row">
   
       <div class="form-group col-md-3">
      <label for="vencimento">Data do vencimento</label>
      <input type="date" class="form-control" id="vencimento" name = "vencimento">
    
  </div>
  <div class="form-group col-md-3 ">
    <label for="valor">Valor</label>
    <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" class="form-control" id="valor"   name = "valor" placeholder=R$>
  </div>
  </div>
 
  <button type="submit" class="btn btn-success" style="width: 200px; height: 50px">Salvar</button>
  </form>
    <style>
    body {
    background-color: #8B008B	;
    }
      </style>      
  </div>
  </div> 

</body>
 
 
</html>
