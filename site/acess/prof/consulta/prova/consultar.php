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

    $sql = "SELECT * FROM prova";
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
    <form action="busca.php" method="post" class="busca" style="display: flex; flex-direction: column; gap: 10px;">
      <input type="text" name="nome" placeholder="Nome da disciplina" required>
      <input type="text" name="assunto" placeholder="Nome do Assunto" required>
      <button type="submit">Buscar</button>
    </form>
    <div class="container">
      <table border="1px" class='lista'>
        <thead>
          <th>ID</th>
          <th>DISCIPLINA</th>
          <th>ASSUNTO</th>
          <th>QUESTOES</th>
        </thead>
        <tbody>
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['disciplina']}</td>
                <td>{$row['assunto']}</td>
                <td>{$row['questoes']}</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>