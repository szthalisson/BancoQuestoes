<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_SESSION["disc"];

  $sql = "DELETE FROM questao WHERE enunciado = '$nome'";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    echo "<script>alert('Questão removida com sucesso!'); location.href = '../../../alterar.php'</script>";
  } else {
    echo "<script>alert('Questão não removida!'); location.href = '../../../alterar.php'</script>";
  }
?>