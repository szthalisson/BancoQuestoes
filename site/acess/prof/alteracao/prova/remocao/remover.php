<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_SESSION["disc"];

  $sql = "DELETE FROM prova WHERE id = '$nome'";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    echo "<script>alert('Prova removida com sucesso!'); location.href = '../../../alterar.php'</script>";
  } else {
    echo "<script>alert('Prova não removida!'); location.href = '../../../alterar.php'</script>";
  }
?>