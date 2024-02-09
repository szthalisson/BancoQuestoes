<?php
  require "../../../../conexao.php";

  $nome = $_POST['nome'];
  
  $sql = "SELECT * FROM disciplina WHERE nome = '$nome'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Disciplina já cadastrada, tente outra!'); location.href = 'cadastrar.php';</script>";
  } else {
    $nome = strtoupper($nome);
    $sql = "INSERT INTO disciplina VALUES(0, '$nome')";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Disciplina cadastrada com sucesso!'); location.href = '../../cadastrar.php';</script>";
    } else {
      echo "<script>alert('Erro ao cadastrar disciplina!'); location.href = '../../cadastrar.php';</script>";
    }
  }
?>