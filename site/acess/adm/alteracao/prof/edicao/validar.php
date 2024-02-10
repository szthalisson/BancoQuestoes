<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  
  $sql = "SELECT * FROM professor WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email já cadastrado, tente outro!'); location.href = 'editar.php';</script>";
  } else {
    $sql = "UPDATE professor SET nome = '$nome', senha = '$senha' WHERE email = '{$_SESSION['disc']}'";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Professor editado com sucesso!'); location.href = '../../../alterar.php';</script>";
    } else {
      echo "<script>alert('Erro ao editar professor!'); location.href = '../../../alterar.php';</script>";
    }
  }
?>