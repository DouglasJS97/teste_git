<?php

    function conectar(){

        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'pessoa';

        try{
            $pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name,$db_user, $db_pass);
            return $pdo;
        }catch(PDOException $e){
            echo "Erro de servidor: ".$e->getMessage();
        }
    }