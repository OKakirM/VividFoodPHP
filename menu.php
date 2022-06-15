<?php 
  session_start();
  include("verifica.php");
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu - VividFood</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header class="navbar">
    <h1><a href="/VividFood/menu.php">LOGO</a></h1>
    <nav>
      <ul class="navbar-menu">
        <li><a class="btn" href="/VividFood/logout.php">Sair</a></li>
        <li><a class="icon" href="/"><img src="assets/img/user-icon.svg" alt=""></a></li>
      </ul>
    </nav>
  </header>

  <main class="menu-bg">
    <div class="menu">
      <div class="menu-bar fadeInRight">
        <h1><a href="produtos/produtos.html">Tabela de Produtos</a></h1>
      </div>

      <div class="menu-bar fadeInLeft">
        <h1><a href="rececao/rececao.html">Controlo Receção</a></h1>
      </div>

      <div class="menu-bar fadeInRight">
        <h1><a href="descongelacao/descongelacao.html">Registo de Descongelação</a></h1>
      </div>
    </div>
  </main>
</body>

</html>