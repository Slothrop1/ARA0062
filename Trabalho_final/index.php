<?php


include_once "./servico/Bd.php";

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>O PetShop</title>

    <style>

    h1 {text-align: center}
    h5 {text-align: center}
    
</style>
  </head>
  <body>
  <cabecalho>
<div class="container">
<div class="row">
    <div class="col-sm">
      <a href="login.html">Login</a>
      </div>
      </div>
      <br><br>
     
    <h1 style="font-size:60px;">O Pet Shop</h1>
    <p> Tudo do bom e do melhor para o seu animal está aqui!</p>
    <br><br>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">O Petshop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Produtos para gatos</a>
          <a class="dropdown-item" href="#">Produtos para cães</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Serviços especiais</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Concurso</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <br><br>
    </cabecalho>

    <carrosel>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=727&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1577175889968-f551f5944abd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próxima</span>
  </a>
</div>
<br><br>

</carrosel>
<?php
        
           $bd = new Bd();
           $sql = "select * from blog";
           
           foreach ($bd->query($sql) as $row) {
                echo "<div class=card-body>";
                echo "<h2 class=card-title>". $row['titulo'] . "</h2>";
                echo "<card-text>";
                echo "<p class=card-text>". $row['corpo'] . "</p>";
           }
           ?>
           
           
<cards>

<div class="row"></DIV>
<div class="col"></DIV>
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">titulo</h2>
    <p class="card-text">corpo</p>
    <a href="#" class="btn btn-primary">Ir ao Blog</a>
  </div>
  </div>

</cards>

<tabela>

<h5 style="font-size 40px;">Tabela de Preços</h5>
<p style="text-align: center;">Por favor, confira nossa tabela de preços para nossos serviços especiais</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Serviço</th>
      <th scope="col">Preço</th>
      <th scope="col">Animais por pessoa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tosa</td>
      <td>R$ 87,90</td>
      <td>Um</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Banho</td>
      <td>R$ 60,00</td>
      <td>Dois</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Veterinária</td>
      <td>R$ 60,00</td>
      <td>Três</td>
    </tr>
  </tbody>
</table>
<br><br>

</tabela>

<legend>

<p>Copyright Tekomo Nakama 2019-2020. Todos os direitos reservados.</p>

</legend>




 

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

 