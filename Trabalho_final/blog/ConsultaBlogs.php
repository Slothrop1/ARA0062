<?php
//sem segurança
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gerenciamento de Blog</title>
  </head>
  <body>
      
    <div class="container">
        
        <h1>Tela de Blogs</h1>
        
        <hr>
        <a href="../menu.php"> < Voltar </a>
        
       <br><br>
       
        
        <a class="btn btn-primary" href="IncluirBlogs.php" role="button">Incluir</a>
        <br><br>
        
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Corpo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
             <?php
             include_once("../servico/Bd.php");
           $bd = new Bd();
           $sql = "select * from blog";
           
           foreach ($bd->query($sql) as $row) {
                echo "<tr>";
                echo "<td>". $row['id'] . "</td>";
                echo "<td>". $row['titulo'] . "</td>";
                echo "<td>". $row['corpo'] . "</td>";
                
                echo "<td><a href='#' onclick ='Pergunta(". $row['id'] . ")'> Excluir</a></td>";
                
                echo "<td><a href='AlterarBlog.php?id=". $row['id'] . "'>Alterar</a></td>";
                echo "</tr>";
            }
           
        
         ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Corpo</th>
                 <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    
        
        <script>
        function Pergunta(id) {

          if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("https://158898498.000webhostapp.com/blog/ExcluirBlog.php?id="+id);

          }
        }
        </script>

       
    
    
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
     
     <script>
         
         $(document).ready(function() {
            $('#example').DataTable();
        } );

     </script>
     
  </body>
</html>