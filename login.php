<?php 
  session_start();
  include("conexao.php");

  if(empty($_POST["nome"]) || empty($_POST["senha"])) {
    header("Location: index.html");
    exit();
  }

    $login = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

    $query = "select name from user_account where name = '{$login}' and password = md5('{$senha}')";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if($row == 1) {
      $utilizador_bd =  mysqli_fetch_assoc($result);
      $_SESSION["name"] = $utilizador_bd["name"];
      header("Location: menu.php");
      exit();
      
    } else {
      header("Location: index.html");
      $_SESSION["nao_autenticado"] = true;
      exit();
    }
?>