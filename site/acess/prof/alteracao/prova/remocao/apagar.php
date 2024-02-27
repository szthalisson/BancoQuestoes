<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remoção - Professor</title>
  <link rel="stylesheet" href="../../../../../css/acess/cadastro.css">
  <?php
    require "../../../../../conexao.php";
    session_start();

    $sql = "SELECT * FROM prova WHERE id = '{$_SESSION['disc']}'";
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
    <h1>Remoção de prova</h1>
    <form action="remover.php" method="POST">
      <p>Deseja realmente apagar a prova: <?php echo $row['id']; ?><br>na disciplina: <?php echo $row['disciplina']; ?><br>do assunto: <?php echo $row['assunto']; ?><br>com as seguintes questões:<br><?php echo $row['questoes']?>?</p>
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