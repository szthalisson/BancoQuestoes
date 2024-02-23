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

    $disciplina = $_SESSION['disciplina'];

    
    $assunto = $_POST['assunto'];
    $_SESSION['assunto'] = $assunto;

    $sql = "SELECT * FROM questao WHERE disciplina = '$disciplina' AND assunto = '$assunto'";
    $result = mysqli_query($conn, $sql);
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
    <form action="validar.php" method="POST">
      <div class="input">
        <span>Questões</span>
        <?php
          $c = 0;
          while ($row = mysqli_fetch_array($result)) {
            echo "<div class='questao'><input type='checkbox' name='questao[]' value='{$row['enunciado']}' onclick='verificar($c)'><span>{$row['enunciado']}</span></div>";
            $c++;
          }
        ?>
      </div>
      <button class='button' id='btn' disabled>Alterar</button>
    </form>
  </main>
  <script>
    let sel = [];
    let button = document.getElementById('btn');

    function verificar(id) {
      if (sel.length == 0) {
        sel.push(id);
      } else {
        let qnt = 0;
        for (let c = 0; c < sel.length; c++) {
          if (sel[c] == id) {
            qnt++;
          }
        }

        if (qnt <= 0) {
          sel.push(id);
        } else {
          sel.splice(sel.indexOf(id),1);
        }
      }

      console.log(sel);

      if (sel.length > 0) {
        button.disabled = false;
      } else {
        button.disabled = true;
      }
    }
  </script>
</body>
</html>