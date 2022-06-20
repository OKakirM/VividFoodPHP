<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Produto - VividFood</title>
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
    <div class="tabela-produto">
      <h1 class="fadeInUp">Adicionar Produto</h1>
      <?php if(isset($_SESSION["status_cadastro"])):?>
      <div class="status-confirm fadeInUp">
        <p><b><?php echo($_SESSION["alimento"]);?></b> salvo com sucesso!</p>
      </div>
      <?php
        endif;
        unset($_SESSION["status_cadastro"]);
      ?>

      <?php if(isset($_SESSION["PLU_falso"])):?>
      <div class="status-error fadeInUp">
        <p><b>ERROR</b> PLU não registrado</p>
      </div>
      <?php
        endif;
        unset($_SESSION["PLU_falso"]);
      ?>
      <form class="formulario-container-produto fadeInUp" action="enviar.php" method="post">
        <div class="formulario-items">
          <label class="label" for="plu">PLU:</label>
          <input class="input" type="text" id="plu" name="plu">
        </div>

        <div class="formulario-items">
          <label class="label" for="pedido">Pedido:</label>
          <input class="input" type="text" id="pedido" name="pedido">
        </div>

        <div class="formulario-items">
          <label class="label" for="lote">Lote:</label>
          <input class="input" type="text" id="lote" name="lote">
        </div>

        <div class="formulario-items">
          <label class="label" for="datafabrica">Data Fabricação:</label>
          <input class="input" type="date" id="datafabrica" name="datafabrica">
        </div>

        <div class="formulario-items">
          <label class="label" for="datavalidade">Data Validade:</label>
          <input class="input" type="date" id="datavalidade" name="datavalidade">
        </div>

        <div class="formulario-items">
          <label class="label" for="encomenda">Encomenda:</label>
          <input class="input" type="text" id="encomenda" name="encomenda">
        </div>

        <div class="formulario-items">
          <label class="label" for="stock">Stock:</label>
          <input class="input" type="text" id="stock" name="stock">
        </div>

        <div class="formulario-items">
          <label class="label" for="cuvetes">Cuvetes:</label>
          <input class="input" type="text" id="cuvetes" name="cuvetes">
        </div>

        <div class="formulario-items">
          <label class="label" for="empresa">Empresa:</label>
          <input class="input" type="text" id="empresa" name="empresa">
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