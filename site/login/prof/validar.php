<?php
  require "../../conexao.php";
  session_start();

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  $sql = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['nome_professor'] = ucwords($row['nome']);
    echo "<script>location.href = '../../acess/prof/home.php';</script>";
  } else {
    echo "<script>alert('Usuário ou senha inválidos! Por favor, tente novamente.'); location.href = 'login.php';</script>";
  }
?>