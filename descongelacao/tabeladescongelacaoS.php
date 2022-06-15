<?php 
  include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela Produto - VividFood</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <header class="navbar">
    <h1><a href="/VividFood/menu.php">LOGO</a></h1>
    <nav>
      <ul class="navbar-menu">
        <li><a class="btn" href="/VividFood/logout.php">Sair</a></li>
        <li><a class="icon" href="/"><img src="../assets/img/user-icon.svg" alt=""></a></li>
      </ul>
    </nav>
  </header>

  <main class="formulario-bg-produto">
  <h1 class="fadeInUp">Tabela de Descongelação</h1>
  <div class="menu-table fadeInUp">
    <a class="btn-submit" href="tabeladescongelacaoE.php">Entrada</a>
    <a class="btn-submit active" href="tabeladescongelacaoS.php">Saida</a>
    <a class="btn-submit" href="tabeladescongelacaoE_S.php">Entrada/Saida</a>
  </div>
    <form class="formulario-container-pesquisa fadeInUp">
      <input class="search" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite algo para pesquisar" type="text">
      <!-- <button type="submit">Pesquisar</button> -->
      <table class="table">
        <tr>
          <th class="th">ID</th>
          <th class="th">Produto</th>
          <th class="th">DataEntrada</th>
          <th class="th">Câmara</th>
          <th class="th">Lugar</th>
          <th class="th">Temperatura</th>
          <th class="th">Kg</th>
        </tr>
        <?php
          if (!isset($_GET['busca'])) {
        ?>
        <?php
          } else {
            $pesquisa = mysqli_real_escape_string($conexao, $_GET['busca']);
            $sql_code = "SELECT * FROM descongelacaosaida WHERE id LIKE '%$pesquisa%' 
            OR produto LIKE '%$pesquisa%'
            OR dataSaida LIKE '%$pesquisa%' 
            OR camara LIKE '%$pesquisa%' 
            OR lugar LIKE '%$pesquisa%' 
            OR temperatura LIKE '%$pesquisa%' 
            OR kg LIKE '%$pesquisa%'";
            $sql_query = mysqli_query($conexao, $sql_code) or die("ERRO ao consultar! " . $mysqli->error);  
            if ($sql_query->num_rows == 0) {
        ?>
        <tr>
          <td class="td" colspan="10">Nenhum resultado encontrado...</td>
        </tr>
        <?php
            } else {
              while($dados = $sql_query->fetch_assoc()) {
        ?>
          <tr>
            <td class="td"><?php echo $dados['id']; ?></td>
            <td class="td"><?php echo $dados['produto']; ?></td>
            <td class="td"><?php echo $dados['dataSaida']; ?></td>
            <td class="td"><?php echo $dados['camara']; ?></td>
            <td class="td"><?php echo $dados['lugar']; ?></td>
            <td class="td"><?php echo $dados['temperatura']; ?></td>
            <td class="td"><?php echo $dados['kg']; ?></td>
          </tr>
        <?php
            }
          }
        ?>
        <?php
        } ?>
      </table>
      <div class="formulario-items">
        <a class="btn-left" href="/VividFood/menu.php">Sair</a>
      </div>
    </form>
  </main>
</body>

</html>