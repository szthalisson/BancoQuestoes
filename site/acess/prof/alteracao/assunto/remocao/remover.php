<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_SESSION["disc"];

  $sql = "DELETE FROM assunto WHERE nome = '$nome'";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    echo "<script>alert('Assunto removido com sucesso!'); location.href = '../../../alterar.php'</script>";
  } else {
    echo "<script>alert('Assuntp não removido!'); location.href = '../../../alterar.php'</script>";
  }
?>