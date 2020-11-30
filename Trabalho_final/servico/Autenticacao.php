<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "<script>
    window.location.replace('https://158898498.000webhostapp.com/menu.php');
    </script>
    ";
    
}

?>