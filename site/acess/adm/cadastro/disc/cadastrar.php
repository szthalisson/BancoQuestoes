<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Administrador</title>
</head>
<body>
  <header>
    <nav class="menu">
      <a href="../../home.php" class="menu-item"><span>Home</span></a>
      <a href="../../cadastrar.php" class="menu-item"><span>Cadastrar</span></a>
      <a href="../../consultar.php" class="menu-item"><span>Consultar</span></a>
      <a href="../../editar.php" class="menu-item"><span>Editar</span></a>
      <a href="../../apagar.php" class="menu-item"><span>Apagar</span></a>
      <a href="../../../../index.php" class="menu-item"><span>Sair</span></a>
    </nav>
  </header>
  <main>
    <h1>Cadastro de disciplina</h1>
    <form action="validar.php" method="POST">
      <div class="input">
        <span>Nome</span>
        <input type="text" name="nome" required>
      </div>
      <button class='button'>Cadastrar</button>
    </form>
  </main>
</body>
</html>