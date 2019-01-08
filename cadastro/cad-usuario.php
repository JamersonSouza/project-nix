<?php
 include 'cnx.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Jamerson Souza">
        <meta name="application-name" content="Nix Studio">
        <meta name="description" content="Nix é o seu Portal de Estudos e Leitura Online.">
        <meta name="keywords" content="Biblioteca, Cursos EaD, Apostilas, Materiais Digitais.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style-formul.css">
        <link rel="stylesheet" type="text/css" href="../estilo.css">
        <title>:: Nix ::</title>
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    </head>
    <header id="cbc">
           <a href="../index.php"><img src="../_imagens/logo_nix.png" alt="Nix - Portal de Estudos Online"></a>
        <nav id="menu">
        <ul>
            <li><a href="#">ENTRAR</a></li>
            </ul>
        </nav>  
    </header>
    <body>
        <section id="cadastro">
        <form id="formulario" method="post" action="cnx.php">

    <fieldset id="ident">
        <legend>Dados do Usuário</legend>
    NOME COMPLETO: <br>
        <input type="nome" name="nome" placeholder="Insira seu nome completo">
        <br>
    IDADE: 
        <br>
        <input type="number" name="idade" placeholder="Insira sua idade">
        <br>
    PERGUNTA: <br>
        <textarea rows="5" name="question" placeholder="Informe por que gostaria de fazer parte do NIX?"></textarea>
        <br>
    </fieldset>
    <fieldset id="conta">
    <legend>Dados da Conta</legend>
        E-MAIL:
        <br>
        <input type="email" name="email" placeholder="Insira um email válido">
        <br>
        SENHA: <br>
        <input type="password" name="senha" placeholder="MÍNIMO 8 CARACTERES" minlength="8">
       
<br>
        <input type="submit" class="btn" name="confirma" value="FINALIZAR CADASTRO!">

    </fieldset>

            </form>
        </section>
    </body>
</html>