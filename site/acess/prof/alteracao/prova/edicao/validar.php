<?php
  require "../../../../../conexao.php";
  session_start();

  $disciplina = $_SESSION['disciplina'];
  $assunto = $_SESSION['assunto'];
  $questoes = $_POST['questao'];
  $enunciados = "";

  foreach ($questoes as $q) {
    $enunciados = $enunciados . $q . '<br>';
  }

  $sql = "SELECT * FROM prova WHERE disciplina = '$disciplina' and assunto = '$assunto' and questoes = '$enunciados'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Prova já cadastrada, tente outra!'); location.href = 'editar.php';</script>";
  } else {
    $sql = "UPDATE prova SET disciplina = '$disciplina', assunto = '$assunto', questoes = '$enunciados' WHERE id = {$_SESSION['disc']}";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Prova editada com sucesso!'); location.href = '../../../alterar.php';</script>";
    } else {
      echo "<script>alert('Erro ao editar prova!'); location.href = '../../../alterar.php';</script>";
    }
  }
?>