<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_SESSION["disc"];

  $sql = "DELETE FROM disciplina WHERE nome = '$nome'";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    echo "<script>alert('Disciplina removida com sucesso!'); location.href = '../../../alterar.php'</script>";
  } else {
    echo "<script>alert('Disciplina não removida!'); location.href = '../../../alterar.php'</script>";
  }
?>