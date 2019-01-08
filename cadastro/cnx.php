<?php
$dsn = "mysql:dbname=nix;host=localhost";
$dbuser = "kurumin";
$dbpass = "ifpe1234";

try{
    /* == CONEXÃO COM O BANCO  & SETTING CADA CAMPO DO FORMULARIO == */
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
    }
      if(isset($_POST['idade']) && !empty($_POST['idade'])){
        $idade = addslashes($_POST['idade']);
      }
      if(isset($_POST['question']) && !empty($_POST['question'])){
        $question = addslashes($_POST['question']);
      }
      if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = addslashes($_POST['email']);
      }
      if(isset($_POST['senha']) && !empty($_POST['senha'])){
        $senha = md5($_POST['senha']);
   
          /* == INSERINDO OS DADOS NO BANCO == */   
        $sql = "INSERT INTO usuario SET nome = '$nome', idade = '$idade', pergunta = '$question'";
        $sql = "INSERT INTO contaUsuario SET email = '$email', senha = '$senha'";   
        $sql = $pdo->query($sql);
  
          header("Location: ../index.php");
    }
    
} catch(PDOException $x){
    echo "Falha na conexão".$x->getMessage();
}
?>
