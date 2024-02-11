<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Administrador</title>
  <link rel="stylesheet" href="../../css/acess/home.css">
</head>
<body>
  <header>
    <nav class="menu">
      <a href="home.php" class="menu-item"><span>Home</span></a>
      <a href="cadastrar.php" class="menu-item"><span>Cadastrar</span></a>
      <a href="consultar.php" class="menu-item"><span>Consultar</span></a>
      <a href="alterar.php" class="menu-item"><span>Alterar</span></a>
      <a href="../../login/prof/login.php" class="menu-item"><span>Sair</span></a>
    </nav>
  </header>
  <main>
    <h1>Seja bem-vindo, <?php session_start(); echo $_SESSION['nome_professor']?>!</h1>
  </main>
</body>
</html>