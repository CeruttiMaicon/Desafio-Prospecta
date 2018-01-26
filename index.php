<!DOCTYPE html>
<html lang = 'pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Empresas #Desafio </title>
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
                <h1>Cadastrar Empresa</h1>
                <br>
                <hr>
                
                <form method="post" action="processa.php">
                    
                    <fieldset id="informacoes"> <legend >Informações do Cadastro</legend>
                        <img class="empresa" src="_img/fabric.png" alt=""/>
                        <img class="atention" src="_img/atention.png" alt=""/>
                        <label id="dicas">Digitem apenas numeros <br> No CNPJ no DDD e no Telefone<br><br>O sistema salva o cadastro<br>formatado</label>
                        <p><label for="razaosocial">Razão Social:</label><br></p><input type="text" name="razaosocial"  class="campo" maxlength="45" required autofocus/><br>
                        <p><label for="nomefantasia">Nome Fantasia:</label><br></p><input type="text" name="nomefantasia"  class="campo" maxlength="45" required autofocus /><br>
                        <p><label for="cnpj">CNPJ:</label><br></p><input type="text" name="cnpj"  class="campo" maxlength="14" placeholder="Ex.: 00.000.000/0001-00" required autofocus/><br>
                        <p><label for="ddd">DDD:</label><br></p><input pattern="[0-9]+$" required="required" type="text" name="ddd"  class="campo" maxlength="2" placeholder="(00)" required autofocus/><br>
                        <p><label for="telefone">Telefone:</label><br></p><input type="text" name="telefone"  class="campo" maxlength="9"  placeholder="O Telefone deve conter 8 ou 9 digitos" required autofocus/><br>
                        <div id="botao">
                        <input type="submit" value="Salvar" id="cadastrar" name="cadastrar" class="btn">
                        </div>
                        <div id="botao">
                            <input type="reset" value="Limpar" class="btn" name="botao">
                        </div>
                        <br>
<?php


                        
                        
?>
                        
                        
                    </fieldset>
                </form>
                <br> <br>
            </section>
        </div>
    </body>
</html>
