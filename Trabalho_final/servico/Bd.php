<?php

class Bd {
    
    private $dsn, $user, $password, $conn;
    
    function __construct() {
        $dsn = 'mysql:dbname=id14818846_principal;host=localhost';
        $user = 'id14818846_aula';
        $password = '5zjc^mgFl*QWyByn';
        
        try {
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    
    /**
     * Rodar uma consulta select
     **/
    function query($sql) {
       try {return $this->conn-> query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
        
        
    }
    
    /**
     * Executar sql = insert, update, delete
     * */
    function exec($sql){
         try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
        
    }
}


?>