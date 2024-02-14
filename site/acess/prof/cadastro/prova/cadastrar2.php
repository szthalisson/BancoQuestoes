<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Professor</title>
  <link rel="stylesheet" href="../../../../css/acess/cadastro.css">
  <?php
    require "../../../../conexao.php";
    session_start();

    $disciplina = $_POST['disciplina'];
    $_SESSION['disciplina'] = $disciplina;

    $sql = "SELECT DISTINCT assunto FROM questao WHERE disciplina = '$disciplina'";
    $result = mysqli_query($conn, $sql);
  ?>
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
    <h1>Cadastro de Prova</h1>
    <form action="cadastrar3.php" method="POST">
      <div class="input">
        <span>Assunto</span>
        <select name="assunto">
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='{$row['assunto']}'>{$row['assunto']}</option>";
            }
          ?>
        </select>
      </div>
      <button class='button'>Prosseguir</button>
    </form>
  </main>
</body>
</html>