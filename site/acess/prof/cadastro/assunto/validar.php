<?php
  require "../../../../conexao.php";

  $nome = $_POST['nome'];
  $disciplina = $_POST['disciplina'];
  
  $sql = "SELECT * FROM assunto WHERE nome = '$nome' and disciplina = '$disciplina'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Assunto já cadastrado, tente outro!'); location.href = 'cadastrar.php';</script>";
  } else {
    $sql = "INSERT INTO assunto VALUES('$disciplina', '$nome')";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Assunto cadastrado com sucesso!'); location.href = '../../cadastrar.php';</script>";
    } else {
      echo "<script>alert('Erro ao cadastrar Assunto!'); location.href = '../../cadastrar.php';</script>";
    }
  }
?>