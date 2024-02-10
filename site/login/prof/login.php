<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Professor</title>
  <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
  <main>
    <h1>Login Professor</h1>
    <form action="validar.php" method="POST">
      <div class="input">
        <span>E-mail</span>
        <input type="text" name="email" required>
      </div>
      <div class="input">
        <span>Senha</span>
        <input type="password" name="senha" required>
      </div>
      <div class="outros">
        <a href="../adm/login.php"><span>Entrar como Administrador</span></a>
      </div>
      <button class='button'>Entrar</button>
    </form>
  </main>
</body>
</html>