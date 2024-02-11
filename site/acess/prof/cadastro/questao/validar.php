<?php
  require "../../../../conexao.php";
  session_start();

  $disciplina = $_SESSION['disciplina'];
  $assunto = $_POST['assunto'];
  $enunciado = $_POST['enunciado'];
  $resposta = $_POST['resposta'];
  
  $sql = "SELECT * FROM questao WHERE enunciado = '$enunciado' AND disciplina = '$disciplina' and assunto = '$assunto'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Questão já cadastrada, tente novamente!'); location.href = 'cadastrar.php';</script>";
  } else {
    $sql = "INSERT INTO questao VALUES('$disciplina', '$assunto', '$enunciado', '$resposta')";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Questão cadastrada com sucesso!'); location.href = '../../cadastrar.php';</script>";
    } else {
      echo "<script>alert('Erro ao cadastrar Questão!'); location.href = '../../cadastrar.php';</script>";
    }
  }
?>