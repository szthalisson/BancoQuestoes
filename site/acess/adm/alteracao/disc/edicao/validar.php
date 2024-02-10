<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_POST['nome'];
  
  $sql = "SELECT * FROM disciplina WHERE nome = '$nome'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Disciplina já cadastrada, tente outra!'); location.href = 'editar.php';</script>";
  } else {
    $nome = strtoupper($nome);
    $sql = "UPDATE disciplina SET nome = '$nome' WHERE id = {$_SESSION['disc_id']}";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Disciplina editada com sucesso!'); location.href = '../../../alterar.php';</script>";
    } else {
      echo "<script>alert('Erro ao editar disciplina!'); location.href = '../../../alterar.php';</script>";
    }
  }
?>