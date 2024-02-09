<?php
  require "../../conexao.php";

  $user = $_POST['user'];
  $senha = $_POST['senha'];
  
  $sql = "SELECT * FROM administrador WHERE user = '$user' AND senha = '$senha'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>location.href = '../../acess/adm/home.php';</script>";
  } else {
    echo "<script>alert('Usuário ou senha inválidos! Por favor, tente novamente.'); location.href = 'login.php';</script>";
  }
?>