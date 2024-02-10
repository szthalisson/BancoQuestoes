<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_SESSION["disc"];

  $sql = "DELETE FROM professor WHERE email = '$nome'";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    echo "<script>alert('Professor removido com sucesso!'); location.href = '../../../alterar.php'</script>";
  } else {
    echo "<script>alert('Professor não removido!'); location.href = '../../../alterar.php'</script>";
  }
?>