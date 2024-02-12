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

    $sql = "SELECT * FROM disciplina";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM assunto WHERE nome = '{$_SESSION['disc']}'";
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
    <h1>Edição de assunto</h1>
    <form action="validar.php" method="POST">
      <div class="input">
        <span>Disciplina</span>
        <select name="disciplina">
          <?php
            while($row=mysqli_fetch_assoc($result)) {
              if ($result2) {
                if ($row['nome'] == $row2['disciplina']) {
                  echo "<option value='{$row['nome']}' selected>{$row['nome']}</option>";
                } else {
                  echo "<option value='{$row['nome']}'>{$row['nome']}</option>";
                }
              } else {
                echo "<option value='{$row['nome']}' selected>{$row['nome']}</option>";
              }
            }
          ?>
        </select>
      </div>
      <div class="input">
        <span>Assunto</span>
        <input type="text" name="nome" value="<?php echo $row2['nome'];?>" required>
      </div>
      <button class='button'>Editar</button>
    </form>
  </main>
</body>
</html>