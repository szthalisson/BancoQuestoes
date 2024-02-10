<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Administrador</title>
  <link rel="stylesheet" href="../../../../css/acess/cadastro.css">
</head>
<body>
  <header>
    <nav class="menu">
      <a href="../../home.php" class="menu-item"><span>Home</span></a>
      <a href="../../cadastrar.php" class="menu-item"><span>Cadastrar</span></a>
      <a href="../../consultar.php" class="menu-item"><span>Consultar</span></a>
      <a href="../../alterar.php" class="menu-item"><span>Alterar</span></a>
      <a href="../../../../index.php" class="menu-item"><span>Sair</span></a>
    </nav>
  </header>
  <main>
    <h1>Cadastro de professor</h1>
    <form action="validar.php" method="POST">
      <div class="input">
        <span>Nome</span>
        <input type="text" name="nome" required>
      </div>
      <div class="input">
        <span>Senha</span>
        <input type="password" name="senha" required>
      </div>
      <div class="input">
        <span>Email</span>
        <input type="text" name="email" required>
      </div>
      <button class='button'>Cadastrar</button>
    </form>
  </main>
</body>
</html>