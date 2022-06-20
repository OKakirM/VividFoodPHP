<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset=" UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Descongelação - VividFood</title>
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

  <main class="formulario-bg-descongelacao">
    <div class="tabela-produto">
      <h1 class="fadeInUp">Adicionar Descongelação</h1>
      <?php if(isset($_SESSION["status_cadastro"])):?>
      <div class="status-confirm fadeInUp">
        <p>Salvo com sucesso!</p>
      </div>
      <?php
        endif;
        unset($_SESSION["status_cadastro"]);
      ?>
      <form class="formulario-container-descongelacao fadeInUp" action="enviar.php" method="post">
        <div class="formulario-items">
          <label class="label" for="produto">Produto:</label>
          <input class="input" type="text" id="produto" name="produto">
        </div>

        <div class="formulario-items">
          <label class="label" for="dataentrada">Data Entrada:</label>
          <input class="input" type="date" id="dataentrada" name="dataentrada">
        </div>

        <div class="formulario-items">
          <label class="label" for="camara">Câmara:</label>
          <select class="input" name="camara" id="camara">
            <option value="10">Câmara 10</option>
            <option value="10A">Câmara 10A</option>
            <option value="10B">Câmara 10B</option>
          </select>
        </div>

        <div class="formulario-items">
          <label class="label" for="tipo">Tipo:</label>
          <select class="input" name="tipo" id="tipo">
            <option value="1">Entrada</option>
            <option value="0">Saida</option>
          </select>
        </div>

        <div class="formulario-items">
          <label class="label" for="lugar">Lugar:</label>
          <input class="input" type="text" id="lugar" name="lugar">
        </div>

        <div class="formulario-items">
          <label class="label" for="temperatura">Temperatura:</label>
          <input class="input" type="text" id="temperatura" name="temperatura">
        </div>

        <div class="formulario-items">
          <label class="label" for="kg">Kilograma:</label>
          <input class="input" type="text" id="kg" name="kg">
        </div>

        <div class="formulario-items">
          <h1>LOGO</h1>
        </div>

        <div class="formulario-items">
          <button class="btn-submit" type="submit" id="enviar" name="enviar">Enviar</button>
        </div>

        <div class="formulario-items">
          <a class="btn-left" href="/VividFood/menu.php">Sair</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>