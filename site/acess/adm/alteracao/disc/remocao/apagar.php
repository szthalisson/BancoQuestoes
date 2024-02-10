<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remoção - Administrador</title>
  <link rel="stylesheet" href="../../../../../css/acess/cadastro.css">
  <?php
    require "../../../../../conexao.php";
    session_start();

    $sql = "SELECT * FROM disciplina WHERE nome = '{$_SESSION['disc']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['disc_id'] = $row['id'];
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
    <h1>Remoção de disciplina</h1>
    <form action="remover.php" method="POST">
      <p>Deseja realmente apagar a disciplina: <?php echo $row['nome']; ?>?</p>
      <button class='button'>Apagar</button>
    </form>
    <button onclick="cancelar()">Cancelar</button>
  </main>
  <script>
    function cancelar() {
      location.href = '../alterar.php';
    }
  </script>
</body>
</html>