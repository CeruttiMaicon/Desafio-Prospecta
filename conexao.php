<?php

//conexão com o banco de dados local
$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($host, $user, $password, $database);
 
        if (!$conexao) {
            print "Error: Falha ao conectar-se com o banco de dados MySQL.";
            
        }else {
            //colocar uma mensagem de cadastro com SUCESSO!!!
            //mensagem de teste
            //print "Conectado ao banco de dados com sucesso!!!!";
        }
       
        
     




