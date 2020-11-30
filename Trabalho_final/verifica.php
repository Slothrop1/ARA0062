<?php
session_start();

$login=$_POST["login"];
$senha=$_POST["senha"];

include_once "servico/Bd.php";

$bd = new Bd();
$sql = "select * from usuario where login='$login' and senha='$senha'";


//
//NAO protege contra SQL Injection
//
foreach ($bd->query($sql) as $row) {
    $_SESSION["autenticado"]=true;
    $_SESSION["idusuario"]=$row['id'];
    $_SESSION["loginusuario"]=$row['login'];
    
    $html ="
    <html>
        <head><title>Tela de verificação</title></head>
        <body>
         <script>
         window.location.replace('https://158898498.000webhostapp.com/menu.php');
         </script>
        </boyd>
    </html>
"; 
    echo $html;
    return;
}
//se a consulta retornar vazia, nem entra no foreach
//e o usuário digitou os dados incorretos.
session_destroy ( ) ;
    $html ="
<html>
    <head><title>Tela de verificação</title></head>
    <body>
        <h1>Seu $login e sua senha $senha são INVÁLIDOS.</h1>
    </boyd>
</html>

";
    
echo $html;
?>