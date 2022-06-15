<?php 
  session_start();
  include("conexao.php");

  // Variavéis
  $produto = mysqli_real_escape_string($conexao, $_POST["produto"]);
  $dataentrada = mysqli_real_escape_string($conexao, $_POST["dataentrada"]);
  $camara = mysqli_real_escape_string($conexao, $_POST["camara"]);
  $tipo = mysqli_real_escape_string($conexao, $_POST["tipo"]);
  $lugar = mysqli_real_escape_string($conexao, $_POST["lugar"]);
  $temperatura = mysqli_real_escape_string($conexao, $_POST["temperatura"]);
  $kg = mysqli_real_escape_string($conexao, $_POST["kg"]);

  if ($tipo == 1) {
    $sql = "INSERT INTO descongelacaoentrada (produto, dataEntrada, camara, lugar, temperatura, kg) VALUES ('$produto', '$dataentrada','$camara', '$lugar', '$temperatura', '$kg')";

    if($conexao->query($sql) === TRUE) {
      $_SESSION["status_cadastro"] = true;
    }
  }

  if ($tipo == 0) {
    $sql = "INSERT INTO descongelacaosaida (produto, dataSaida, camara, lugar, temperatura, kg) VALUES ('$produto', '$dataentrada','$camara', '$lugar', '$temperatura', '$kg')";

    if($conexao->query($sql) === TRUE) {
      $_SESSION["status_cadastro"] = true;
    }
  }

  $sql = "Select id from
  (select * from descongelacaoentrada UNION ALL select * from descongelacaosaida) descongelacao GROUP BY id HAVING COUNT(*) = 2";

  if($row["total"] >= 1) {

  } 

  $conexao->close();
  header("Location: adddescongelacao.php");
  exit;
?>