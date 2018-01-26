<?php
include_once 'conexao.php';
$consulta = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);


?>
<!DOCTYPE html>
<html lang = 'pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Deletar Empresas </title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Cadastro</a></li>
                    <li><a href="consultas.php">Consultas</a></li>
                    
                </ul>
            </nav>
            <section>
                <br>
                <h1>Deletando</h1>
                <br>
                <hr>
                
                
                <br> <br>
                <form method="get" action="">
                    <img class="lixo" src="_img/lixo.png" alt=""/>
                    Para confirmar a exclusão digite o codigo de cadastro da empresa: <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="Deletar" class="btn" onClick="alert('A empresa foi apagada com sucesso!'); return true">
                <?php
                    $codigo = isset($_GET['filtro'])?$_GET['filtro']:"";
                    $sql =  "delete from empresas where codigo = $codigo";
                    $consulta = mysqli_query($conexao, $sql);

                    $linhas = mysqli_affected_rows($conexao);
                    
                    
                        
                    
                    mysqli_close($conexao);
                ?>
            </section>
        </div>
    </body>
</html>
       
        
     




