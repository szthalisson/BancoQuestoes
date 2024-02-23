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

    $sql = "SELECT DISTINCT disciplina FROM questao";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM prova WHERE id = {$_SESSION['disc']}";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
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
    <h1>Edição de questão</h1>
    <form action="editar2.php" method="POST">
      <div class="input">
        <span>Disciplina</span>
        <select name="disciplina">
          <?php
            while($row=mysqli_fetch_assoc($result)) {
              if ($result2) {
                if ($row['disciplina'] == $row2['disciplina']) {
                  echo "<option value='{$row['disciplina']}' selected>{$row['disciplina']}</option>";
                } else {
                  echo "<option value='{$row['disciplina']}'>{$row['disciplina']}</option>";
                }
              } else {
                echo "<option value='{$row['disciplina']}' selected>{$row['disciplina']}</option>";
              }
            }
          ?>
        </select>
      </div>
      <button class='button'>Prosseguir</button>
    </form>
  </main>
</body>
</html>