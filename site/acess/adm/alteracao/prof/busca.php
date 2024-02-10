<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Altyeração - Administrador</title>
  <link rel="stylesheet" href="../../../../css/acess/consulta.css">
  <?php
    require "../../../../conexao.php";

    $nome = $_POST['nome'];

    $sql = "SELECT * FROM professor WHERE nome LIKE '$nome%'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
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
    <h1>Alteração de professor</h1>
    <form action="busca.php" method="post">
      <input type="text" name="nome" placeholder="Nome do professor" required>
      <button type="submit">Buscar</button>
    </form>
    <form action="validacao.php" method="post" class="form">
      <table border="1px" class='lista'>
        <thead>
        <th>SEL</th>
          <th>NOME</th>
          <th>SENHA</th>
          <th>EMAIL</th>
        </thead>
        <tbody>
          <?php
            if ($rows > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                if ($c == 0) {
                  echo "<tr>
                    <td><input type='radio' value='{$row['email']}' name='disc' checked></td>
                    <td>{$row['nome']}</td>
                    <td>{$row['senha']}</td>
                    <td>{$row['email']}</td>
                  </tr>";
                  $c = 1;
                } else {
                  echo "<tr>
                    <td><input type='radio' value='{$row['email']}' name='disc'></td>
                    <td>{$row['nome']}</td>
                    <td>{$row['senha']}</td>
                    <td>{$row['email']}</td>
                  </tr>";
                }
              }
            } else {
              echo "<script>alert('Professor não encontrado!'); location.href = 'alterar.php'</script>";
            }
          ?>
        </tbody>
      </table>
      <div class="radios">
          <input type="radio" name="alt" value='editar' checked onclick="mudar()">
          <span>Editar</span>
          <input type="radio" name="alt" value='apagar' onclick='mudar()'>
          <span>Apagar</span>
      </div>
      <button type='submit' id='btn'>Editar</button>
    </form>
    <button onclick="voltar()">Mostrar todos</button>
  </main>
  <script>
    function voltar() {
      location.href = 'alterar.php';
    }

    let btn = document.getElementById('btn');

    function mudar() {
      if (btn.innerHTML == "Editar") {
        btn.innerHTML = "Apagar";
      } else {
        btn.innerHTML = "Editar";
      }
    }
  </script>
</body>
</html>