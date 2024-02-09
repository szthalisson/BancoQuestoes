<?php
  require "../../../../conexao.php";

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  
  $sql = "SELECT * FROM professor WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email já cadastrado, tente outro!'); location.href = 'cadastrar.php';</script>";
  } else {
    $sql = "INSERT INTO professor VALUES('$nome', '$senha', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Professor cadastrado com sucesso!'); location.href = '../../cadastrar.php';</script>";
    } else {
      echo "<script>alert('Erro ao cadastrar professor!'); location.href = '../../cadastrar.php';</script>";
    }
  }
?>