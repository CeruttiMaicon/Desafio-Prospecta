<?php
include_once 'conexao.php';

$razaosocial = $_POST["razaosocial"];
$nomefantasia = $_POST["nomefantasia"];
 
$ddd = $_POST["ddd"];

//formatando CNPJ para salvar no banco de dados
$format2 = $_POST["cnpj"];
if (strlen($format2)== 14){                           
    $part3 = substr($format2, 0,2);
    $part4 = substr($format2, 2,3);
    $part5 = substr($format2, 5,3);
    $part6 = substr($format2, 8,4);
    $part7 = substr($format2,12,13);
}
$cnpj = $part3.".".$part4.".".$part5."/".$part6."-".$part7;



//formatando telefone para salvar no banco de dados
$format = $_POST["telefone"];
if (strlen($format)== 8){                           
    $part1 = substr($format, 0,4);
    $part2 = substr($format, 4,7);
}elseif (strlen($format ) == 9){
    $part1 = substr($format, 0,5);
    $part2 = substr($format, 5,8);
}
$telefone = $part1."-".$part2;


$sql = "insert into empresas(razao_social, nome_fantasia, cnpj, ddd, telefone )"
        . " values ('$razaosocial', '$nomefantasia', '$cnpj', '$ddd', '$telefone' )";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang = 'pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Confirmação Cadastro </title>
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
                <h1>Confirmação de Cadastro</h1>
                <br>
                <hr>
                
                <br> <br>
                <?php
                    if($linhas == 1){
                        print "Cadastro efetuado com sucesso!";
                    }else{
                        print "<font color='red'>Cadastro não efetuado.</font><br>Já existem um usuario com este <font color='red'> CNPJ </font>  ou <font color='red'>Razão Social</font> cadastrado no Banco de Dados.";
                    }
                    
                ?>
            </section>
        </div>
    </body>
</html>
