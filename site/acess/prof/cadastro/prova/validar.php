<?php
  require "../../../../conexao.php";
  session_start();

  $disciplina = $_SESSION['disciplina'];
  $assunto = $_SESSION['assunto'];
  $questoes = $_POST['questao'];
  $enunciados = "";

  foreach ($questoes as $q) {
    $enunciados = $enunciados . $q . '<br>';
  }
  
  $sql = "SELECT * FROM prova WHERE disciplina = '$disciplina' AND assunto = '$assunto' and questoes = '$enunciados'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Prova já cadastrada, tente novamente!'); location.href = 'cadastrar.php';</script>";
  } else {
    $sql = "INSERT INTO prova VALUES(0,'$disciplina', '$assunto', '$enunciados')";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Prova cadastrada com sucesso!'); location.href = '../../cadastrar.php';</script>";
    } else {
      echo "<script>alert('Erro ao cadastrar prova!'); location.href = '../../cadastrar.php';</script>";
    }
  }
?>