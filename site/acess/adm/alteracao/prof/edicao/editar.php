<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição - Administrador</title>
  <link rel="stylesheet" href="../../../../../css/acess/cadastro.css">
  <?php
    require "../../../../../conexao.php";
    session_start();

    $sql = "SELECT * FROM professor WHERE email = '{$_SESSION['disc']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  ?>
</head>
<body>
  <header>
    <nav class="menu">
      <a href="../../../home.php" class="menu-item"><span>Home</span></a>
      <a href="../../../cadastrar.php" class="menu-item"><span>Cadastrar</span></a>
      <a href="../../../consultar.php" class="menu-item"><span>Consultar</span></a>
      <a href="../../../alterar.php" class="menu-item"><span>Alterar</span></a>
      <a href="../../../../../index.php" class="menu-item"><span>Sair</span></a>
    </nav>
  </header>
  <main>
    <h1>Edição de disciplina</h1>
    <form action="validar.php" method="POST">
      <div class="input">
        <span>Nome</span>
        <input type="text" name="nome" required value="<?php echo $row['nome']?>">
      </div>
      <div class="input">
        <span>Senha</span>
        <input type="text" name="senha" required value="<?php echo $row['senha']?>">
      </div>
      <button class='button'>Editar</button>
    </form>
  </main>
</body>
</html>