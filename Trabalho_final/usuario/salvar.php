<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$login=$_GET["login"];
$senha=$_GET["senha"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "update `usuario` set login='$login', senha='$senha' where id='$id' ";
}else { //grava um novo
    $sql = "INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>Foi armazenado/atualizado $contador registro</h1>";

?>

<a href="ConsultaUsuario.php">Voltar</a>
