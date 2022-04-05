<?php
    //constantes em PHP
    define('HOST', 'localhost');
    define('DBNAME', 'ads');
    define('USER', 'root');
    define('PASSWORD', '');

    try {
        $conexao = new PDO('mysql:host='.HOST.';dbname='.DBNAME, 
                            USER, PASSWORD);
        
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>