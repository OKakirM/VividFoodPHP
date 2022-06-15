<?php 
  session_start();
  include("conexao.php");

  // Variavéis
  $PLU = mysqli_real_escape_string($conexao, $_POST["plu"]);
  $pedido = mysqli_real_escape_string($conexao, $_POST["pedido"]);
  $lote = mysqli_real_escape_string($conexao, $_POST["lote"]);
  $datafabrica = mysqli_real_escape_string($conexao, $_POST["datafabrica"]);
  $datavalidade = mysqli_real_escape_string($conexao, $_POST["datavalidade"]);
  $encomenda = mysqli_real_escape_string($conexao, $_POST["encomenda"]);
  $stock = mysqli_real_escape_string($conexao, $_POST["stock"]);
  $cuvetes = mysqli_real_escape_string($conexao, $_POST["cuvetes"]);
  $empresa = mysqli_real_escape_string($conexao, $_POST["empresa"]);

  $sql = "select count(*) as total from produto_plu where plu = '$PLU'";

  //Envia esse código para o MySQL e armazena o resultado na mesma
  $result = mysqli_query($conexao, $sql);

  //Armazena o número de linhas presentes na variável $result
  $row = mysqli_fetch_assoc($result);


  /*Verificação:
      -Caso aja uma coluna, Este utilizador já existe na base de dados, caso ao contrário,
      será inserido dentro da base de dados
  */
  if($row["total"] == 0) {
      $_SESSION["PLU_falso"] = true;
      header("Location: addproduto.php");
      exit;
  }

  $sql = "INSERT INTO produtos (plu, pedido, lote, datafabrica, datavalidade, encomenda, stock, cuvetes, empresa, data) VALUES ('$PLU', '$pedido','$lote', '$datafabrica', '$datavalidade', '$encomenda', '$stock', '$cuvetes', '$empresa', NOW())";
  
  //Afirma que o utilizador foi cadastrado
  if($conexao->query($sql) === TRUE) {
    $query = "select alimento from produto_plu where plu = '$PLU'";
    $result = mysqli_query($conexao, $query);
    $utilizador_bd =  mysqli_fetch_assoc($result);
    $_SESSION["alimento"] = $utilizador_bd["alimento"];
    $_SESSION["status_cadastro"] = true;
  }

  //Fecha a conexão
  $conexao->close();

  //Volta para a página inicial
  header("Location: addproduto.php");
  exit;
?>