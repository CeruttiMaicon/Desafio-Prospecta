<?php
    
include_once 'conexao.php';


$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


//String SQL para fazer a pesquisa no SGDB MySQL
$sql =  "select * from empresas where razao_social like '%$filtro%' or nome_fantasia like '%$filtro%' or cnpj like '%$filtro%' order by nome_fantasia";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


                
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Empresas </title>
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
                <h1>Consultas</h1>
                <br>
                <hr> <br> <br>
                
                <form method="get" action="">
                    <img class="lupa" src="_img/lupa.png" alt=""/>
                    Pesquisar nome da Empresa (Fantasia ou Razão Social)<br> ou CNPJ: <br> Para Deletar digite o Código da empresa <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="Pesquisar" class="btn">
                    
                    
                </form>
                
                <?php
                
                print "Resultado da pesquisa com a palavra <strong>$filtro</strong>. <br> <br>";
                
                print "$registros registros encontrados.";
                
                print "<br> <br>";
                
                while($exibirRegistros = mysqli_fetch_array($consulta)){
                    $codigo = $exibirRegistros[0];
                    $razaosocial = $exibirRegistros[1];
                    $nomefantasia = $exibirRegistros[2];
                    $cnpj = $exibirRegistros[3];
                    $ddd = $exibirRegistros[4];
                    $telefone = $exibirRegistros[5];
                    
                    print "<article>";
                    
                    print "<label id='codigo'>Código empresa: $codigo </label><br>";
                    print "<label id='razaosocial'>Razão Social: $razaosocial</label><br>";
                    print "<label id='fantasia'>Nome Fantasia: $nomefantasia</label><br>";
                    print "<label id='cnpj'>CNPJ: $cnpj<br>";
                    print "<label id='telefone'>Telefone: ($ddd) $telefone</label><br>";
                    
                    echo "<form action='deletar.php'>";
                    echo "<input type='submit' value='Excluir' class='btn'>";
                    echo "</form>";
                    
                    
                    
                    
                    
                    
                    print "</article>";
                    
                }
                mysqli_close($conexao);
                
                ?>
                
            </section>
        </div>
    </body>
</html>