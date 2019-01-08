<?php
session_start();
        
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = addslashes($_POST['emailUser']);
        $senhaUser = addslashes($_POST['senhaUser']);
        
        $dsn = "mysql:dbname=nix;host=localhost";
        $dbuser = "kurumin";
        $dbpass = "ifpe1234";
    
        try{
            
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $sql = $pdo->query("SELECT * FROM contaUsuario WHERE email = '$email' AND senha = '$senha'");
            
            if($sql->rowCount() > 0){
                $dados = $sql->fetch();
                $_SESSION['id'] = $dados['id'];
                header("Location: index-logado.php");
                
            }
            
        }catch(PDOException $j){
            echo "Falha no Sistema".$j->getMessage();
        }
    }

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
        <link rel="stylesheet" type="text/css" href="estilo-login.css">
        <link rel="stylesheet" type="text/css" href="../estilo.css">
        <title>:: Nix ::</title>
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    </head>
    <header id="cbc">
        <a href="../index.php"><img src="../_imagens/logo_nix.png" alt="Nix - Portal de Estudos Online"></a>      
    </header>
    <body>
    <section id="iron">
        <br>
        <form id="form-login" method="post">
        <ul id="progress">
            </ul>
            <fieldset>
            <h6>Login - Nix</h6>
                <input type="email" name="email" placeholder="email">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" name="next" class="acao" value="ENTRAR">
                <input type="submit" class="aminezia" value="Esqueci minha senha"/>
             </fieldset>
        </form>      
        </section>
       
    </body>
</html>