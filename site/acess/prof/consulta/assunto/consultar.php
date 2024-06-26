<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta - Administrador</title>
  <link rel="stylesheet" href="../../../../css/acess/consulta.css">
  <?php
    require "../../../../conexao.php";
    session_start();

    $sql = "SELECT * FROM assunto";
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
    <h1>Consulta</h1>
    <form action="busca.php" method="post" class="busca">
      <input type="text" name="nome" placeholder="Nome da disciplina" required>
      <button type="submit">Buscar</button>
    </form>
    <div class="container">
      <table border="1px" class='lista'>
        <thead>
          <th>DISCIPLINA</th>
          <th>ASSUNTO</th>
        </thead>
        <tbody>
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>{$row['disciplina']}</td>
                <td>{$row['nome']}</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>