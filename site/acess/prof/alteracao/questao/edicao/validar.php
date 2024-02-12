<?php
  require "../../../../../conexao.php";
  session_start();

  $disciplina = $_SESSION['disciplina'];
  $assunto = $_POST['assunto'];
  $enunciado = $_POST['enunciado'];
  $resposta = $_POST['resposta'];
  
  $sql = "SELECT * FROM questao WHERE enunciado = '$enunciado' and resposta = '$resposta' and assunto = '$assunto' and disciplina = '$disciplina'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Questão já cadastrada, tente outra!'); location.href = 'editar.php';</script>";
  } else {
    $sql = "UPDATE questao SET disciplina = '$disciplina', assunto = '$assunto', enunciado = '$enunciado', resposta = '$resposta' WHERE enunciado = '{$_SESSION['disc']}'";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Questão editada com sucesso!'); location.href = '../../../alterar.php';</script>";
    } else {
      echo "<script>alert('Erro ao editar Questão!'); location.href = '../../../alterar.php';</script>";
    }
  }
?>